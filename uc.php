<?php
  $conn = new mysqli("localhost", "root", "", "petstore");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE customer set c_id='" . $_POST['c_id'] . "', fname='" . $_POST['fname'] . "', lname='" . $_POST['lname'] . "', c_address='" . $_POST['c_address'] . "', c_email='" . $_POST['c_email'] . "' WHERE c_id='" . $_POST['c_id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM customer WHERE c_id='" . $_GET['c_id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
    <head>
    <title>Update customer Data</title>
    <link rel="stylesheet" href="delcustomer.css">
    </head>
<body>
<center>
<header>
            <img class="img" height="100px" width="310px" alt="" src="logo FL final.svg">
            <div class="btn">
                <input  type="button" value="Back" onclick="window.location.href='viewcustomer.php';"/>
            </div>
            </header>
<div class="card1">
  <div class="container">
    <form method="post" action="">
    <div><?php if(isset($message)) { echo $message; } ?> </div>
    <div style="padding-bottom:5px;"> </div> 
            <br>
            
            <div class="flex-container">
              <div>
              <h2>Customer ID</h2>                 
              <input type="hidden" name="c_id" class="txtField" value="<?php echo $row['c_id']; ?>">
              <input type="text" name="c_id"  value="<?php echo $row['c_id']; ?>" disabled>
              </div>
              <div></div>
              <br>
            </div>     
            <div class="flex-container">
              <div>
              <h2>First Name</h2> 
                <input type="text" name="fname" class="txtField" value="<?php echo $row['fname']; ?>">                
              </div>
                 
              <div>
              <h2>Last Name</h2>            
                <input type="text" name="lname" class="txtField" value="<?php echo $row['lname']; ?>">                
              </div>
              
            </div>
            
            <div class="flex-container">
              <div>
                <h2>Address</h2>            
                <input type="text" name="c_address" class="txtField" value="<?php echo $row['c_address']; ?>">
              </div>
              <div> </div>
            </div>  

            <div class="flex-container">
              <div>
                <h2>Email</h2>          
                <input type="text" name="c_email" class="txtField" value="<?php echo $row['c_email']; ?>">
                </div>
              <div> </div>
            </div>  

            <br><br>
            <div class="bt">
              <input type="submit" name="submit" value="Change" class="bt">
              <br><br>
            </div>          
    </form>
    </div>
  </div>
</div>
</center>
</body>
</html>