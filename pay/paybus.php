<?php
include '../connect.php';
include '../header/head2.php';
session_start();
if ($_SESSION['log'] == '')
{
    header("location:../sindex.php");
}
?>

<html>
<head>
  <style >
    .formm{
      font-family: Montserrat, sans-serif;
      font-size: 18px !important;
      margin-left: 5em;
    }

  </style>
<link rel="shortcut icon" href="logofig.jpg" />
<title> Registration Page </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-color: #fff;">
  <div class="formm">
    <h2 align="center"><b>Enter Payment Details :</b>  </h2>

    <!--<center><img src="logohead.png" width='35%'></center> -->
    <form method='post' action ='buspayaction.php'>
    <div class="row mb-3">
      <label for="colFormLabel" class="col-sm-2 col-form-label">Card No</label>
      <div class="col-sm-8">
        <input type="Number" name="cno" class="form-control" id="colFormLabel" placeholder="card number">
      </div>
    </div>

    <div class="row mb-3">
      <label for="colFormLabel" class="col-sm-2 col-form-label">Name on Card</label>
      <div class="col-sm-8">
        <input type="Text" name="name" class="form-control" id="colFormLabel" placeholder="name on card">
      </div>
    </div>

    <div class="row mb-3">
      <label for="colFormLabel" class="col-sm-2 col-form-label">Expiry Date</label>
      <div class="col-auto">
        <input type="Number" name="Em" class="form-control" placeholder="MM" aria-label="First name">
      </div>
      <div class="col-auto">
        <input type="Number" name="Ey" class="form-control" placeholder="YY" aria-label="Last name">
      </div>
    </div>


    <div class="row mb-3">
      <label for="colFormLabel" class="col-sm-2 col-form-label">CVV Number</label>
      <div class="col-sm-8">
        <input type="Password" name="Cvv" class="form-control" id="colFormLabel" placeholder="cvv number">
      </div>
    </div>

    <div class="row mb-3">
      <label for="colFormLabel" class="col-sm-2 col-form-label">PIN Number</label>
      <div class="col-sm-8">
        <input type="Password"  name="Pin" class="form-control" id="colFormLabel" placeholder="pin number">
      </div>
    </div>

    <center><button type="Submit" name='register_submit' class="d-grid gap-2 col-6 mx-auto">Complete Payment</button></center>
    </form>

  </div>
<?php include '../footer/footer.php';
?> 

</html>