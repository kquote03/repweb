<?php
session_start();
include 'db.php';
include 'validatemarks.php';

$sqlPin = "SELECT * FROM accounts WHERE id=$_SESSION[id];";
$resultPin = mysqli_query($conn,$sqlPin);
$rowPin = mysqli_fetch_assoc($resultPin);
$finalPin = $rowPin['pin'];



$valid = validatemarks($_POST['quiz1'],$_POST['quiz2'],$_POST['assignment1'],$_POST['assignment2'],$_POST['midterm'],$_POST['finalexam']);

if($valid && $_POST['pin'] == $finalPin){
$sqlEdit = "UPDATE grades SET course_name='$_POST[coursename]', 
quiz1=$_POST[quiz1], 
quiz2=$_POST[quiz2], 
assignment1=$_POST[assignment1],
assignment2=$_POST[assignment2],
midterm=$_POST[midterm],
finalexam=$_POST[finalexam],
status='$_POST[status]'
WHERE grade_id=$_SESSION[edittingid]
;";


print_r($_POST);
echo $sqlEdit;

if(mysqli_query($conn,$sqlEdit))
echo "<script>console.log('Edited successfully')</script>";
else
echo "<script>console.log('Failed to edit')</script>";


//Delete the temp id because if a user access the page illegally then it would cause chaos
unset($_SESSION['edittingid']);


header("location: ../markspage.php");

}
else{
    header("location: ../markspage.php?error=invalidpin");

}