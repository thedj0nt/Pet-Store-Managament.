<html lang="en" dir="ltr">
    <head>
        <title>view customers/paws&claws</title>
        <link rel="stylesheet" href="vieworder.css">
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
                            <th scope="col">Order ID</th>
                            <th scope="col">Order's Name</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Customer_id</th>
                            <th scope="col">Pet_id</th>  
                            <th scope="col">Date & Time</th>                       
                        </tr>
                
                    <?php
                    $conn = new mysqli("localhost", "root", "", "petstore");
                    if ($conn->connect_errno) {
                        echo "Failed to connect to MySQL: " . $conn->connect_error;
                        exit();
                    }
                    // $query = "SELECT * FROM order_info";
                    $query_run = mysqli_query($conn,"CALL order_log_display()") or die("query fail:" .mysqli_error());
        
                    while ($row = mysqli_fetch_array($query_run)) 
                    {                
                        echo"<tr>                                  
                                <td> ".$row['o_id']." </td>
                                <td> ".$row['cust_name']." </td>
                                <td> ".$row['o_amount']." </td>
                                <td> ".$row['c_id']." </td>
                                <td> ".$row['p_id']." </td>  
                                <td> ".$row['date_time']." </td>                                              
                            </tr>";
                        
                    }
                    ?>
                    
                    </div>
                    </form>                     
               
            </div>    
        </center>
    </body>
</html>