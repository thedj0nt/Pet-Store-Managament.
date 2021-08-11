<html lang="en" dir="ltr">
    <head>
        <title>view customers/paws&claws</title>
        <link rel="stylesheet" href="viewcustomer.css">
    </head>

    <body class="bg">
        <center>
            <header>
            <img class="img" height="100px" width="310px" alt="" src="logo FL final.svg">
            <div class="btn">
                <input  type="button" value="Back" onclick="window.location.href='admindashboard.php';"/>
            </div>
            </header>
            <div class="card">
               
                    <div>
                    <form action="" method="POST" enctype="multipart/form-data">
                    <table class="table">                
                        <tr>                    
                            <th scope="col">Customer ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Email</th>
                            <th></th>                                                  
                        </tr>
                
                    <?php
                    $conn = new mysqli("localhost", "root", "", "petstore");
                    if ($conn->connect_errno) {
                        echo "Failed to connect to MySQL: " . $conn->connect_error;
                        exit();
                    }
                    $query = "SELECT * FROM customer";
                    $query_run = mysqli_query($conn,$query);
        
                    while ($row = mysqli_fetch_assoc($query_run)) 
                    {                
                    ?>
                        <tr>
                                <td><?php echo $row['c_id']; ?> </td>
                                <td><?php echo $row['fname']; ?> </td>
                                <td><?php echo $row['lname']; ?></td>
                                <td><?php echo $row['c_address']; ?></td>
                                <td><?php echo $row['c_email']; ?></td> 
                                <td> <a href="http://localhost/petstore/uc.php?c_id=<?php echo $row["c_id"]; ?>" class="button1">update</a></td>
                                <td> <a href="http://localhost/petstore/deletecustomeradmin.php?c_id=<?php echo $row["c_id"]; ?>" class="button">Delete</a></td>                                                                                                                                 
                        </tr>          
                    <?php    
                    }
                    ?>           
                    </div>
                    </form>                     
               
            </div>    
        </center>
    </body>
</html>