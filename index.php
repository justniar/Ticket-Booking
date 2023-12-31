<?php
include 'homehead.php';
?>
<html>
<head>
  <link rel='stylesheet' href='style/index.css'>
  <style>
  body {
  margin-top: 0;
  color: #213555;
  background-color: #F0F0F0;
  font-family: 'Roboto', serif;
}
  
  .jumbotron {
  text-align: center;
  margin: 32px;
  display: flex;
  flex-direction: row;
  /* vertical-align: middle; */
}

.jumbotron .left {
  margin: auto;
  padding: 20px;
  flex-direction: column;
  flex-basis: 45%;
  flex-grow: 1;
}

.jumbotron .right {
  margin: 20px auto;
  flex-direction: column;
  flex-basis: 55%;
  flex-grow: 1;
}

.jumbotron img {
  width: 100%;
  border-radius: 14px;
}
.button-primary {
  margin: 40px auto;
  display: inline-block;
  position: flex;
  text-decoration: none;
  font-size: 20px;
  color: #ffffff;
  padding: 10px 20px;
  background-color: #4F709C;
  border: none;
  border-radius: 50px;
  cursor: pointer;
  overflow: hidden;
  transition: all 0.1s ease 0s;
}

.button-primary:after {
  content: '';
  display: inline-block;
  position: absolute;
  top: 0;
  left: -20px;
  width: 0%;
  height: 100%;
  background-color: #fff;
  opacity: 0.2;
  transform: skewX(-45deg);
  transition: width .3s;
}



@media (max-width: 600px), (max-width: 768px) {
  .desktop {
    display: none;
  }

  .mobile {
    display: block;
  }

  .jumbotron {
    text-align: center;
    margin: 18vh 32px;
    display: block;
  }

  .jumbotron .left {
    margin: 20px auto;
    padding: 20px;
  }

  .jumbotron .right {
    margin: 20px auto;
  }
}

  </style>
</head>

<body>
        <div class="jumbotron">
            <section class="left">
                <h1 class="title">
                  Welcome To Niar Ticket Booking Portal
                </h1>
                <div class="subtitle">
                    <p>
                        Memesan Tiket lebih mudah dengan Niar Ticket Booking Portal
                    </p>
                </div>
                <a href='book/book.php' class="button-primary">Book Train Tickets</a>
                <a href='book/bookbus.php' class="button-primary">Book Bus Tickets</a>
            </section>
            <section class="right desktop">
                <img src="style/bg.png">
            </section>
        </div>
        <?php include 'footer/footer.php';
?> 
  </body>
</html>