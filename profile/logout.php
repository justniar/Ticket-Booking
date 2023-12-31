<?php
session_start();
?>
<html>
<head>
<link rel='stylesheet' href='../style/index.css'>
 <link rel="shortcut icon" href="logofig.jpg" />
 <style>
    body{
        margin-top: 100px;
    }
 </style>
</head>
<body style="background-color: F5F1F0;">
<?php

session_destroy();
echo '<center><h2>Thank You for using Niar Ticket Booking Application<h2></center><br>';
echo '<center><table><tr><td><A href="../index.php"><button style="background-color:#161A30; border-color:#161A30">Sign in ! &nbsp&nbspAgain</button></a></td></tr></table></center>';
?>
</body style="background-color: F5F1F0;">
</html>