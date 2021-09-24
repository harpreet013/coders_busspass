<?php

//define variables and set to empty values

$fnameErr = $lnameErr = $phoneErr = $categoryErr = $emailErr = $genderErr = $identityErr = $identity2Err = $sourceErr = $destinationErr =  $fromdateErr = $todateErr = $costErr = ""; 
$fname = $lname = $phone = $email = $gender = $identity_id = $identity_name = $fromdate = $todate = $course = $cost = "";
$valid=false;
if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $valid = true;
        if(empty($_POST["fname"])){
            $fnameErr = "Fname is required";
            $valid = false;
        }
        else{
            $fname = test_input($_POST["fname"]);
        }

        if(empty($_POST["lname"])){
            $lnameErr = "Lname is required";
            $valid = false;
        }
        else{
            $lname = test_input($_POST["lname"]);
        }

        if(empty($_POST["phone"])){
            $phoneErr = "Mobile number is required";
            $valid = false;
        }
        else{
            $phone = test_input($_POST["phone"]);
        }

        if(empty($_POST["email"])){
            $emailErr = "Email is required";
            $valid = false;
        }
        else{
            $email = test_input($_POST["email"]);
        }

        if(empty($_POST["gender"])){
            $genderErr = "Gender is required";
            $valid = false;
        }
        else{
            $gender = test_input($_POST["gender"]);
        }

        if(empty($_POST["category"])){
            $categoryErr = "Category is required";
            $valid = false;
        }
        else{
            $category = test_input($_POST["category"]);
        }


        if(empty($_POST["identity_id"])){
            $identityErr = "Identity_id is required";
            $valid = false;
        }
        else{
            $identity_id = test_input($_POST["identity_id"]);
        }

        if(empty($_POST["identity_name"])){
            $identityErr = "Identity name is required";
            $valid = false;
        }
        else{
            $identity_id = test_input($_POST["identity_name"]);
        }

        if(empty($_POST["source"])){
            $sourceErr = "Source is required";
            $valid = false;
        }
        else{
            $source = test_input($_POST["source"]);
        }

        if(empty($_POST["destination"])){
            $destinationErr = "Destination is required";
            $valid = false;
        }
        else{
            $destination = test_input($_POST["destination"]);
        }
           
        if(empty($_POST["from_date"])){
            $fatherErr = "Date is required";
            $valid = false;
        }
        else{
            $father_name = test_input($_POST["from_date"]);
        }

        if(empty($_POST["to_date"])){
            $todateErr = "Date is required";
            $valid = false;
        }
        else{
            $todate  = test_input($_POST["to_date"]);
        }

        if(empty($_POST["cost"])){
            $dobErr = "Cost is required";
            $valid = false;
        }
        else{
            $dob = test_input($_POST["cost"]);
        }

        
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($valid){
        include "validate.php";
    }
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
                <h2>Add Pass</h2><hr>
                <form action="" method="POST">
                    <div class="form-group bg-white p-3">
                        <label for="fname">Fname:</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder = "Enter the fname">
                        <span class = "error"> <?php echo $fnameErr;?></span><br><br>
                        <label for="lname">Lname:</label>
                        <input type="text" class="form-control" id="lname" name="lname" placeholder = "Enter the lname">
                        <span class = "error"><?php echo $lnameErr;?></span><br><br>
                        <label for="number">Phone Number:</label>
                        <input type="number" class="form-control" id="number" name="phone" placeholder = "Enter the phone number">
                        <span class = "error"><?php echo $phoneErr;?></span><br><br>
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder = "Enter the email">
                        <span class = "error"> <?php echo $emailErr;?></span><br><br>
                        <label for="gender">Gender:</label>
                        <input list="idd" class="form-control" id="gender" name="gender" placeholder="Choose your Gender">
                        <datalist id="idd">
                            <option value="Male"> 
                            <option value="Female"> 
                            <option value="Other"> 
                        </datalist>
                        <span class = "error"> <?php echo $genderErr;?></span><br><br>
                        <label for="identity_name">Category:</label>        
                        <input list="iddd" class="form-control" id="category" name="category" placeholder="Choose bus category">
                            <datalist id="iddd">
                                <option value="Student"></option>
                                <option value="Other Staff"></option>
                            </datalist>
                            <span class = "error"><?php echo $categoryErr;?></span><br><br>
                        <label for="identity_id">Identity Id:</label>
                            <input list="id" class="form-control" id="identity_id" name="identity_id" placeholder="Choose your Identity">
                            <datalist id="id">
                                <option value="AAdhar Card"> 
                                <option value="Voter Card"> 
                                <option value="Paasport"> 
                                <option value="Ration Card"> 
                                <option value="Driving License">  
                            </datalist>
                            <span class = "error"> <?php echo $identityErr;?></span><br><br>
                        <label for="identity_name">Identity Number:</label>        
                        <input type="text" class="form-control" id="identity_name" name="identity_name" placeholder="Enter your Identity Number">
                        <span class = "error"><?php echo $identity2Err;?></span><br><br>
                        <label for="source">Source:</label>
                        <input type="text" class="form-control" id="source" name="source" placeholder="Enter your Source">
                        <span class = "error"><?php echo $sourceErr;?></span><br><br>
                        <label for="destination">Destination:</label>
                        <input type="text" class="form-control" id="destination" name="destination" placeholder="Enter your Destination">
                        <span class = "error"><?php echo $destinationErr;?></span><br><br>
                        <label for="from_date">From Date:</label>
                        <input type="date" class="form-control" id="from_date" name="from_date">
                        <span class = "error"><?php echo $fromdateErr;?></span><br><br>
                        <label for="to_date">To Date:</label>
                        <input type="date" class="form-control" id="to_date" name="to_date">
                        <span class = "error"><?php echo $todateErr;?></span><br><br>
                        <label for="cost">Cost:</label>
                            <input list="idddd" class="form-control" id="cost" name="cost" placeholder="Choose your Payment option">
                            <datalist id="idddd">
                                <option value="Paytm"> 
                                <option value="Paypal"> 
                                <option value="Phone Pay">
                                <option value="Amazon Pay"> 
                                <option value="Google Pay"> 
                            </datalist>
                        <span class = "error"><?php echo $costErr;?></span><br><br>
                        
                        <button type="submit" class="btn btn-primary" id="submit" name="submit">Add Pass Details</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>