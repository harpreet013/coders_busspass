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
    <title>REGULAR USER BUS PASS</title>
    <style>
        <?php  include '../css/regular.css'; ?>
    </style>
</head>
<body>
    <img src="../images/buses-2.jpg" alt="buses" height="730" width="1517.5">
    <div class="container" style="line-height: 15px;">
        <h2>ADD REGULAR USER DETAILS</h2>
        <form method="POST" action="insert_add_pass1.php"> 
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your First name">
                    <span id = "userfname"></span>
                </div>
            </div>
            <div class="col">
                <div class="form-group form1">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your Last name">
                    <span id = "userlname"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="phone">Mobile Number:</label>
                    <input type="tel" class="form-control" id="number" name="number" placeholder="+91-12345-67890">
                    <span id = "usernumber"></span>
                </div>
            </div>
            <div class="col">
                <div class="form-group form1">
                    <label for="email">Email id:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="ex-abc@gmail.com">
                    <span id = "useremail"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <input list="idd" class="form-control" id="gender" name="gender" placeholder="Choose your Gender">
                    <datalist id="idd">
                        <option value="Male"> 
                        <option value="Female"> 
                        <option value="Other"> 
                    </datalist>
                    <span id = "usergender"> </span>
                </div>
            </div>
            <div class="col">
                <div class="form-group form1">
                    <label for="identity_name">Category:</label>        
                    <input list="iddd" class="form-control" id="category" name="category" placeholder="Choose bus category">
                            <datalist id="iddd">
                                <option value="Student"></option>
                                <option value="Other Staff"></option>
                            </datalist>
                            <span id = "usercategory"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="identity_id">Identity Type:</label>
                        <input list="idd" class="form-control" id="idtype" name="idtype" placeholder="Choose your Identity">
                            <datalist id="idd">
                                <option value="AAdhar Card"> 
                                <option value="Voter Card"> 
                                <option value="Paasport"> 
                                <option value="Ration Card"> 
                                <option value="Driving License">  
                            </datalist>
                            <span id = "useridentity"></span>
                </div>
            </div>
            <div class="col">
                <div class="form-group form1">
                <label for="image">Identity Document:</label>
                    <input type="file" class="form-control" id="iddoc" name="iddoc" onchange="validateImage()">
                    <span id = "useriddoc"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="source">Source:</label>
                    <input type="text" class="form-control" id="source" name="source" placeholder="Enter your Source">
                    <span id = "usersource"></span>
                </div>
            </div>
            <div class="col">
                <div class="form-group form1">
                    <label for="destination">Destination:</label>
                    <input type="text" class="form-control" id="des" name="des" placeholder="Enter your Destination">
                    <span id = "userdestination"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="from_date">From Date:</label>
                    <input type="date" class="form-control" id="sdate" name="sdate">
                    <span id = "fromdate"></span>
                </div>
            </div>
            <div class="col">
                <div class="form-group form1">
                    <label for="to_date">To Date:</label>
                    <input type="date" class="form-control" id="edate" name="edate">
                    <span id = "todate"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="cost">Cost:</label>
                    <input type="number" class="form-control" id="cost" name="cost" placeholder=" Cost" >
                </div>
            </div>
            <div class="col">
                <div class="form-group form1">
                    <label for="image">Profile Image:</label>
                    <input type="file" class="form-control" id="image" name="image" onchange="validateImage()">
                    <span id = "userimage"></span>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" id="submit">ADD DETAILS</button>
    </form>
    </div>
    <script src = "../js/regularuser.js"></script>
</body>
</html>