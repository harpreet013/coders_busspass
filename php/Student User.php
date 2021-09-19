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
    <link rel="stylesheet" href="../css/student.css" type="text/css">
    <title>STUDENT BUS PASS</title>
</head>
<body>
    <!-- <img src="../images/buses-2.jpg" alt="buses" height="657" width="1348"> -->
	
    <div class="image">
        <div class="container" style="line-height: 15px;">
            <h2>ADD STUDENT DETAILS</h2> 
            <form action="insert_student_user.php" method='POST'            > 
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
                        <input type="text" class="form-control" id="number" name="number" placeholder="+91-98765-43210">
                        <span id = "usernumber"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group form1">
                        <label for="email">Email id:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="ex-abc@gmail.com">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group form2">
                        <label for="gender">Gender:</label>
                        <input list="idd" class="form-control" id="gender" name="gender" placeholder="Choose your Gender">
                        <datalist id="idd">
                            <option value="Male"> 
                            <option value="Female">
                        </datalist>
                        <span id = "usergender"> </span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group form3">
                        <label for="clg_name">College Name</label>
                        <input type="text" class="form-control" id="college" name="college">
                        <span id = "usercollege"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group form4">
                        <label for="clg_docs">College Document</label>
                        <input style="padding: 4px; border: 1px solid black;" class="form-control" type="file" id="cdoc" name="cdoc">
                        


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="identity_id">Identity Id:</label>
                            <input list="id" class="form-control" id="idtype" name="idtype" placeholder="Choose your Identity">
                                <datalist id="id">
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
                        <label for="identity_name">Identity Number:</label>        
                        <input type="text" class="form-control" id="idnum" name="idnum" placeholder="Enter your Identity Number">
                        <span id = "useriden"></span>
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
                        <input type="text" class="form-control" id="destination" name="destination" placeholder="Enter your Destination">
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
                        <input type="number" class="form-control" id="cost" name="cost" placeholder="Automatic Generated Cost" >
                    </div>
                </div>
                <div class="col">
                    <div class="form-group form1">
                        <label for="image">Profile Image:</label>
                        <input type="file" class="form-control" id="img" name="image" onchange="validateImage()" >
                        <span id = "userimage"></span>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="submit">ADD DETAILS</button>
               
        </div>
    </div>
    </form> 
    
<!-- >>>>>>> 903f69c7f4d69f4b6d33d87696956f6054d255d2:html/Student User.html -->

<script src = "../js/studentuser.js"></script>
</body>
</html>