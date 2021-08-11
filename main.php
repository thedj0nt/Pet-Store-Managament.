<?php
  $conn = new mysqli("localhost", "root", "", "petstore");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }
    $query = "SELECT * FROM pet";
    $query_run = mysqli_query($conn,$query);
    $c_id=$_GET['c_id'];    
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<title>store</title>
</head>
<body>
  <center>
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

              <img src="logo FL final w.svg" height="60px" width="200px" alt="">
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <!-- <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                  </a> -->
            </li>
    
      
      </li>
            <li class="nav-item">
              <a class="nav-link" href="customer.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>      
      </nav>
    </header>
    <table class="responsive-table">
    <tr>
    <td></td>
    <td></td>
    <td>Name</td>
    <td>Date of Birth</td>
    <td>Type</td>
    <td>Amount</td>
    <td></td>
    <td></td>
    </tr>
    <?php
      $i=0;
      while($row = mysqli_fetch_array($query_run)) 
      {
      
      ?>
        <tr class="">
        <td><?php
          echo "<td> <a href='$row[image]'> <img src='".$row['image']."' height='160' width='200'></a> </td>";
        ?>
        </td>
        <td><?php echo $row["p_name"]; ?></td>
        <td><?php echo $row["p_dob"]; ?></td>
        <td><?php echo $row["p_type"];?></td>
        <!-- <td><?php echo $row["code"];?></td> -->
        <td><?php echo $row["p_amount"]; ?></td>
            
        <td> <a href="http://localhost/petstore/cart.php?code=<?php echo $row["code"]; ?>&c_id=<?php echo "$c_id"; ?> " class="button">BUY</a></td>
        
        </tr>
    <?php
                
    $i++;
    }
    ?>
    </table>
  </center>
</body>
</html>