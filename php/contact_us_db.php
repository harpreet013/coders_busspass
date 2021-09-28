<html>
<?php
      include "connect.php";  
      //include "reg_usr.php";
      if($_SERVER['REQUEST_METHOD']== 'POST')
      {      
 
 $number=$_POST['number'];
 $message=$_POST['message'];

  $sql = "INSERT INTO contact_us(Phone_Number, Message)
  VALUES ('$number','$message')";
  if (mysqli_query($conn, $sql)) {
     echo "New record created successfully !";
  } else {
     echo "Error: " . $sql . "s" . mysqli_error($conn);
  }
}
 
?>
</html>        