<html>
<?php
      include "connect.php";  
      //include "reg_usr.php";
      if($_SERVER['REQUEST_METHOD']== 'POST')
      {      
  $passnum=mt_rand(10, 9999);        
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $number=$_POST['number'];
 $email=$_POST['email'];
 $gender=$_POST['gender'];
 $category=$_POST['category'];
 //$extension = substr($cdoc,strlen($cdoc)-4,strlen($cdoc)); /*$allowed_extensions = array(".jpg","jpeg",".png",".gif"); if(!in_array($extension,$allowed_extensions)) { echo "<script>alert('Profile Pics has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>"; } else
 //{  $dc=md5($image).time().$extension;   move_uploaded_file($_FILES["doc"]["tmp_name"],"cdoc/".$cdoc); }*/
 $idtype=$_POST['idtype'];
 $iddoc=$_POST['iddoc'];
 $source=$_POST['source'];
 $des=$_POST['des'];
 $sdate=$_POST['sdate'];
 $edate=$_POST['edate'];
 $cost=$_POST['cost'];
  $image=$_POST["image"];
 //$extension = substr($image,strlen($image)-4,strlen($image)); $allowed_extensions = array(".jpg","jpeg",".png",".gif"); if(!in_array($extension,$allowed_extensions))
 //{ echo "<script>alert('Profile Pics has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>"; } else {  $image=md5($image).time().$extension;  move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$image) ;}    
  $sql = "INSERT INTO add_pass1(Pass_Number, Fname, Lname, Phone, Email, Gender, Category, Identity_Type, Identity_Document, source, Destination, Start_Date, End_Date, Cost, Profile_Image)
  VALUES ('$passnum','$fname','$lname','$number','$email','$gender','$category','$idtype','$iddoc','$source','$des','$sdate','$edate','$cost','$image')";
  if (mysqli_query($conn, $sql)) {
     echo "New record created successfully !";
  } else {
     echo "Error: " . $sql . "s" . mysqli_error($conn);
  }
}
 
?>
</html>        