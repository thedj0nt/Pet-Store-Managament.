<?php
  $conn = new mysqli("localhost", "root", "", "petstore");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }
if(count($_POST)>0) {
mysqli_query($conn," DELETE FROM customer WHERE c_id='" . $_POST['c_id'] . "'");
$message = "Record DELETED Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM customer WHERE c_id='" . $_GET['c_id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Delete customer Data</title>
<link rel="stylesheet" href="delcustomer.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head> -->
<body>
<center>
<center>
    <header>
      <nav>
        <!-- <img class="img" height="100px" width="310px" alt="" src="logo FL final w.svg"> -->
        <div class="btn">
         <input  type="button" value="Back" onclick="window.location.href='viewcustomer.php';"/>
        </div>
      </nav>
    </header>
    <div class="card"> 
        <div class="container">   
            <form method="post" action="">
            <div><?php if(isset($message)) { echo $message; } ?></div>        
            <div style="padding-bottom:5px;"></div>
            <h1>Are you sure?</h1>

            <div class="flex-container">
              <div>
                <h3>Customer Id</h3> 
                
                <input type="hidden" name="c_id" class="txtField" value="<?php echo $row['c_id']; ?>">
                <input type="text" name="c_id"  value="<?php echo $row['c_id']; ?>" disabled>
                <br>
              </div>
              <div></div>
            </div>

            <div class="flex-container">
              <div>
                <h3>First Name</h3> 
                
                <input type="text" name="fname" class="txtField" value="<?php echo $row['fname']; ?>" disabled>
                <br>
              </div>  
              <div>
                <h3>Last Name</h3>
                
                <input type="text" name="lname" class="txtField" value="<?php echo $row['lname']; ?>" disabled>
                <br>
              </div>
            </div>

            <div class="flex-container">
              <div>
                <h3>Address</h3>
                
                <input type="text" name="c_address" class="txtField" value="<?php echo $row['c_address']; ?>" disabled>
                <br>
              </div>
              <div> </div>
            </div>
            
            <div class="flex-container">
              <div>
                <h3>Email ID</h3>
                
                <input type="text" name="c_email" class="txtField" value="<?php echo $row['c_email']; ?>" disabled>
                </div>
                <div> </div>
            </div>
                <br><br>
            <div class="btd">
                <input type="submit" name="submit" value="Delete" class="buttom">
            </div>
            </form>
        </div>
  </div>
<center>
</body>
</html>