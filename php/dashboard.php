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
    <link rel="stylesheet" href="../css/dashboard.css">

    <style>
        <?php include '../css/dashboard.css'; ?>
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
                 <h2>Dashboard</h2><hr>    
                <div class="card-columns">
                    <div class="card bg-secondary">
                        <div class="card-body text-center">
                            <a href="yes_pass.php" class="card-text"><i class="fas fa-pencil-alt"></i> Pass Created Yesterday</a>
                        </div>
                    </div>
                    <div class="card bg-warning">
                        <div class="card-body text-center">
                            <a href="man_pass.php" class="card-text"><i class="fas fa-trophy"></i> Total Pass</a>
                        </div>
                    </div>
                    <div class="card bg-success">
                        <div class="card-body text-center">
                            <a href="years_pass.php" class="card-text"><i class="fas fa-pencil-alt"></i> Pass Created in Last Years</a>
                        </div>
                    </div>
                    <div class="card bg-danger text-center">
                        <div class="card-body">
                            <a href="today_pass.php" class="card-text"><i class="fas fa-edit"></i> Pass Created Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</body>
</html>