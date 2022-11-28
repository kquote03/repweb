<?php
session_start();
include 'includes/db.php';
$creds = array("username"=>"$_POST[username]", "password"=>"$_POST[password]");
$sql = "SELECT * FROM accounts WHERE username='$creds[username]';";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) != 0) echo "Result ran successfully";
else{
    header("Location: login.html?error=invalidlogin");
    die();
}

$row = mysqli_fetch_assoc($result);


if($creds['username'] != $row['username'] || $creds['password'] != $row['password']){
    header("Location: login.html?error=invalidlogindetails");
    die();
}


$auth = 0; 
switch($row['type']){
    case 'instructor':
        $auth += 5;
        break;
    case 'admin':
        $auth+= 10;
        break;
    case 'student':
        $auth += 1;
        break;
}

$_SESSION['username'] = $row['username'];
$_SESSION['id'] = $row['id'];
$_SESSION['auth'] = $auth;
$_SESSION['type'] = $row['type'];
print_r($_SESSION);
header("location: homepage.php");
exit();