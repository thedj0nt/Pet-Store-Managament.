<?php

    $conn = new mysqli("localhost", "root", "", "petstore");
    if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: " . $conn->connect_error;
        exit();
    }    
    $c_id=$_GET['c_id'];
?>
<html>
  <head>
    <title>Crder Confirm</title>
    <link rel="stylesheet" href="vieworder.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
              <a class="nav-link" href="http://localhost/petstore/main.php?c_id=<?php echo "$c_id"; ?>">Back</a>
            </li>
          </ul>
        </div>
      </div>      
      </nav>
  </header>
  <br><br>
    <div class="card">
    <div class="container">
    <div style="padding-bottom:5px;"> </div> 
      <table>
      <tr>      
        <th></th>
        <th scope="col">Order id</th>
        <th scope="col">Name</th>        
        <th scope="col">Amount</th>     
        <th scope="col">Cust_ID</th>
        <th scope="col">Pet_ID</th>
        </tr>
        <?php
            $query3 = "SELECT * FROM order_info WHERE c_id='$c_id' ";
            $query_run3 = mysqli_query($conn,$query3);   
            while ($row = mysqli_fetch_assoc($query_run3)) 
            {                
                echo"<tr>
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
          </div>      
    </div>  
    </center>
  </body>
</html>