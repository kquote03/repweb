<?php

function validatemarks($quiz1,$quiz2,$assignment1,$assignment2,$midterm,$finalexam){
$valid = false;

if($quiz1 < 0 || $quiz1 > 10){
    $valid = false;
    header("location: ../markspage.php?error=invalidmarks");
}
else if($quiz2 < 0 || $quiz2 > 10){
    $valid = false;
    header("location: ../markspage.php?error=invalidmarks");
}
else if($assignment1 < 0 || $assignment1 > 10){
    $valid = false;
    header("location: ../markspage.php?error=invalidmarks");
}
else if($assignment2 < 0 || $assignment2 > 10){
    $valid = false;
    header("location: ../markspage.php?error=invalidmarks");
}
else if($midterm < 0 || $midterm > 20){
    $valid = false;
    header("location: ../markspage.php?error=invalidmarks");
}
else if($finalexam < 0 || $finalexam > 40){
    $valid = false;
    header("location: ../markspage.php?error=invalidmarks");
}
else
    $valid=true;
return $valid;

}