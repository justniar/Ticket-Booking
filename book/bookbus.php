<?php
include '../connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:../regist/sindex.php");
}
include '../header/header.php';
?>

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


  </script>
</head>
<body>
  <h1><center><b><img width="64" height="64" src="https://img.icons8.com/nolan/64/1A6DFF/C822FF/bus.png" alt="bus"/>&nbsp Bus Ticket Booking &nbsp<img width="64" height="64" src="https://img.icons8.com/nolan/64/1A6DFF/C822FF/road.png" alt="road"/></center></b></h1>
 <form method='post' action ='busaction.php' align='center'>






<div class="container">
<section id="form" class="formborder">
<div class="container2">
       <form>
        


       <div class="form-row row justify-content-around" name="source">
  &nbsp

       <div class="form-group col-md-5" name="source">
       <label for="inputEmail4">SOURCE BUS-STOP :</label>    
       <select id="inputState" class="form-control" name="source">
          <option>Jakarta</option>
          <option>Tasikmalaya</option>
          <option>Cimahi</option>
          <option>Garut</option>
          <option>Banjar</option>
          <option>Bogor</option>
          <option>Merak</option>
          <option>Serang</option>
          <option>Cikarang</option>
          <option>Purwakarta</option>
   </select>

     <!-- <input type="email" class="form-control" id="inputEmail4" placeholder="FROM">-->
    </div>             


   



          <div class="form-group col-md-5" name="dest">
      <label for="inputPassword4"> 
FINAL BUS-STOP :</label>
      <select id="inputState" class="form-control" name="dest">
   
        <option>Jakarta</option>
        <option>Tasikmalaya</option>
        <option>Cimahi</option>
        <option>Garut</option>
        <option>Banjar</option>
        <option>Bogor</option>
        <option>Merak</option>
        <option>Serang</option>
        <option>Cikarang</option>
        <option>Purwakarta</option>
        <option>Bandung</option>
        <option>Pangandaran</option>
        <option>Cilacap</option>
        <option>Wonosobo</option>
        <option>Purwokerto</option>
        <option>Purbalingga</option>
        <option>Yogyakarta</option>
        <option>Magelang</option>
        <option>Wonogiri</option>
        <option>Solo</option>
        <option>Semarang</option>
        <option>Padalarang</option>
        <option>Ciamis</option>
        <option>Pangandaran</option>

   </select> 

      <!--<input type="password" class="form-control" id="inputPassword4" placeholder="TO">-->
  </div>
  

    <div class="form-row row justify-content-aroundd">
       <div class="form-group col-md-16" >
        <center><label for="inputState"  ><h8>NO OF PASSENGERS :</h8></label></center>
        <center> <input type="number" name="number" required  min="1" max="5"  ></center>
       </div>
      
<br>
    

    <div>   
     <button type="submit"    class="button" name="login_submit" >Proceed</button>
    
 </div>
</form>
</div>

</section>
</div>
  




</body>

<?php include '../footer/footer.php';
?> 
</html>