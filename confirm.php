<?php
  $conn = new mysqli("localhost", "root", "", "petstore");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }
    $code=$_GET['code'];
    
    $c_id=$_GET['c_id'];
    $query = "SELECT * FROM customer WHERE c_id='$c_id' ";
    $query_run = mysqli_query($conn,$query);    
    
    $query1 = "SELECT * FROM pet WHERE code='$code' ";
    $query_run1 = mysqli_query($conn,$query1);       

    $row = $query_run->fetch_assoc();//user id from faculty
    // echo $row['c_id']."";
    // echo $row['fname']."";
    // echo $row['c_address']."";

    $row1 = $query_run1->fetch_assoc();//user id from faculty
    // echo $row1['code']."";
    // echo $row1['p_name']."";
    // echo $row1['p_type']."";
    // echo $row1['p_amount']."";    
    
    $cust_name = $row['fname'];
    $o_amount = $row1['p_amount'];
    $p_id = $row1['p_id'];
    $c_id = $row['c_id'];

    $query2 = "INSERT INTO order_info (cust_name,o_amount,c_id,p_id) VALUES ('" . $cust_name . "', '" . $o_amount . "', '" . $c_id . "', '" . $p_id . "')";
    $query_run2 = mysqli_query($conn,$query2);    
?>

<html>
  <head>
    <title>Crder Confirm</title>
    <link rel="stylesheet" href="vieworder.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <center>
    <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="logo FL final w.svg" height="60px" width="200px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
              <a class="nav-link" href="http://localhost/petstore/main.php?c_id=<?php echo $row["c_id"]; ?>" >Cancel</a>
            </li>
          </ul>
        </div>
      </div>      
      </nav>
  </heade>
      <h1>Order Successfully placed!!!</h1>
      <div class="card">
      <table>
      <tr>    
          <td></td>  
          <td></td> 
          <td></td> 
        <td scope="col"><b>Order id</b></td>
        <td scope="col"><b>Name</b></td>        
        <td scope="col"><b>Amount</b></td>     
        <td scope="col"><b>C_ID</b></td>
        <td scope="col"><b>P_ID</b></td>
      </tr>
        <?php
            $query3 = "SELECT * FROM order_info WHERE c_id='$c_id' AND p_id='$p_id'";
            $query_run3 = mysqli_query($conn,$query3);   
            while ($row = mysqli_fetch_assoc($query_run3)) 
            {                
                echo"<tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> ".$row['o_id']." </td> 
                        <td> ".$row['cust_name']." </td>
                        <td> ".$row['o_amount']." </td>
                        <td> ".$row['c_id']." </td>
                        <td> ".$row['p_id']." </td>                                                           
                    </tr>";
                
                } 
        ?>
        <tr>
          
          </tr>
      </table>
      </div>    
    </center>
  </body>
</html>