<?php


include '../connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:../index.php");
}




include '../header/header.php';

$source = $_POST['source'];
$dest = $_POST['dest'];

$no = $_POST['number'];

if ($source == $dest)
{
  echo"<h1><center>Selected source and destination same , Please refill the details  </center></h1><br><br>";
  echo'<center>

<td><form action="bookBUS.php"><button style="background-color: black; padding: 25px 70px; type="submit"; align=center;"><span style=color:white;><h3>Go back</h3></span></a></td></button></form><br><br>';
}
else{
$sql_price="SELECT * FROM `pricebus` WHERE `source` LIKE '$source' AND `dest` LIKE '$dest'";
$result = $connect->query($sql_price);
while($row = $result->fetch_assoc()){
$final = $row["Price"]*$no  ;
$pobus = $row["PO_bus"];

echo "<br><br><br><h1><center>Total you have to pay for <b>".$pobus."</b> from <b>".$source." to ".$dest."</b> is  : Rp <b>".$final."</b> </center></h1><br><br>";
echo'<center>
<td><form action="../pay/paybus.php"><button type="submit" class="blue"><span style=color:white;><h3>Checkout</h3></span></a></td></button></form><br><br>

<td><form action="bookbus.php"><button type="submit" class="blue"><span style=color:white;><h3>Go back</h3></span></a></td></button></form><br><br>';
 }
$_SESSION['final']= $final ;
$_SESSION['source']=$source;
$_SESSION['dest']=$dest;
$_SESSION['pobus']=$pobus;
$_SESSION['NoOfpass']=$no;
}
?>
<style>
  .blue{
    background-color: #161A30; 
    border-radius:10px; 
    padding: 15px; ; 
    align=center;

  }
</style>