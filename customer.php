<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'petstore');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      // username and password sent from form

      $c_email = mysqli_real_escape_string($db,$_POST['c_email']);
      $c_pwd = mysqli_real_escape_string($db,$_POST['c_pwd']);

      $sql = "SELECT * FROM customer WHERE c_email = '$c_email' and c_pwd = '$c_pwd'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      if ($row) {
          header("location: main.php?c_id=".$row['c_id']);          
          ?>
  <?php
      }
      else{
          ?>
          <script>
              alert("Failed to Login");
          </script>
  <?php
      }
  }
  ?>
<html lang="en" dir="ltr">

<head>
  <title> Customer Login </title>
  <link rel="stylesheet" href="customer.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body class="bg1">
  <center>
   <header>
   <meta http-equiv="Cache-control" content="no-cache">
      <!-- <nav>
        <img class="img" height="100px" width="310px" alt="" src="logo FL final w.svg">
      </nav>  
      <input  type="button" value="Back" class="btn2" onclick="window.location.href='index.php';"/> -->
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
              <a class="nav-link" href="index.php">Back</a>
            </li>
          </ul>
        </div>
      </div> 
      </nav>
    </header>
    <!-- <br><br><br><br> -->
    <div class="card">
      <div class="container">
      <br><br>
        <b><h2>Customer Login</h2></b>
        <br>
        <form method="POST">
          <h4>Email</h4>
          <input type="text" placeholder="adc@company.com" class="field" name="c_email" required>
          <br><br>
          <h4>Password</h4>
          <input type="password" placeholder="enter password" class="field" name="c_pwd" required>
          <br><br>
          <input type="submit" value="Login" class="btn">
        </form>
        <div class="pass-link">
          <a href="registercustomer.php">Not registered yet?</a>
        </div>
      </div>
    </div>
  </center>
</body>
</html>
