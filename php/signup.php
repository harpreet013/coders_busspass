<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/2a538a4ef9.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/signup.css">

    <title>Sign Up</title>
  </head>
  <style>
    
  </style>
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
        <form class="p-2 form1" style="background-color: lightgray;">
          <h2 class="text-primary text-center sign">SIGN UP</h2>
            <div class="form-group">
              <label for="fname">First Name:</label>
              <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your First name">
              <label for="lname">Last Name:</label>
              <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your Last name">
      
              <label for="phone">Mobile Number:</label>
              <input type="tel" class="form-control" id="number" name="number" placeholder="1234567890">

              <label for="email">Email id:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="ex-abc@gmail.com">

              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter Your Password">
          
              <label for="pwd">Confirm your Password:</label>
              <input type="password" class="form-control" id="pwd1" name="pwd1" placeholder="Enter Your Password">
          
              <div class="form-check">
                <label for="gender" class="form-check-label">
                  <input type="radio" class="form-check-input" id="radio1" name="optradio" value="Male">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Male
                  <input type="radio" class="form-check-input" id="radio2" name="optradio" value="Male">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Female  
                </label>  
              </div>

              <button type="submit" class="btn btn-primary mt-2" id="submit">ADD DETAILS</button>
            </div>  
        </form>
      </div>
    </div>
  </div>

  <div class="footer">
      <h2>maimt | Copyright Team Coders</h2>
  </div>
    
  </body>
</html>