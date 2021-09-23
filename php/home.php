<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2a538a4ef9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/home.css">
    <style>
      <?php include '../css/home.css'; ?>
    </style>
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
            <a class="dropdown-toggle nav-link" href="#" id="dropDownLink" data-toggle="dropdown"><i class="fas fa-user"></i> Login</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="login.php">Admin Login</a>
              <a class="dropdown-item"  href="add_pass1.php">Add Pass</a>
               </div>
          </li>
        </ul>
    </nav>

    <div class="footer">
        <h2>maimt | Copyright Team Coders</h2>
    </div>
</body>
</html>