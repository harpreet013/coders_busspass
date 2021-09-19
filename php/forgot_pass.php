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
    <link href="../css/forgot_pass.css" rel="stylesheet">
    <title></title>
</head>
<body>
    <nav class="navbar navbar-expand-sm">
        <span class="navbar-text">
            <i class="fas fa-bus"></i>
          </span>
          <span class="navbar-text">
            <h1> bus pass management system</h1>
          </span>
        
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" id="home" href="home.php">home</a>
          </li>
          <li class="nav-item">
            <a id="about" class="nav-link" id="about" href="about.php">about us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact" href="contact.php">contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="view" href="view_pass.php">view pass</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php"><i class="fas fa-user"></i> Login</a>
          </li>
        </ul>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-5 m-auto">
                <form class="mt-5 p-2 form1" action="forgetpass_db.php" method="POST">
                    <h2 class="text-center">Reset Password</h2>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                      <label for="pwd">New Password:</label>
                      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter your new password">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Re-Enter New Password:</label>
                        <input type="password" class="form-control" id="pwd1" name="pwd1" placeholder="Re-Enter your new password">
                      </div>
                    
                      <button type="submit" class="btn btn-primary" id="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <h2>maimt | Copyright Team Coders</h2>
    </div>
</body>
</html>