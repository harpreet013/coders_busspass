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
    <link href="../css/unread_enquiry.css" rel="stylesheet">
    <style>
        <?php include '../css/unread_enquiry.css' ?>
    </style>
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
            <h2>Unread Enquiry</h2><hr>
            <form action="" method="POST">
                <label for="number"></label>
                <input type="number" class="one" name="10" min="0" max="10"><span>records per page</span>
                <label for="search" class="two">Search:</label>
                <input type="search" class="form-control" id="search" name="search">
                <table class="table table-bordered">
                    <thead>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Enquiry</th>
                        <th>Action</th>
                    </thead>
                    <tbody class="body">

                    </tbody>
                </table>
                <h5>No data available in table</h5>
                <div class="third">
                    <h6>Showing 0 to 0 of 0 entries</h6>
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