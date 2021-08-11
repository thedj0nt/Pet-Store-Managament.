<?php
$conn = new mysqli("localhost", "root", "", "petstore");
if($conn->connect_errno){
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}
$requestType = $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $p_id = $_POST['p_id'];
  $p_name = $_POST['p_name'];
  $p_type = $_POST['p_type'];
  $p_amount = $_POST['p_amount'];
  $p_dob = $_POST["p_dob"]; 
  $Image = $_FILES["file"]["name"]; 
  $tempname = $_FILES["file"]["tmp_name"];     
  $folder = "image/".$Image; 
  $s_id = $_POST["s_id"]; 
  $query =  "INSERT INTO pet VALUES('" . $p_id . "', '" . $p_name . "', '" . $p_type . "', '" . $p_amount . "','". $p_dob ."' , '" . $folder . "' , '". $s_id ."')";
  $data = mysqli_query($conn,$query);
  if (move_uploaded_file($tempname, $folder))  { 
    $msg = "Image uploaded successfully"; 
}else{ 
    $msg = "Failed to upload image"; 
}
  if ($data) {
    ?>
    <option value="<? echo $row_list['p_type']; ?>"<? if($row_list['p_type']==$select)?>>  
      <?echo $row_list['p_type'];?>  </option>
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
  <title> addpet/Claws&Paws </title>
  <link rel="stylesheet" href="addpet.css">
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
      <h1>Add pet info</h1>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="flex-container">            
            <div> 
            <h3>Pet id</h3>  
            <input type="text" placeholder="enter id" class="field" name="p_id" required>
            </div>
            <div>    
            <h3>Supplier id</h3>  
            <input type="text" placeholder="enter id" class="field" name="s_id" required> 
            </div>             
        </div>   
        <div class="flex-container">
        
            <div> 
                <h3> Name </h3>
                 <input type="text" placeholder="enter nick name" class="field" name="p_name" required> 
            </div>
            <div>
                <h3> Upload Image </h3>
                <input type="file" value="Choose File" name="file">                   
            </div>
            
        </div>    
    
        <div class="flex-container">
            
          <div> 
            <h3> Type </h3>
            <input list="breeds" placeholder="select type" class="field" name="p_type" required>             
              <datalist id="breeds" name="p_type">
                <option value="Dog">
                <option value="Cat">
                <option value="Fish"> 
                <option value="Bird">                                         
              </datalist> 
          </div>
            <div>  <h3>Date of birth</h3>  
            <input type="date" class="field" name="p_dob" placeholder="yyyy-mm-dd" value="2018-07-22" min="1997-01-01" max="2030-12-31" required>
            </div>    
        </div>

        <div class="flex-container">            
            <div> 
            <h3> Amount </h3>  
            <input type="text" placeholder="enter amount" class="field" name="p_amount" required>
            </div>
            <div>
            
            </div>             
        </div>   

        <!-- <div class="flex-container">            
            <div> 
            <h3>Date of birth</h3>  
            <input type="date" class="field" name="p_dob" placeholder="yyyy-mm-dd" value="2018-07-22" min="1997-01-01" max="2030-12-31" required>
            </div>
            <div></div>             
        </div>    -->
        
        <!-- <div class="flex-container">            
            <div> 
            <h3>Color</h3>  
            <input type="text" placeholder="enter color" class="field" name="p_color" required>
            </div>
            <div></div>             
        </div>    -->
       <br><br>
        <div class="b">
         <input  type="submit" value="Add"/>
        </div>
      </form>  
    </div>
  </center>
</body>
</html>