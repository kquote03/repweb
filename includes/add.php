<?php
session_start();
include 'db.php';

$sqlAdd = "INSERT INTO grades(id_fk, instructor_id_fk, course_name, quiz1, quiz2, assignment1, assignment2, midterm, finalexam, status)
VALUES
($_POST[sid],$_SESSION[id],'$_POST[coursename]',$_POST[quiz1],$_POST[quiz2],$_POST[assignment1],$_POST[assignment2],$_POST[midterm],$_POST[finalexam],'$_POST[status]')
;";

//print_r($_POST);
//echo $sqlAdd;

if(mysqli_query($conn,$sqlAdd))
echo "<script>console.log('Added successfully')</script>";
else
echo "<script>console.log('Failed to add')</script>";

header("location: ../markspage.php");

