<!DOCTYPE html>

<?php session_start();?>
<html lang="en">
<head>
    <?php include 'includes/db.php' ?>


    <title>Marks Page</title>
    <style>
        table,td,th{ border: 4px solid black;
        border-collapse:collapse; 
        }
        th{ padding: 15px;
         background-color:#be8fdd;
        }
        td{ padding:"5px";
        text-align:center;
        }
    </style>
</head>
<body>
        <?php
        print_r($_SESSION);
    ?>
    <table style="width:80%" id="table">
    <caption>Marks Page</caption>
        <tr>
            <th>Student ID </th>
            <th>Course Nmae </th>
            <th>Quiz 1 </th>
            <th>Quiz 2 </th>   
            <th>Assignment1 </th>
            <th>Assignment2</th>
            <th>Midterm </th>
            <th>Final Exam </th>
            <th>Status</th>
        </tr>
        <?php
            $sqlMarks = "SELECT * FROM grades WHERE instructor_id_fk=$_SESSION[id];";
            echo $sqlMarks;
            $resultMarks = mysqli_query($conn,$sqlMarks);
            $rowMarks = mysqli_fetch_assoc($resultMarks);
            print_r($rowMarks);

            for($i = 0; $i < mysqli_num_rows($resultMarks); $i++){
               echo "<td>$rowMarks[id_fk]</td>"; 
               echo "<td>$rowMarks[course_name]</td>"; 
               echo "<td>$rowMarks[quiz1]</td>"; 
               echo "<td>$rowMarks[quiz2]</td>"; 
               echo "<td>$rowMarks[assignment1]</td>"; 
               echo "<td>$rowMarks[assignment2]</td>"; 
               echo "<td>$rowMarks[midterm]</td>"; 
               echo "<td>$rowMarks[finalexam]</td>"; 
               echo "<td>$rowMarks[status]</td>"; 
            }
        ?>
    </table>
</body>
</html> 