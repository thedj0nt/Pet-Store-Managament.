<?php
  $conn = new mysqli("localhost", "root", "", "petstore");
  if ($conn->connect_errno) 
  {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
  }
  if(count($_POST)>0) 
  {
    mysqli_query($conn," DELETE FROM pet WHERE p_id='" . $_POST['p_id'] . "'");
    $message = "Record DELETED Successfully";
  }
  $result = mysqli_query($conn,"SELECT * FROM pet WHERE p_id='" . $_GET['p_id'] . "'");
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
    <nav>
        <!-- <img class="img" height="100px" width="310px" alt="" src="logo FL final w.svg"> -->
        <div class="btn">
         <input  type="button" value="Back" onclick="window.location.href='viewpet.php';"/>
        </div>
    </nav>
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
                <h2>CustomerId</h2> <br>
                <input type="hidden" name="p_id" class="txtField" value="<?php echo $row['p_id']; ?>">
                <input type="text" name="p_id"  value="<?php echo $row['p_id']; ?>" disabled>
                
                </div>
              <div></div>
            </div>

            <div class="flex-container">
              <div>
                <h2>Roll No</h2> <br>
                <input type="text" name="p_name" class="txtField" value="<?php echo $row['p_name']; ?>" disabled>
                
                </div>
              <div></div>
            </div>

            <div class="flex-container">
              <div>
                <h2>Name</h2><br>
                <input type="text" name="p_type" class="txtField" value="<?php echo $row['p_type']; ?>" disabled>
                
              </div>
              <div></div>
            </div>  
              <br><br>
            <div class="btd">
                <input type="submit" name="submit" value="Delete" class="buttom">
            </dv>
            </form>
      </div>
  </div>
</center>
</body>
</html>