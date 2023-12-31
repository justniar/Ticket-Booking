<?php
include '../connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:../regist/sindex.php");
}
include '../header/header.php';
?>
<head>
<style>
    .container{
      border-spacing: 10px;
      font-family: Montserrat, sans-serif;
      font-size: 18px !important;
      margin: 1em 5em;
      padding: 3em;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      border-radius: 5px;
      padding-top: 50px;
      padding-right: 50px;
      padding-bottom: 50px;
      padding-left: 150px;
      align-content: center;
    }
    .button {
      padding: 15px 32px;
      align-content: left;
      color: white;
      background-color:#161A30;
      border-radius: 15px;
    }
    #number {
      overflow: hidden;
      width: 600px;
    }
    input[type=number]{
        width: 250px;
    } 

  </style>

</head>
<body>
  <h1><center><b><img width="64" height="64" src="https://img.icons8.com/nolan/64/1A6DFF/C822FF/train.png" alt="train"/>&nbsp Train Ticket Booking &nbsp<img width="64" height="64" src="https://img.icons8.com/nolan/64/1A6DFF/C822FF/track-order.png" alt="track-order"/></center></b></h1>
  <form method='post' action ='book_action.php' align='center'>

  <div class="container">
    <section id="form" class="formborder">
      <div class="container2">
        <form>
        <div class="form-row row justify-content-around" name="source">
    &nbsp
        <div class="form-group col-md-5" name="source">
        <label for="inputEmail4">SOURCE STATION :</label>    
        <select id="inputState" class="form-control" name="source">
          <option>Gambir</option>
          <option>Pasar Senen</option>
          <option>Cirebon Prujakan</option>
          <option>Cirebon Kejaksan</option>
          <option>Semarang Tawang</option>
          <option>Surabaya Pasar Turi</option>
          <option>Malang</option>
          <option>Jember</option>
          <option>Kroya</option>
          <option>Solo Balapan</option>
          <option>Surabaya Gubeng</option>
          <option>Bandung</option>
          <option>Tegal</option> 
          <option>Blitar</option>
          <option>Yogyakarta</option> 
          <option>Kutoarjo</option>
          <option>Lempuyangan</option>
          </select>

      <!-- <input type="email" class="form-control" id="inputEmail4" placeholder="FROM">-->
      </div>             
            <div class="form-group col-md-5" name="dest">
        <label for="inputPassword4"> 
  FINAL DESTINATION :</label>
        <select id="inputState" class="form-control" name="dest">
            <option>Gambir</option>
            <option>Pasar Senen</option>
            <option>Cirebon Prujakan</option>
            <option>Cirebon Kejaksan</option>
            <option>Semarang Tawang</option>
            <option>Surabaya Pasar Turi</option>
            <option>Malang</option>
            <option>Jember</option>
            <option>Kroya</option>
            <option>Solo Balapan</option>
            <option>Surabaya Gubeng</option>
            <option>Bandung</option>
            <option>Tegal</option> 
            <option>Blitar</option>
            <option>Yogyakarta</option> 
            <option>Kutoarjo</option>
            <option>Lempuyangan</option>
    </select> 

        <!--<input type="password" class="form-control" id="inputPassword4" placeholder="TO">-->
    </div>
    
  <center>  
            <div class="form-group col-md-5" name="class">
        <label for="inputPassword4"> 
  Train Class :</label>
        <select id="inputState" class="form-control" name="class">
    
    <option>Ekonomi</option>
    <option>Eksekutif</option>
    <option>Bisnis</option>
    
    </select> 

    </div>
  
  <center><div class="form-group col-md-5" name="type">
      <label for="inputState">JOURNEY TYPE :</label>
      <select id="inputState" class="form-control" name="type">
      <option >Single</option>
      <option >Return</option>
      </select>
      </div>
    
      
        <br>
      <div class="form-row row justify-content-aroundd">
        <div class="form-group col-md-16">
          <center><label for="inputState"  ><h8>NO OF PASSENGERS :</h8></label>
          <center><input type="number" name="number" required  min="1" max="5">
        </div>

      <div>   
      <button type="submit" class="button" name="login_submit" >Proceed</button>
      
  </div>
  </form>
  </div>

  </section>
  </div>
  <?php include '../footer/footer.php';
?>
</body>
</html>