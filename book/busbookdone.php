<?php
include '../connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:../sindex.php");
}
include '../header/header.php';
?>
<style>
	#font{
      font-family: Montserrat, sans-serif;
     font-size: 18px !important;
	}
	.table-striped{
		padding-left: 5em;
		
	}
	.prints{
		background-color:#161A30; 
		border-color:black; 
		max-width:25%; 
		height: auto;
		align:center;
	}
</style>

 <link rel='stylesheet' href='../style/index.css'>


           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
           <script type="text/javascript">
        
           </script>
          

</head>
 <?php 
   $result = mysqli_query($connect , "SELECT * FROM `bustransactions` WHERE `email`='".$_SESSION['email']."' ORDER BY `T_No.` DESC LIMIT 1");
  while ($row = mysqli_fetch_assoc($result)): 
    $tno = $row["T_No."];
    $_SESSION['tno']= $tno ;
  ?>

<body style="background-color: fff;">
	 <h2 align="center"><b><img src="https://img.icons8.com/ios-filled/50/000000/summary-list.png"/> Booking Summary</b></h2>
           <br>


				<table class="table table-striped" id="font">

				<tr>
					<th>Ticket No</th>
					<td><?php echo $row['T_No.']; ?></td>
				</tr>
			
				<tr>
					<th>Name</th>
					<td><?php echo $_SESSION['name'] ?></td>
				</tr>

				<tr>
					<th>Email</th>
					<td><?php echo $_SESSION['email'] ?></td>
				</tr>

				

				<tr>
					<th>Source Station</th>
					<td><?php echo $_SESSION['source'] ?></td>
				</tr>

				<tr>
					<th>Destination</th>
					<td><?php echo $_SESSION['dest'] ?></td>
				</tr>

				<tr>
					<th>Amount</th>
					<td>Rp&nbsp&nbsp<?php echo $_SESSION['final'] ?></td>
				</tr>
			</table>

<div align="center">
	<a href="../pay/printbus.php?pid='<?php echo $_SESSION['tno']?>' " target="_blank" ><button class="prints"><h3><span style="color:white;"> Print Ticket<br> </span></h3></button></a>
</div>
</body style="background-color: F5F1F0;">
<?php endwhile; ?>


</html>