<?php
$username = "root";
$pass = "";
$dbname = "marks";


$conn = new mysqli("localhost",$username,$pass,$dbname) or die("Failed to connect to database");

if($conn)
    echo "<script>alert('Connected successfully')</script>";
else
    echo "<script>alert('Connection failed')</script>";