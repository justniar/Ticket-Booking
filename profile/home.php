<?php
include '../connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:../sindex.php");
}
include '../header/header.php';
?>


<style >
  .container{
      border-spacing: 10px;
      font-family: Montserrat, sans-serif;
      font-size: 18px !important;
      margin-top: 50px;
      margin-bottom: 200px;
      padding-top: 50px;
      padding-right: 120px;
      padding-bottom: 50px;
      padding-left: 150px;
      align-content: center;

    }
</style>

<html>
<head>
<link rel='stylesheet' href='../style/index.css'>
<br><br>
  <h1   text-transform: capitalize;><center><b><img src="https://img.icons8.com/clouds/90/000000/add-bookmark.png"/> Welcome  <?php  echo " ". $_SESSION['name'] ."" ?> To Niar Ticket Booking Portal <img src="https://img.icons8.com/clouds/90/000000/add-bookmark.png"/></center></b></h1>

<div class="container">

  <td><a href='../book/book.php'><button style="background-color: #161A30; border-color:#161A30"  ><img src="https://img.icons8.com/nolan/54/train.png"/>&nbsp&nbspBook Train Tickets </button></a></td>
 </tr> 
<br> <br> 

<tr>

<td><a href='../book/bookbus.php'><button style="background-color: #161A30; border-color:#161A30 "><img src="https://img.icons8.com/nolan/54/bus.png"/>&nbsp&nbspBook Bus Tickets</button></a></td></td>
</tr>
</table>
</tr>
</div>
<?php include '../footer/footer.php';
?> 

</html>