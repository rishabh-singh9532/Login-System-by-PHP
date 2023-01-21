<?php 


$conn=mysqli_connect("localhost","root","","login");


 $email=$_POST['email'];
 $pass=$_POST['pass'];


 $sql= "SELECT * FROM user WHERE email='$email' and password ='$pass'";

 $query = mysqli_query($conn,$sql);

 if ($query){
    if ($row=mysqli_fetch_array($query)) {
    
        session_start();
       $_SESSION['useremail']=$row['email'];
       $_SESSION['userNAME']=$row['name'];
       
       header("location:dashboared.php");
       echo"success";
    }else{
        echo "incorrect email and password";
    };
 }



?>