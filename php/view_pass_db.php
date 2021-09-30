<?php
include_once "connect.php";
//$passnumber=$_POST['passnumber'];
$number=$_POST['number'];

$sql = "SELECT Id, Pass_Number, Fname, Lname, Phone, Email, Gender, Category, Identity_Type, Source, Destination,
Start_Date, End_Date,Cost, Profile_Image FROM add_pass1 WHERE  Phone='$number'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Id : " . $row["Id"]. " - Pass_Name : " . $row["Pass_Number"]. " -Fname :" . $row["Fname"]. "<br>";
    echo "Phone : " . $row["Phone"]. " - Email : " . $row["Email"]. " -Gender : " . $row["Gender"]. "<br>";
    echo "Caterogy : " . $row["Category"]. " - Identity_Type : " . $row["Identity_Type"]. " -Source " . $row["Source"]. "<br>";
    echo "Destination : " . $row["Destination"]. " - Start_Date : " . $row["Start_Date"]. " -End_Date :" . $row["End_Date"]. "<br>";
    echo "Cost : " . $row["Cost"]. " - Image: " . $row["Profile_Image"]."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>