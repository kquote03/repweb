<!DOCTYPE html>

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
    </table>
</body>
</html> 