<html lang="en" dir="ltr">

<head>
  <title> addcustomer/Claws&Paws </title>
  <link rel="stylesheet" href="admindashboard.css">
</head>

<body class="bg">
  <center>
    <header>
      <nav>
        <img class="img" height="100px" width="310px" alt="" src="logo FL final.svg">
        <div class="b">
        <input type="button" value="Log out" onclick="window.location.href='index.php';"/>
        </div>
      </nav>
    </header>
 
    <!-- <div class="card">
      <div class="container">
        <h1>Admin Dashboard</h1>
      </div>
    </div> -->
  
    <div class="card">
      <h3> Dashboard </h3>
      <div class="flex-container">
     
        <div> 
          <img src="customer.svg" height="150px" width="150px">
        </div>
  
        <div> 
          <img src="pawprints.svg" height="140px" width="150">
        </div>
  
        <div> 
          <img src="supplies.svg" height="140px" width="150px">
        </div>
        
        <div> 
          <img src="box.svg" height="140px" width="160px">
        </div>
      </div>   
    <div class="flex-container">
        
      <div> 
        <input type="button" value="Add Customer" class="btn"  onclick="window.location.href='addcustomer.php';"/> 
      </div>
      
      <div> 
        <input type="button" value="Add Pet" class="btn"  onclick="window.location.href='addpet.php';"/> 
      </div>
   
      <div> 
        <input type="button" value="Add Supplier" class="btn" onclick="window.location.href='addsupplier.php';"/> 
      </div>

      <div> 
        <input type="button" value="Order Details" class="btn" onclick="window.location.href='vieworders.php';"/> 
      </div>
    </div>    
    
    <div class="flex-container">
     
      <div> <input type="submit" value="View Customers" class="btn" onclick="window.location.href='viewcustomer.php';"/> </div>

      <div> <input type="submit" value="View Pets" class="btn" onclick="window.location.href='viewpet.php';"/> </div>

      <div> <input type="submit" value="View Suppliers" class="btn" onclick="window.location.href='viewsupplier.php';"/> </div>

      <div></div>

    </div>
    </div>
  </center>
</body>
</html>