<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<head>
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
            <form action="" >
                <h1 id="head1">Grade Calculator</h1>
                <div id="studentid">
                    Student ID: <input type ="text" id="sdid" maxlength="9"/>
                </div>
                <div id="pass">
                   4-Digit Password <input type="text" size="4" id="pass1" maxlength="4"/>
                </div>
                <div id="status">
                   Status <select name="status" id="statusselect">
                    <option> Active</option>
                    <option>Withdrawn</option>
                   </select>
                </div>
                <div id="part1">
                    <div id="quiz1">
                    Quiz 1: <input type="text" id="q1" maxlength="2">

                    </div>
                    <div id="quiz2">
                    Quiz 2: <input type="text" id="q2" maxlength="2">
                    </div>
                    <div id="assignment1">
                        Assignment 1: <input type="text" id="a1" maxlength="2">
                    </div>
                </div>
                
                <div id="part2">
                    <div id="assignment2">
                        Assignment 2: <input type="text" id="a2" maxlength="2">
                        </div>
                        <div id="midterm">
                       Midterm: <input type="text" id="mid" maxlength="2">
                        </div>
                        <div id="final">
                            Final Exam: <input type="text" id="fin" maxlength="2">
                        </div>
                </div>
                <div id="submitbutton">
                    <input type="submit" id="submit" value="Calculate Grade"  onclick="calculateGrade()"/>
                </div>
                </div>
            </form>  
    </div> 
</body>
</html>
