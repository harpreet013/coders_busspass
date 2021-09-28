<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
    <?php
         include  "connect.php";
        // include "view_pass.php";
         //if($_SERVER['REQUEST_METHOD']== 'POST')
        //$passnumber = $_POST['passnumber'];
         
        //$servername = "localhost";
        // $username = "root";
        // $password = "";
         //$dbname = "coders_busspass_database";
       // $conn = mysqli_connect($servername, $username, $password,$dbname) or die(mysqli_error($mysqli));
        
       
       $result = $conn->query("SELECT Id, Pass_Number, Fname, Lname, Phone, Email, Gender, Category, Identity_Type, Source, Destination,
       Start_Date, End_Date,Cost, Profile_Image FROM add_pass1 ") or die($conn->error);  

         
       
    ?>

    <div class="row justify-content-center col-sm-9">
        <table class="table">
            <tbody>
                <thead>
                    <th>Id</th>
                    <th>Pass_Number</th>
                    <th>Fname</th>
                    <th>Lname</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>category</th>
                    <th>Identity_Type</th>
                    <th>Source</th>
                    <th>Destination</th>
                    <th>Start_Date</th>
                    <th>End_Date</th>
                    <th>Cost</th>
                    <th>Profile_Image</th>
                </thead>
                <?php
                    while($row = mysqli_fetch_assoc($result)):
                ?>
                    <tr>
                        <td><?php echo $row["Id"];?></td>
                        <td><?php echo $row["Pass_Number"];?></td>
                        <td><?php echo $row["Fname"];?></td>
                        <td><?php echo $row["Lname"];?></td>
                        <td><?php echo $row["Phone"];?></td>
                        <td><?php echo $row["Email"];?></td>
                        <td><?php echo $row["Gender"];?></td>
                        <td><?php echo $row["Category"];?></td>
                        <td><?php echo $row["Identity_Type"];?></td>                       
                        <td><?php echo $row["Source"];?></td>
                        <td><?php echo $row["Destination"];?></td>
                        <td><?php echo $row["Start_Date"];?></td>
                        <td><?php echo $row["End_Date"];?></td>
                        <td><?php echo $row["Cost"];?></td>
                        <td><?php echo $row["Profile_Image"];?></td>

                        <td><button class="btn-danger btn"> <a href="#'<?php //echo $row['id']; ?>" class="text-white">UPDATE</a></button></td>   
                    <td><button class="btn-danger btn"> <a href="#'<?php //echo $row['id']; ?>" class="text-white">DELETE</a></button></td> 
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>