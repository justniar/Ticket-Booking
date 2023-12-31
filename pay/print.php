     "
<h1 align="center">Ticket Details</h1>
<br>

<style >
      $black: #343434;
  h1{
    margin-top: 1em;
  }
  p{
    font-family: Georgia, 'Times New Roman', Times, serif;
  }
  .ticket {
    align-items: center;
    font-family: Montserrat, sans-serif;
  }
  .white{
    color: white;
  }

  .ticketdesign {
    max-width:50%;
    background: linear-gradient(to bottom, #161A30 0%, #161A30 19%, #f2f0f0 19%, #f2f0f0 100%);
    height: auto;
    object-position: center;
    padding: 1em;
    margin-top: 2em;

  }


  .ticketstructure {
      align-content: center;
      border-top-left-radius: 8px;
      border-bottom-left-radius: 8px;
      border-top-right-radius: 8px;
      border-bottom-right-radius: 8px;
  }

  span {
    color: black;
  }
  #options {
    align-content:center;
    align-items:center;
      text-align: center;
  }
  .printable {
    padding-left:10px;
    text-align:left;
  }
  </style>

<?php
    include '../connect.php';
		  $pid=$_GET['pid'];
			
			$sel="SELECT * FROM `transactions` WHERE `T_No.` =$pid";
			$rs=$connect->query($sel);
			while($row=$rs->fetch_assoc()){

	?>
</head>


<div class="ticket " id="printable" align="center">
  <div class="ticketdesign ticketstructure">
    <p align="left" class="white"><b>Niar Ticket Booking</b>
    <p align="right" class="white">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Booking ID: <?php echo $row['T_No.'] ?> </h1></span>
    <div class="title"><br>
      <h2 align="center"><span><?php echo $row['source'] ?> &nbsp&nbsp To &nbsp&nbsp <?php echo $row['dest'] ?>  </span></h2>
      <p align="left"><span>DATE & TIME : &nbsp <?php echo $row['Date'] ?></span></p> 
      <p align="left"><span>CLASS : &nbsp <?php echo $row['Class'] ?></span></p>
      <p align="left"><span>TYPE : &nbsp <?php echo $row['Type'] ?></span></p>
      <p align="left"><span>NO. OF PASSENGERS :&nbsp <?php echo $row['NoOfpass'] ?> </span></p>
      <p align="left"><span>AMOUNT : &nbsp Rp<?php echo $row['Amt'] ?>,- </span></p>
      <p align="left"><span>ROUTE : &nbsp <?php echo $row['Route'] ?> </span></p><br>
      <p align="center"><span>WISH YOU A HAPPY & SAFE JOURNEY</span> </p>
    </div>
  </div>
</div>


	<?php
		}
	?>

</div>




