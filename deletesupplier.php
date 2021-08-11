<?php
  $conn = new mysqli("localhost", "root", "", "petstore");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }
if(count($_POST)>0) {
mysqli_query($conn," DELETE FROM supplier WHERE s_id='" . $_POST['s_id'] . "'");
$message = "Record DELETED Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM supplier WHERE s_id='" . $_GET['s_id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Delete Student Data</title>
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
  <div class="card"> 
      <div class="container">   
        <form method="post" action="">
          <div><?php if(isset($message)) { echo $message; } ?>
          </div>
          <div style="padding-bottom:5px;">
          </div>
          <h1>Are you sure?</h1>
            <div class="flex-container">
              <div>
                <h2>Supplier Id</h2>
                <input type="hidden" name="s_id" class="txtField" value="<?php echo $row['s_id']; ?>">
                <input type="text" name="s_id"  value="<?php echo $row['s_id']; ?>" disabled>
                </div>
              <div></div>
            </div>

            <div class="flex-container">
              <div>
              <h2>Name</h2>
                <input type="text" name="s_name" class="txtField" value="<?php echo $row['s_name']; ?>" disabled>
              </div>
              <div></div>
            </div>

            <div class="flex-container">
              <div>
              <h2>Address</h2> 
                <input type="text" name="s_address" class="txtField" value="<?php echo $row['s_address']; ?>" disabled>
              </div>
              <div></div>
            </div>

            <div class="flex-container">
              <div>
              <h2>Phone</h2>
                <input type="text" name="s_phone" class="txtField" value="<?php echo $row['s_phone']; ?>" disabled>
              </div>
              <div></div>
            </div>
            <br>
            <div class="btd">
                <input type="submit" name="submit" value="Delete" class="buttom">
            </div>
        </form>
      </div>
    </div>
</center>
</body>
</html>