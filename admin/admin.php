<?php
include '../connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:adminindex.php");
}
include 'adminheader.php';
?>

<br>
<br>

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
  <h1><center><b> Admins Data Base <img src="https://img.icons8.com/clouds/100/000000/lock-database-.png"/> </center></b></h1>

<div class="container">

  <td><a href='admintraindb.php'><button style="background-color: #161A30; border-color:#161A30"  ><img src="https://img.icons8.com/nolan/54/train.png"/>View Train Bookings </button></a></td>
 </tr> 
<br> <br> 

<tr>

<td><a href='adminbusdb.php'><button  style="background-color: #161A30; border-color:#161A30 "><img src="https://img.icons8.com/nolan/54/bus.png"/>View Bus Bookings</button></a></td></td>
</tr>
</table>
</tr>
</div>

<?php include '../footer/footer.php';
?> 
</html>