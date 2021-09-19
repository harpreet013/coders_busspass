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
    <link href="../css/add_pass.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row row1">
                <div class="col-md-4">
                    <a href="dashboard.php"><h1>Bus pass Management System</h1></a>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-2">
                    <a href="login.php"><i class="fas fa-user" id="i02"></i></a>
                </div>
        </div>
        <div class="row row2">
            <div class="col-md-2">
                <p><i class="fas fa-user" id="i01"></i><span> <b>Admin</b></span></p>
                <ul class="list-group list-group-flush">
                    <li><a href="dashboard.php" class="list-group-item list-group-item-action a01"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    
                    <li>
                        <a href="#" class="dropdown-toggle list-group-item list-group-item-action a01" data-toggle="dropdown"><i class="far fa-image"></i> Category</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item list-group-item list-group-item-action a01" href="Add_category.php">Add Category</a>
                            <a class="dropdown-item list-group-item list-group-item-action a01" href="man_category.php">Manage Category</a>
                        </div>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle list-group-item list-group-item-action a01" data-toggle="dropdown"><i class="far fa-file-alt"></i> Passes</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item list-group-item list-group-item-action a01" href="add_pass.php">Add Pass</a>
                            <a class="dropdown-item list-group-item list-group-item-action a01" href="man_pass.php">Manage Pass</a>
                        </div>
                    </li>
                    
                    <li>
                        <a href="#" class="dropdown-toggle list-group-item list-group-item-action a01" data-toggle="dropdown"><i class="far fa-file-alt"></i> Pages</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item list-group-item list-group-item-action a01" href="add_page.php">Add Page</a>
                            <a class="dropdown-item list-group-item list-group-item-action a01" href="man_page.php">Manage Page</a>
                        </div>
                    </li>
                    
                    <li>
                        <a href="#" class="dropdown-toggle list-group-item list-group-item-action a01" data-toggle="dropdown"><i class="far fa-file-alt"></i> Enquiry</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item list-group-item list-group-item-action a01" href="read_enquiry.php">Read Enquiry</a>
                            <a class="dropdown-item list-group-item list-group-item-action a01" href="unread_enquiry.php">Unread Enquiry</a>
                        </div>
                    </li>
                    
                    <li><a href="search.php" class="list-group-item list-group-item-action a01"><i class="fas fa-search"></i> Search</a></li>
                    <li><a href="Passes_Report.php" class="list-group-item list-group-item-action a01"><i class="fas fa-folder"></i> Report of Passes</a></li>
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
                                <option value="AC Bus"></option>
                                <option value="Non AC Bus"></option>
                                <option value="Volvo Bus"></option>
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
                        <label for="identity_name">Identity Name:</label>        
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
                        <input type="number" class="form-control" id="cost" name="cost" placeholder="Automatic Generated Cost" disabled><br>
                        
                        <a href="payment.php" class="btn btn-primary" id="submit">Add Pass Details</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>