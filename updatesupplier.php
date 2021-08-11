<?php
  $conn = new mysqli("localhost", "root", "", "petstore");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE supplier set s_id='" . $_POST['s_id'] . "', s_name='" . $_POST['s_name'] . "', s_address='" . $_POST['s_address'] . "', s_phone='" . $_POST['s_phone'] . "' WHERE s_id='" . $_POST['s_id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM supplier WHERE s_id='" . $_GET['s_id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
    <head>
    <title>Update supplier Data</title>
    <link rel="stylesheet" href="delcustomer.css">
    </head>
<body>
<center>
            <header>
            <!-- <img class="img" height="100px" width="310px" alt="" src="logo FL final.svg"> -->
            <div class="btn">
                <input  type="button" value="Back" onclick="window.location.href='viewsupplier.php';"/>
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
              <h2>Supplier ID</h2>                 
              <input type="hidden" name="s_id" class="txtField" value="<?php echo $row['s_id']; ?>">
              <input type="text" name="s_id"  value="<?php echo $row['s_id']; ?>" disabled>
              </div>
              <div></div>
              <br>
            </div>     
            <div class="flex-container">
              <div>
              <h2>Name</h2> 
                <input type="text" name="s_name" class="txtField" value="<?php echo $row['s_name']; ?>">                
              </div>
              </div>
            <div class="flex-container">
              <div>
              <h2>Address</h2>            
                <input type="text" name="s_address" class="txtField" value="<?php echo $row['s_address']; ?>">                
              </div>
              
            </div>
            
            <div class="flex-container">
              <div>
                <h2>Phone</h2>            
                <input type="text" name="s_phone" class="txtField" value="<?php echo $row['s_phone']; ?>">
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