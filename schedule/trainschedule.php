<?php
include '../connect.php';
session_start();
if ($_SESSION['log'] == '')
{
    header("location:../sindex.php");
}
include '../header/header.php';
?>

  <div>

  </div>
<style>
.container{
    overflow-x:auto;
}
table#database_table {
    font-size:16px;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    border-spacing: 0;
    
}

#database_table td, #database_table th {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

#database_table tr:nth-child(even){background-color: #f2f2f2}

#database_table th {
    padding-top: 11px;
    padding-bottom: 11px;
    background-color: #161A30;
    color: white;
}


</style>


<head>  
           <title>Niar Ticket Booking Databases</title>  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body >  
                     <h2><center><b><img src="https://img.icons8.com/officel/70/000000/overtime.png"/>&nbsp&nbspNiar Booking Ticket TRAIN SCHEDULE&nbsp&nbsp<img src="https://img.icons8.com/officel/70/000000/overtime.png"/></center></b></h2>

           <div class="container">  
                <br />  
                     <table id="database_table" class="table table-striped table-bordered" >  
                          <thead>  
                            <tr>
                            <th>Gambir</th>
                            <th>Pasar Senen</th>
                            <th>Cirebon Prujakan</th>
                            <th>Cirebon Kejaksan</th>
                            <th>Semarang Tawang</th>
                            <th>Surabaya Pasar Turi</th>
                            <th>Malang</th>
                            <th>Jember</th>
                            <th>Kroya</th>
                            <th>Solo Balapan</th>
                            <th>Surabaya Gubeng</th>
                            <th>Bandung</th>
                            <th>Tegal</th> 
                            <th>Blitar</th>
                            <th>Yogyakarta</th> 
                            <th>Kutoarjo</th>
                            <th>Lempuyangan</th>

  </tr>  
                          </thead>  
                          <tbody>



<?php


$sql_transactions="SELECT * FROM `traintt`   " ;
$result = $connect->query($sql_transactions);
while($row = $result->fetch_assoc()){

echo'<tr class="class="table table-striped table-bordered"">
        <td>'.$row["Gambir"].'</td>
        <td>'.$row["Pasar Senen"].'</td>
        <td>'.$row["Cirebon Prujakan"].'</td>
        <td>'.$row["Cirebon Kejaksan"].'</td>
        <td>'.$row["Semarang Tawang"].'</td>
        <td>'.$row["Surabaya Pasar Turi"].'</td>
        <td>'.$row["Malang"].'</td>
        <td>'.$row["Jember"].'</td>
        <td>'.$row["Kroya"].'</td>
        <td>'.$row["Solo Balapan"].'</td>
        <td>'.$row["Surabaya Gubeng"].'</td>
        <td>'.$row["Bandung"].'</td>
        <td>'.$row["Tegal"].'</td>
        <td>'.$row["Blitar"].'</td>
        <td>'.$row["Yogyakarta"].'</td>
        <td>'.$row["Kutoarjo"].'</td>
        <td>'.$row["Lempuyangan"].'</td>
        

';
}
?>
</tbody>
</table>
</div>
 <script>  
 $(document).ready(function() {
    $('#database_table').DataTable( {
        "order": [[ 1, "asc" ]]
    } );
} ); 
 </script>  
<?php include '../footer/footer.php';
?> 
