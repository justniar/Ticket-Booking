
<head>
  <title>Niar Ticket Booking</title>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=0.56, maximum-scale=3.0, minimum-scale=0.46">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
  <link rel="stylesheet" href="../style/header.css"/>
</head>

<nav class="navbar navbar-default navbar-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="../profile/home.php"><img width="48" height="48" src="https://img.icons8.com/color/48/home--v4.png" alt="home--v4"/>Home&nbsp</a></li>

        <li><a href="../book/book.php"><img width="48" height="48" src="https://img.icons8.com/color/48/000000/train.png" alt="train"/>Train Ticket&nbsp</a></li>
        <li><a href="../book/bookbus.php"><img width="48" height="48" src="https://img.icons8.com/color/48/bus.png" alt="bus"/>Bus Ticket&nbsp</a></li>
        <li><a href="../profile/mybookings.php"><img width="48" height="48" src="https://img.icons8.com/color/48/bookmark--v2.png" alt="bookmark--v2"/>User Bookings&nbsp</a></li>
        <li><a href="../schedule/trainschedule.php"><img width="48" height="48" src="https://img.icons8.com/color/48/overtime.png" alt="overtime"/>Train Schedule&nbsp</a></li>
     </ul>
     <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img width="48" height="48" src="https://img.icons8.com/fluency/48/000000/gender-neutral-user--v1.png" alt="gender-neutral-user--v1"/>&nbsp User : <?php  echo " ". $_SESSION['name'] ."" ?>
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
             <li><a href="../profile/myprofile.php"><span class="glyphicon glyphicon-user  "></span> My Profile</a></li>
    <li><a href="../profile/logout.php"><span class="glyphicon glyphicon-log-out  "></span> Logout</a></li>
          </ul>
        
      </ul>
    </div>
  </div>
</nav>

</body>
</html>
