<!DOCTYPE html>
<?php session_start()?>
<?php include 'includes/db.php';?>
<html lang="en">
<head>
<?php 
$sqlFind = "SELECT * FROM grades WHERE grade_id=$_POST[submit];";
$_SESSION['edittingid'] = $_POST['submit'];
$result = mysqli_query($conn,$sqlFind);
$rowFind = mysqli_fetch_assoc($result);
?>
<link rel="stylesheet" href="gradecalc.css">    
<meta charset="en"/>
<title>grade calc</title> 
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Audiowide&family=DM+Serif+Display&family=Passion+One&family=Righteous&family=Yeseva+One&display=swap" rel="stylesheet">   
<script type="text/javascript" src="grades.js">
</script>
</head>
<body>   
    <div id="gradecalc">
        <div id="calccontainer">
            <form action="includes/edit.php" method="POST">
                <h1 id="head1">Grade Editor</h1>
                <div id="studentid">
                    Student ID: <input type ="text" id="sdid" maxlength="9" name="sid" readonly
                    value="<?php echo $rowFind['id_fk'];?>"
                    />
                </div>
                <div id="pass">
                   4-Digit Password <input type="text" size="4" id="pass1" maxlength="4" name="pin"/>
                </div>
                <div id="status">
                   Status <select name="status" id="statusselect" name="status" value="<?php echo $rowFind['status'];?>">
                    <option> Active</option>
                    <option>Withdrawn</option>
                   </select>
                </div>

                <div id="coursename">
                    Course name: <input type="text" name="coursename" value="<?php echo $rowFind['course_name'];?>"/>
                </div>

                <div id="part1">
                    <div id="quiz1">
                    Quiz 1: <input type="text" id="q1" maxlength="2" name="quiz1" value="<?php echo $rowFind['quiz1'];?>">

                    </div>
                    <div id="quiz2">
                    Quiz 2: <input type="text" id="q2" maxlength="2" name="quiz2" value="<?php echo $rowFind['quiz2'];?>">
                    </div>
                    <div id="assignment1">
                        Assignment 1: <input type="text" id="a1" maxlength="2" name="assignment1" value="<?php echo $rowFind['assignment1'];?>">
                    </div>
                </div>
                
                <div id="part2">
                    <div id="assignment2">
                        Assignment 2: <input type="text" id="a2" maxlength="2" name="assignment2" value="<?php echo $rowFind['assignment2'];?>">
                        </div>
                        <div id="midterm">
                       Midterm: <input type="text" id="mid" maxlength="2" name="midterm" value="<?php echo $rowFind['midterm'];?>">
                        </div>
                        <div id="final">
                            Final Exam: <input type="text" id="fin" maxlength="2" name="finalexam" value="<?php echo $rowFind['finalexam'];?>">
                        </div>
                </div>
                <div id="submitbutton">
                    <input type="submit" id="submit" value="Save"/>
                </div>
                </div>
            </form>  
    </div> 
</body>
</html>