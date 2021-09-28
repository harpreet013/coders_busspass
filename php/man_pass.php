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
        <?php  include '../css/man_pass.css'; ?>
    </style>
</head>
<body>
<div class="container-fluid">
        <div class="row row1">
                <div class="col-md-11">
                    <marquee><h1>Bus Pass Management System</h1></marquee>
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
                        <a href="contact_us.php" class="list-group-item list-group-item-action a01"><i class="far fa-address-book"></i></i> Contact Us</a>
                    </li>
                    
                    <li>
                    <a href="read_enquiry.php" class="list-group-item list-group-item-action a01"><i class="far fa-file-alt"></i> Enquiry/Complain</a>
                        
                    </li>
                    
                    <li><a href="search.php" class="list-group-item list-group-item-action a01"><i class="fas fa-search"></i> Search</a></li>
                </ul>
            </div>
            <div class="col-md-10">
            <h2>Total Pass</h2><hr>
                <form action="" method="POST">
                    <label for="number"></label>
                    <input type="number" class="one" name="10" min="0" max="10"><span>records per page</span>
                    <label for="search" class="two">Search: </label>
                    <input type="search" class="form-control" id="search" name="search">
                    <table class="table table-bordered">
                    <thead>
                        <th>S.No</th>
                        <th>Pass Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </thead>
                    </table>
                    <div class="third">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-outline-primary">Previous</button>
                            <button type="button" class="btn btn-outline-primary">Next</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>