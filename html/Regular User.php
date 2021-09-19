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
    <link rel="stylesheet" href="../css/regular.css">
    <title>REGULAR USER BUS PASS</title>
</head>
<body>
    <img src="../images/buses-2.jpg" alt="buses" height="657" width="1348">
    <div class="container" style="line-height: 15px;">
        <h2>ADD REGULAR USER DETAILS</h2>  
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your First name">
                </div>
            </div>
            <div class="col">
                <div class="form-group form1">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your Last name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="phone">Mobile Number:</label>
                    <input type="tel" class="form-control" id="number" name="number" placeholder="1234567890">
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
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <input list="idd" class="form-control" id="gender" name="gender" placeholder="Choose your Gender">
                    <datalist id="idd">
                        <option value="Male"> 
                        <option value="Female"> 
                        <option value="Other"> 
                    </datalist>
                </div>
            </div>
            <div class="col">
                <div class="form-group form1">
                    <label for="identity_name">Category:</label>        
                    <input list="iddd" class="form-control" id="category" name="category" placeholder="Choose bus category">
                            <datalist id="iddd">
                                <option value="AC Bus"></option>
                                <option value="Non AC Bus"></option>
                                <option value="Volvo Bus"></option>
                            </datalist>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="identity_id">Identity Id:</label>
                        <input list="id" class="form-control" id="identity_id" name="identity_id" placeholder="Choose your Identity">
                            <datalist id="id">
                                <option value="AAdhar Card"> 
                                <option value="Voter Card"> 
                                <option value="Paasport"> 
                                <option value="Ration Card"> 
                                <option value="Driving License">  
                            </datalist>
                </div>
            </div>
            <div class="col">
                <div class="form-group form1">
                    <label for="identity_name">Identity Name:</label>        
                    <input type="text" class="form-control" id="identity_name" name="identity_name" placeholder="Enter your Identity Number">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="source">Source:</label>
                    <input type="text" class="form-control" id="source" name="source" placeholder="Enter your Source">
                </div>
            </div>
            <div class="col">
                <div class="form-group form1">
                    <label for="destination">Destination:</label>
                    <input type="text" class="form-control" id="destination" name="destination" placeholder="Enter your Destination">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="from_date">From Date:</label>
                    <input type="date" class="form-control" id="from_date" name="from_date">
                </div>
            </div>
            <div class="col">
                <div class="form-group form1">
                    <label for="to_date">To Date:</label>
                    <input type="date" class="form-control" id="to_date" name="to_date">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="cost">Cost:</label>
                    <input type="number" class="form-control" id="cost" name="cost" placeholder="Automatic Generated Cost" disabled>
                </div>
            </div>
            <div class="col">
                <div class="form-group form1">
                    <label for="image">Profile Image:</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" id="submit">ADD DETAILS</button>
    </div>
</body>
</html>