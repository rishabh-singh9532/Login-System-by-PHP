<?php


$conn=mysqli_connect("localhost","root","","login");

 $name=$_POST['name'];
 $email=$_POST['email'];
 $pass=$_POST['pass'];


 $sql="INSERT INTO user(id,name,email,password) VALUES(NULL,'$name','$email','$pass')";

 $query =mysqli_query($conn,$sql);

 if ($query){
    echo "registration succesfull";
    header("location:login.php?reg=1");
 }else{
    echo "something went wrong";
 }




?>