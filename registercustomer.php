<?php
$conn = new mysqli("localhost", "root", "", "petstore");
if($conn->connect_errno){
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}
$requestType = $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
//   $c_id = $_POST['c_id'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $c_address = $_POST['c_address'];
  $c_email = $_POST["c_email"];  
  $c_pwd = $_POST["c_pwd"];  
  
  $query =  "INSERT INTO customer (fname, lname, c_address, c_email, c_pwd) VALUES('" . $fname . "', '" . $lname . "', '" . $c_address . "', '" . $c_email . "' ,'" . $c_pwd . "' )";
  $data = mysqli_query($conn,$query);
  if ($data) {
    ?>
    <script>
    alert("Details Uploaded Succesfully")
    </script>
    <?php
        }
        else{
            ?>
            <script>
                alert("Error Accoured While Uploading Details")
            </script>
            <?php
            }   
          }                  
     ?>
<html lang="en" dir="ltr">

<head>
  <title> addcustomer/Claws&Paws </title>
  <link rel="stylesheet" href="addcustomer.css">
</head>

<body class="bg">
  <center>
    <header>
      <nav>
        <!-- <img class="img" height="100px" width="310px" alt="" src="logo FL final w.svg"> -->
        <div class="btn">
         <input  type="button" value="Back" onclick="window.location.href='customer.php';"/>
        </div>
      </nav>
    </header>
   
    <div class="card">
      <h1>Fill the Details </h1>
      <form action="" method="POST" enctype="multipart/form-data">
        <!-- <div class="flex-container">
            <div> 
            <h3>Customer id</h3>  
            <input type="text" placeholder="enter id" class="field" name="c_id" required>
            </div>
            <div></div>             
        </div>    -->
        <div class="flex-container">
        
            <div> 
                <h3>First name</h3>
            <input type="text" placeholder="enter first name" class="field" name="fname" required> 
            </div>
    
            <div> 
                <h3>Last name</h3>
                <input type="text" placeholder="enter last name " class="field" name="lname" required> 
            </div>
            
        </div>    
    
        <div class="flex-container">
            
            <div> 
            <h3>Address</h3>
            <input type="text" placeholder="enter address " class="field" name="c_address" required>             
            </div>

            <div> <input type="hidden" placeholder="enter address " class="field" name="c_address" required> </div>    
        </div>

        <div class="flex-container">            
            <div> 
            <h3>Email id</h3>  
            <input type="text" placeholder="enter email id" class="field" name="c_email" required>
            </div>
            <div>     
            </div>             
        </div>    
        <div class="flex-container">            
            <div> 
            <h3>Password</h3>  
            <input type="text" placeholder="enter password" class="field" name="c_pwd" required>
            </div>
            <div>     
            </div>             
        </div>         
         <div class="b">
         <input  type="submit" value="Done" />
        </div>
      </form>   
    </div>
  </center>
</body>
</html>
