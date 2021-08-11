<?php
  $conn = new mysqli("localhost", "root", "", "petstore");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }


$result = mysqli_query($conn,"SELECT * FROM pet WHERE code='" . $_GET['code'] . "'");
$row= mysqli_fetch_array($result);

$code=$_GET['code'];
$c_id=$_GET['c_id'];

?>
<html>
<head>
<title>cart</title>
<link rel="stylesheet" href="cart.css">
</head>
<body>
  <center>
     <form method="post" action="">
      <div style="padding-bottom:5px;">
      </div>
      <h1>Order Confirm</h1>
      <br>
      <?php echo "<a href='$row[image]'> <img src='".$row['image']."' height='160' width='200'></a> "?>
      
      <h3>Name</h3>
      <input type="text" name="p_name" class="txtField" value="<?php echo $row['p_name']; ?>"disabled>
      <h3>Type</h3>
      <input type="text" name="p_type" class="txtField" value="<?php echo $row['p_type']; ?>"disabled>
      <h3>Amount</h3>
      <input type="text" name="p_amount" class="txtField" value="<?php echo $row['p_amount']; ?>" disabled>
      <br><br>
      <!-- <input type="submit" name="submit" value="confirm" class="buttom"> -->
      <td> <a href="http://localhost/petstore/confirm.php?code=<?php echo $row["code"];?>&c_id=<?php echo "$c_id"; ?>" class="btn" >Confirm</a></td>
      <td> <a href="http://localhost/petstore/main.php?code=<?php echo $row["code"];?>&c_id=<?php echo "$c_id"; ?>"" class="b">Cancel</a></td>

      </form>
  </center>
</body>
</html>