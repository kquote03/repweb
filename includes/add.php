<?php
session_start();
include 'includes/db.php';

$sqlAdd = "INSERT INTO grades(id_fk, instructor_id_fk, course_name, quiz1, quiz2, assignment1, assignment2, midterm, finalexam, status)
VALUES
('$_POST[sid]','$_SESSION[id]',
;";