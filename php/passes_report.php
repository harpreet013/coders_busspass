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
    <link href="../css/passes_report.css" rel="stylesheet">
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
                <h2>Between Dates Reports</h2><hr>
                <form action="" method="POST">
                    <div class="form-group">
                        <h3>From Date</h3>
                        <input type="date" class="form-control" id="date" name="date"><br>
                        <h3>To Date</h3>
                        <input type="date" class="form-control" id="date" name="date"><br>
                        <a href="#" class="btn btn-primary" type="submit" id="submit">Submit</a>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>