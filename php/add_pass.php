<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/2a538a4ef9.js" crossorigin="anonymous"></script>
    
    <style>
        <?php  include '../css/add_pass.css'; ?>
    </style>
</head>
<body>
<div class="container-fluid">
        <div class="row row1">
                <div class="col-md-11">
                    <marquee><h1>Bus pass Management System</h1></marquee>
                </div>
                
                <div class="col-md-1">
                    <a href="login.php"><i class="fas fa-user" id="i02"></i></a>
                </div>
        </div>
        <div class="row row2">
            <div class="col-md-2">
                <p><i class="fas fa-user" id="i01"></i><span> Admin</span></p>
                <ul class="list-group list-group-flush">
                    <li><a href="dashboard.php" class="list-group-item list-group-item-action a01"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>

                    <li>
                        <a href="add_pass.php" class="list-group-item list-group-item-action a01"><i class="far fa-file-alt"></i> Add Pass</a>
                    </li>
                    
                    <li>
                        <a href="#" class="list-group-item list-group-item-action a01"><i class="far fa-address-book"></i></i> Contact Us</a>
                    </li>
                    
                    <li>
                        <a href="read_enquiry.php" class="list-group-item list-group-item-action a01"><i class="far fa-file-alt"></i> Read Enquiry</a>
                    </li>
                    <li>
                    <a href="unread_enquiry.php" class="list-group-item list-group-item-action a01"><i class="far fa-file-alt"></i> UnRead Enquiry</a>
                    </li>
                    
                    <li><a href="search.php" class="list-group-item list-group-item-action a01"><i class="fas fa-search"></i> Search</a></li>
                </ul>
            </div>
            <div class="col-md-10">
                <h2>Add Pass</h2><hr>
                <form action="" method="POST">
                    <div class="form-group bg-white p-3">
                        <label for="fname">Fname:</label>
                        <input type="text" class="form-control" id="fname" name="fname"><br>
                        <label for="lname">Lname:</label>
                        <input type="text" class="form-control" id="lname" name="lname"><br>
                        <label for="number">Phone Number:</label>
                        <input type="number" class="form-control" id="number" name="number"><br>
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email"><br>
                        <label for="gender">Gender:</label>
                        <input list="idd" class="form-control" id="gender" name="gender" placeholder="Choose your Gender">
                        <datalist id="idd">
                            <option value="Male"> 
                            <option value="Female"> 
                            <option value="Other"> 
                        </datalist><br>
                        <label for="identity_name">Category:</label>        
                        <input list="iddd" class="form-control" id="category" name="category" placeholder="Choose bus category">
                            <datalist id="iddd">
                                <option value="Student"></option>
                                <option value="Other Staff"></option>
                            </datalist><br>
                        <label for="identity_id">Identity Id:</label>
                            <input list="id" class="form-control" id="identity_id" name="identity_id" placeholder="Choose your Identity">
                            <datalist id="id">
                                <option value="AAdhar Card"> 
                                <option value="Voter Card"> 
                                <option value="Paasport"> 
                                <option value="Ration Card"> 
                                <option value="Driving License">  
                            </datalist><br>
                        <label for="identity_name">Identity Number:</label>        
                        <input type="text" class="form-control" id="identity_name" name="identity_name" placeholder="Enter your Identity Number"><br>
                        <label for="source">Source:</label>
                        <input type="text" class="form-control" id="source" name="source" placeholder="Enter your Source"><br>
                        <label for="destination">Destination:</label>
                        <input type="text" class="form-control" id="destination" name="destination" placeholder="Enter your Destination"><br>
                        <label for="from_date">From Date:</label>
                        <input type="date" class="form-control" id="from_date" name="from_date"><br>
                        <label for="to_date">To Date:</label>
                        <input type="date" class="form-control" id="to_date" name="to_date"><br>
                        <label for="cost">Cost:</label>
                        <input type="number" class="form-control" id="cost" name="cost" placeholder="Automatic Generated Cost"><br>
                        
                        <a href="payment.php" class="btn btn-primary" id="submit">Add Pass Details</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>