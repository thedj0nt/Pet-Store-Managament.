<?php
  $conn = new mysqli("localhost", "root", "", "petstore");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE pet set p_id='" . $_POST['p_id'] . "', p_name='" . $_POST['p_name'] . "', p_type='" . $_POST['p_type'] . "', p_amount='" . $_POST['p_amount'] . "', p_dob='" . $_POST['p_dob'] . "' , code='" . $_POST['code'] . "' WHERE p_id='" . $_POST['p_id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM pet WHERE p_id='" . $_GET['p_id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
    <head>
    <title>Update pet Data</title>
    <link rel="stylesheet" href="delcustomer.css">
    </head>
<body>
<center>
<header>
            <!-- <img class="img" height="100px" width="310px" alt="" src="logo FL final.svg"> -->
            <div class="btn">
                <input  type="button" value="Back" onclick="window.location.href='viewpet.php';"/>
            </div>
            </header>
<div class="card1">
  <div class="container">
    <form method="post" action="">
    <div><?php if(isset($message)) { echo $message; } ?> </div>
    <div style="padding-bottom:5px;"> </div> 
                     
            <div class="flex-container">
              <div>
                <h2>Pet ID</h2>                 
                <input type="hidden" name="p_id" class="txtField" value="<?php echo $row['p_id']; ?>">
                <input type="text" name="p_id"  value="<?php echo $row['p_id']; ?>" disabled>
              </div>
              <div>
                <h2>Pet Code</h2>          
                <input type="text" name="code" class="txtField" value="<?php echo $row['code']; ?>">
              </div>              
            </div>     

            <div class="flex-container">
              <div>
              <h2>Name</h2> 
                <input type="text" name="p_name" class="txtField" value="<?php echo $row['p_name']; ?>">                
              </div>                 
              <div></div>
            </div>
            <div class="flex-container">
              <div>
              <h2>Type</h2>            
                <input type="text" name="p_type" class="txtField" value="<?php echo $row['p_type']; ?>">                
              </div>    
              <div></div>          
            </div>
            
            <div class="flex-container">
              <div>
                <h2>Amount</h2>            
                <input type="text" name="p_amount" class="txtField" value="<?php echo $row['p_amount']; ?>">
              </div>
              <div> </div>
            </div>  

            <div class="flex-container">
              <div>
                <h2>Date of Birth</h2>          
                <input type="text" name="p_dob" class="txtField" value="<?php echo $row['p_dob']; ?>">
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