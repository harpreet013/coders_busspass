<?php
include("connect.php");  
  
if($_SERVER['REQUEST_METHOD']== 'POST')//this will tell us what to do if some data has been post through form with button.  
{  
    $username=$_POST['username'];  
    $password=$_POST['password'];  
  
    $admin_query="select * from admin where User_Name='$username' AND Password='$password'";  
  
    $result=mysqli_query($conn,$admin_query);  
  
    if(mysqli_num_rows($result)>0)  
    {  
  
        echo "<script>window.open('admin.php','_self')</script>";  
    }  
    else {echo"<script>alert('Admin Details are incorrect..!')</script>";}  
  
}  
  
?>