<?php
  $conn = new mysqli("localhost", "root", "", "petstore");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE customer set fname='" . $_POST['fname'] . "', lname='" . $_POST['lname'] . "', c_address='" . $_POST['c_address'] . "', c_email='" . $_POST['c_email'] . "' WHERE c_id='" . $_POST['c_id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM customer WHERE c_id='" . $_GET['c_id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
    <head>
    <title>Update Employee Data</title>
    </head>
<body>
    <form method="post" action="">
    <div><?php if(isset($message)) { echo $message; } ?>
    </div>
    <div style="padding-bottom:5px;">
    <a href="index.php">Employee List</a>
    </div>
    first name: <br>
    <input type="hidden" name="fname" class="txtField" value="<?php echo $row['fname']; ?>">
    <input type="text" name="fname"  value="<?php echo $row['sid']; ?>">
    <br>
    last name: <br>
    <input type="text" name="lname" class="txtField" value="<?php echo $row['lname']; ?>">
    <br>
    address :<br>
    <input type="text" name="c_address" class="txtField" value="<?php echo $row['c_address']; ?>">
    <br>
    email :<br>
    <input type="text" name="c_email" class="txtField" value="<?php echo $row['c_email']; ?>">
    <br>
    <input type="submit" name="submit" value="Submit" class="buttom">

    </form>
</body>
</html>