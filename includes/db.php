<?php
$username = "root";
$pass = "";
$dbname = "marks";


$conn = new mysqli("localhost",$username,$pass,$dbname) or die("Failed to connect to database");

if($conn)
    echo "<script>console.log('Connected successfully')</script>";
else
    echo "<script>console.log('Connection failed')</script>";