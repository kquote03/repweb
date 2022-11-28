<head>
    <?php include 'includes/db.php'; ?>
    <!--Fetch username-->
    <?php
        $creds = array("username"=>"$_POST[username]", "password"=>"$_POST[password]");
        //print_r($creds);
        $sql = "SELECT * FROM accounts WHERE username='$creds[username]';";
        //echo $sql;
        $result = mysqli_query($conn,$sql);
        //if($result) echo "Result ran successfully";
        //echo mysqli_num_rows($result);

        if(mysqli_num_rows($result) == 0)
            echo "<script>alert('username not found')</script>";

        $row = mysqli_fetch_assoc($result);
        //print_r($row);
    ?>
</head>
<body>
    <h1>Welcome! <?php echo $row['username'] ?></h1>
</body>