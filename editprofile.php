<?php
  $conn = new mysqli("localhost", "root", "", "petstore");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE customer set c_id='" . $_POST['c_id'] . "', fname='" . $_POST['fname'] . "', lname='" . $_POST['lname'] . "',c_address='".$_POST['c_address']."', c_email='".$_POST['c_email']."' WHERE c_id='" . $_POST['c_id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM customer WHERE c_id='" . $_GET['c_id'] . "'");
$row= mysqli_fetch_array($result);
$c_id=$_GET['c_id'];
?>
<html>
<head>
<title>edit profile Data</title>
<link rel="stylesheet" href="addcustomer.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
  <center>
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="logo FL final w.svg" height="60px" width="200px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
              <a class="nav-link" href="http://localhost/petstore/main.php?c_id=<?php echo $row["c_id"]; ?>" >Cancel</a>
            </li>
          </ul>
        </div>
      </div>      
      </nav>
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
            <div class="btd">
              <b>Permanently Delete Account?</b> <br>
				<input type="button" name="submit" value="Delete" class="bt" onclick="javascript:completeAndRedirect();">
            </div>
    </form>
	<script>
function completeAndRedirect(){
	var r = confirm("Are you sure u want to delete the account?");
    if (r == true) {
	location.href='deleteaccount.php?c_id=<?php echo $row["c_id"]; ?>';
    }
	}
</script>
    </div>
  </div>
</div>
</center>
</body>
</html>