<!DOCTYPE html>

<?php session_start();?>
<html lang="en">
<head>
    <?php include 'includes/db.php' ?>


    <title>Marks Page</title>
    <style>
         table,td,th{ border: 4px black;
        border-collapse:collapse; 
        }
        th{ padding: 15px;
         background-color:#be8fdd;
         text-align: center;
         color: white;
        }
        tr{
            border-bottom: 1px solid #dddddd;
        }
        td{ padding:"5px";
        text-align:center;
        }
        #table{
            border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body>
        <?php
        //print_r($_SESSION);
    ?>
    <form action="gradecalc.php" method="POST">
    </form>
    <table style="width:80%" id="table">
    <caption><h3>Marks Page</h3></caption>
        <tr>
            <th>Student ID</th>
            <th>Course Name</th>
            <th>Quiz 1</th>
            <th>Quiz 2</th>   
            <th>Assignment 1</th>
            <th>Assignment 2</th>
            <th>Midterm</th>
            <th>Final Exam</th>
            <th>Status</th>
        </tr>
        <?php
            $sqlMarks = "SELECT * FROM grades WHERE id_fk=$_SESSION[id];";
            //echo $sqlMarks;
            $resultMarks = mysqli_query($conn,$sqlMarks);
            $rowMarks = mysqli_fetch_assoc($resultMarks);
            //print_r($rowMarks);

            for($i = 0; $i < mysqli_num_rows($resultMarks); $i++){
               echo "<tr>";
               echo "<td>$rowMarks[id_fk]</td>"; 
               echo "<td>$rowMarks[course_name]</td>"; 
               echo "<td>$rowMarks[quiz1]</td>"; 
               echo "<td>$rowMarks[quiz2]</td>"; 
               echo "<td>$rowMarks[assignment1]</td>"; 
               echo "<td>$rowMarks[assignment2]</td>"; 
               echo "<td>$rowMarks[midterm]</td>"; 
               echo "<td>$rowMarks[finalexam]</td>"; 
               echo "<td>$rowMarks[status]</td>"; 

               echo "</tr>";
               $rowMarks = mysqli_fetch_assoc($resultMarks);


            }
        ?>
    </table>
</body>
</html> 
