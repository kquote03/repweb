<?php session_start();?>

<head>
    <?php include 'includes/db.php'; ?>
<style>
        
        *{text-align:center;}
        #mkpage,#support{width: 230px; height: 50px; padding: 6px;
         background-color: #9b7dad;
         
         font-family: "Times New Roman", Times, serif;
        color: #ffffff; font-weight: bold; font-size: 17px;
        letter-spacing: 1.5px;
        border-radius: 35px;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.271);
        transition: all 0.3s ease 0s;
        cursor: pointer;
        outline: none;
        border-width: thin;
        border-color:white;
        float:left;
        }
       
        #indexcontainer{
            display: flex;
            justify-content: center;
        }
        #mkpage:hover {
        background-color: #be8fdd;
        box-shadow: 0px 15px 20px rgba(114, 86, 132, 0.4);
        color: #fff;
        transform: translateY(-7px);
        }
      #support:hover {
        background-color: #be8fdd;
        box-shadow: 0px 15px 20px rgba(114, 86, 132, 0.4);
        color: #fff;
        transform: translateY(-7px);
       }
       #mkpage{
        /*margin-left:750px;*/
        align-items: center;
       }
       #support{
        margin-left:20px;
       }

        </style>
</head>
<body>
        <?php //print_r($_SESSION); ?>

    <h1 id="welcome">Welcome! <?php echo $row['username'] ?></h1>
    <div id="timecontainer">
        <p>The date is <?php echo date("Y/m/d");?></p>
    </div><br/><br/>
    <div id="indexcontainer">

                <?php
                if($_SESSION['auth'] >= 5){
                echo "<form action=\"markspage.php\" method=\"POST\"> ";
                echo "    <input type=\"submit\" value=\"Proceed to Marks Page\" id=\"mkpage\"/>";
                echo "</form>";
                }
                else if($_SESSION['auth'] == 1){
                echo "<form action=\"studentpage.php\" method=\"POST\"> ";
                echo "    <input type=\"submit\" value=\"View Marks\"/>";
                echo "</form>";
                }
                ?>

                <input type="button" value="Support" onclick="window.location.replace('https://aau.ac.ae/en/contact-alain-university/');" id="support"/>

    </div>
</body>
