<?php
$conn = new mysqli("localhost", "root", "", "petstore");
if($conn->connect_errno){
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}
$requestType = $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $admin_id = $_POST['admin_id'];
  $admin_pwd = $_POST['admin_pwd'];    
  $query =  "INSERT INTO admin VALUES('" . $admin_id . "', '" . $admin_pwd . "')";
  $data = mysqli_query($conn,$query);
  if ($data) {
    ?>
    <script>
    alert("Details Uploaded Succesfuly")  
    </script>    
    <?php
       header("location: index.php");  
        }
        else{
            ?>
            <script>
                alert("Error Accoured While Uploading Details")
            </script>
            <?php
            }   
          }                  
?>
<html lang="en" dir="ltr">

<head>
  <title> register/Claws&Paws </title>
  <link rel="stylesheet" href="register.css">
</head>

<body class="bg">
  <center>
   <header>
      <nav>
        <img class="img" height="100px" width="310px" alt="" src="logo FL final w.svg">
      </nav>
    </header>
    <!-- <br><br><br><br> -->
    <div class="card">
      <div class="container">
        <h1> Admin Register </h1>     
        <form action="" method="POST" enctype="multipart/form-data">
          <h3>admin id</h3>
          <input type="text" placeholder="enter admin id" name="admin_id" class="field" required>
          <h3>admin password</h3>
          <input type="password" placeholder="enter admin password" name="admin_pwd" class="field" required>
          <input type="submit" value="Done" class="btn">
        </form>               
      </div>
    </div>
  </center>
</body>
</html>