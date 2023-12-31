<!--Registration Page-->


<?php     
include '../connect.php';                           
include '../header/head2.php'
?>



<html>
<head>
 <style >  .table{  
	font-family: Montserrat, sans-serif;
	margin: 50px;
	}
  .card {
  margin: 5em;
  padding: 3em;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 5px; /* 5px rounded corners */
}
</style>
<title> Registration Page </title>
</head>
<div><center><img src="https://img.icons8.com/bubbles/250/000000/add-user-male.png"/></center></div>
<div>
	<h2><center><b>User Registeration</center></b></h2>

<body style="background-color: 0C356A;">

<form method='post' action ='register_insert.php' class="card">
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Name:</label>
    <div class="col-sm-10">
      <input type="Text" name="name" maxlength='50' class="form-control" placeholder="Your Full Name" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Email:</label>
    <div class="col-sm-10">
      <input type="email" name="email" maxlength='50' class="form-control" placeholder="Email" required >
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Date of Birth:</label>
    <div class="col-sm-10">
      <input class="form-control" type="Text" name="dob" maxlength='50' placeholder='yyyy-mm-dd' required>
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Gender" value="M" checked>
          <label class="form-check-label" for="gridRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Gender" value="F">
          <label class="form-check-label" for="gridRadios2">
            Female
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Password:</label>
    <div class="col-sm-10">
      <input class="form-control" type="password" name="password" maxlength='50' required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Whatsapp Number:</label>
    <div class="col-sm-10">
      <input class="form-control" type="tel"  name="phone"  maxlength='12' required>
    </div>
  </div>
  <div align="center" >
  	<button type="submit" class="btn btn-primary" name='register_submit' required>Submit</button>
	<h4><a href='sindex.php' style="color: black">Registered? Sign In !</a></h4>
	</div>
</form>




</body style="background-color: 0C356A;">

<?php include '../footer/footer.php';
?>

</html>