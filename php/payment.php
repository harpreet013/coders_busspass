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
    <link href="../css/admin.css" rel="stylesheet">
    <style>
        <?php include '../css/payment.css'; ?>
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
                        <a href="contact_us.php" class="list-group-item list-group-item-action a01"><i class="far fa-address-book"></i></i> Contact Us</a>
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
                <h2>Payment Options</h2><hr>
  
                <form action="" method="POST">
                <h3>Select any one option for payment</h3><br>
                <div class="form-check">
                    <label class="form-check-label" for="radio1">
                        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="paytm"><i class="fab fa-amazon-pay icons"></i><span> Paytm</span>
                    </label>
                </div><br>

                <div class="form-check">
                    <label class="form-check-label" for="radio3">
                        <input type="radio" class="form-check-input" id="radio3" name="optradio" value="Google pay"><i class="fab fa-google-pay icons"></i><span> Google Pay</span>
                    </label>
                </div><br>
                
                <a href="#" class="btn btn-primary" id="submit">Submit</a>
                </form>
            </div>
            </div>
        </div>
    </div>
</body>
</html>