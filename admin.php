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

      $admin_id = mysqli_real_escape_string($db,$_POST['admin_id']);
      $admin_pwd = mysqli_real_escape_string($db,$_POST['admin_pwd']);

      $sql = "SELECT * FROM admin WHERE admin_id = '$admin_id' and admin_pwd = '$admin_pwd'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      if ($row) {
          header("location: admindashboard.php");
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
  <title> Claws & Paws </title>
  <link rel="stylesheet" href="admin.css">
</head>

<body class="bg">
  <center>
   <header>
   <meta http-equiv="Cache-control" content="no-cache">
      <nav>
        <img class="img" height="100px" width="310px" alt="" src="logo FL final w.svg">
      </nav>  
      <input  type="button" value="Back" class="btn2" onclick="window.location.href='index.php';"/>
      
    </header>
    <!-- <br><br><br><br> -->
    <div class="card">
      <div class="container">
        <h1>Admin Login</h1>
        <form method="POST">
          <h3>admin id</h3>
          <input type="text" placeholder="enter id" class="field" name="admin_id" required>
          <h3>admin password</h3>
          <input type="password" placeholder="enter password" class="field" name="admin_pwd" required>
          <input type="submit" value="Login" class="btn">
        </form>
        <div class="pass-link">
          <a href="register.php">register new admin?</a>
        </div>
      </div>
    </div>
  </center>
</body>
</html>
