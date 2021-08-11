<html>
<head>
<title>Products</title>
</head>
<body>
  <div class="container">
  <h1 class="h1 text-center display-4 mt-5">PRODUCT DETAILS</h1>
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

  
  <form action="" method="POST" enctype="multipart/form-data">
  <table class="table">

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<table class="table">
<?php
}
$result = mysqli_query($con,"SELECT * FROM pet ");
while($row = mysqli_fetch_assoc($result)){?>
  <form method="POST" action="" enctype="multipart/form-data">
 <input type="hidden" name="pet" value="<?php echo"".$row['pet'].""?>">
 <td><?php echo"<a href='$row[Image]'> <img src='".$row['Image']."' height='130' width='180'></a>";?></td>
 <td>
  
  <p><b>Type:</b><?php echo" ".$row['p_name']."";?></p>
  <input type="hidden" name="Ca_Name" value="<?php echo"".$row['p_name'].""; ?>" min="1" step="1" >
  <p><b>Details:</b><?php echo" ".$row['p_amount']."";?></p>
  <p><b>Price:</b><?php echo" ".$row['p_type']."</p>";?>
  <input type="hidden" name="p_amount" value="<?php echo" ".$row['p_amount'].""; ?>"></td>
  <td><button class="btn btn-warning" name="submit">Buy Now</button></td>
  </tr>
  </form>
     </div>

     <?php        
    } 
              
      
mysqli_close($con);
?>


</div>

<br /><br />
</table>
</form>

</div>
</body>
</html>