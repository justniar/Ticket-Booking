<?php
include '../connect.php';
?>
<html>
<head>
 <link rel='stylesheet' href='../style/index.css'>
 <style >  
 .table{  
	font-family: Montserrat, sans-serif;
	padding: 0%;
	}
</style>
<title>Niar Ticket Booking</title>
</head>
<div><center><img src="https://img.icons8.com/bubbles/280/000000/admin-settings-male.png"/></div>
<br>
<br>
<body style="background-color: fff;">
	<h1><center><b>Admin Sign In</center></b></h1>

<form method='post' action ='adminauthenticate.php'  >
<div>
<table align="center" class="table">
	<tr><td><h2><b>Email id: </b></h2></td> <td><input type="email" name="email" maxlength='50'></td></tr>
	<tr><td><h2><b> Password: </b></h2></td> <td><input type="password" name="password" maxlength='50'></td></td></tr>
	<tr><td colspan='2'><center><button type='Submit' style="background-color:#161A30; border-color:black" name='login_submit' ><b>Sign in </b> </button></center></td></tr></table>
</table>
</form>
<center><h3><a href='../regist/sindex.php' style="color: #161A30"><b>User Sign In ?</b></a></h3></center>

</body>
</html>