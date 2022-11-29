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
        /*
        table,td,th{ border: 4px solid black;
        border-collapse:collapse; 
        }
        th{ padding: 15px;
         background-color:#be8fdd;
        }
        td{ padding:"5px";
        text-align:center;
        }*/
        /*input[type=submit] {
  color: transparent;
}*/
#edit {
    color: transparent;
}

#edit {
  position: relative;
}

#edit:after {
    content: "E";
    position: absolute;
    display: block;
    color: black;
    top: 1px;
    left: 1px;
}
    </style>
</head>
<body>
        <?php
        //print_r($_SESSION);
    ?>
<form action="gradecalc.php" method="POST">
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
            <th>    
        <input type="submit" value="Add student" name="submit"/>
    </form>
    </th>
        </tr>
<form action="gradeedit.php" method="POST">
        <?php
            $sqlMarks = "SELECT * FROM grades WHERE instructor_id_fk=$_SESSION[id];";
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

               echo "<td><label>Edit:</label><input type=\"submit\" value=\"$rowMarks[grade_id]\" name=\"submit\" id=\"edit\" /></td>";
               echo "</tr>";
            $rowMarks = mysqli_fetch_assoc($resultMarks);

            }
        ?>
    </table>
    </form>
</body>
</html> 
