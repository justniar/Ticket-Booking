<?php
include '../connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:../index.php");
}
include '../header/header.php';
?>
<style >
	.container{
      margin-left: 5em;
      display: inline-block;
      border-spacing: 10px;
      font-family: Montserrat, sans-serif;
      font-size: 18px !important;
      margin-top: 10px;
      margin-bottom: 10px;
      padding: 25px;
    }

    .container a{
      background-color: #161A30;
      width: 25%; 
      font-size: 18px;
      display: inline;
    }

    .wh{
      background-color: white;
      color:#161A30;
      box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      margin-bottom: 3em;
    }
</style>

<html>
<head>
<link rel='stylesheet' href='../style/index.css'>
<br><br>
</head>
  <h1><center><b><img width="64" height="64" src="https://img.icons8.com/nolan/64/event-accepted.png" alt="event-accepted"/> User Bookings &nbsp <img src="https://img.icons8.com/nolan/74/ticket.png"/></center></b></h1>
  <div class="container" >
    <a href='../book/trainbookings.php'><button class="wh"><img src="https://img.icons8.com/dusk/44/000000/train-ticket.png"/>  View Train Bookings </button></a>
    <a href='../book/busbookings.php'><button class="wh"><img src="https://img.icons8.com/officel/50/000000/bus-ticket.png"/>  View Bus Bookings</button></a>
  </div>
<?php include '../footer/footer.php';
?> 

</html>