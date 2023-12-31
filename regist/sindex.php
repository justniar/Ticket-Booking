<?php
include '../connect.php';
include '../header/head2.php';
?>
<html>
<head>

 <title>Niar Ticket Booking</title>
 <style>
    .card {
        margin: 2em 10em;
        padding: 3em;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        border-radius: 5px; /* 5px rounded corners */
        align-items: center;
    }
    
 </style>
</head>
<div><center><img src="https://img.icons8.com/bubbles/300/000000/user.png"/></center></div>
<h2><center><b>User Sign In</center></b></h2>
<body style="background-color: #fff;">
    <form method='post' action ='../authenticate.php' class="card">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
                <input type="email" name="email" maxlength='50' class="form-control" placeholder="Email" required >
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password:</label>
            <div class="col-sm-10">
                <input class="form-control" type="password" name="password" maxlength='50' required>
            </div>
        </div>
        <div align="center">
            <button type="submit" class="btn btn-primary" name='login_submit' required>Sign In</button>
            <h4><a href='register.php' style="color: black">Register</a></h4>
        </div>
    </form>
    <center><h4><a href='../admin/adminindex.php' style="color: black"><b>Admin Sign In?</b></a></h4></center>

</body style="background-color: #fff;">
    
<?php include '../footer/footer.php';?>
</html>