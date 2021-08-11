<?php
$conn = new mysqli("localhost", "root", "", "petstore");
if($conn->connect_errno){
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}
$requestType = $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $s_id = $_POST['s_id'];
  $s_name = $_POST['s_name'];
  $s_address = $_POST['s_address'];
  $s_phone = $_POST['s_phone'];     
  $query =  "INSERT INTO supplier VALUES('" . $s_id . "', '" . $s_name . "', '" . $s_address . "', '" . $s_phone . "')";
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
  <title> addsupplier/Claws&Paws </title>
  <link rel="stylesheet" href="addsupplier.css">
</head>

<body class="bg">
  <center>
    <header>
      <nav>
        <!-- <img class="img" height="100px" width="310px" alt="" src="logo FL final w.svg"> -->
        <div class="btn">
         <input  type="button" value="Back" onclick="window.location.href='admindashboard.php';"/>
        </div>
      </nav>
    </header>
   
    <div class="card">
    <h1>Add Supplier info</h1>
     <form action="" method="POST" >
        <div class="flex-container">
            
            <div> 
            <h3>Supplier id</h3>  
            <input type="text" placeholder="enter id" class="field" name="s_id" required>
            </div>
            <div>                
            </div>             
        </div>   
        <div class="flex-container">
        
            <div> 
                <h3>Name</h3>
            <input type="text" placeholder="enter name" class="field" name="s_name" required> 
            </div>
    
            <div>                
            </div>
            
        </div>    
    
        <div class="flex-container">
            
            <div> 
            <h3>Address</h3>
            <input type="text" placeholder="enter address " class="field" name="s_address" required>             
            </div>

            <div>  </div>    
        </div>

        <div class="flex-container">            
            <div> 
            <h3>Phone</h3>  
            <input type="tel" placeholder="enter phone no." class="field" name="s_phone" required>
            </div>
            <div>     
            </div>             
        </div>   
       
        <div class="b">
         <input  type="submit" value="Add"/>
        </div>
      </form>
    </div>
  </center>
</body>
</html>