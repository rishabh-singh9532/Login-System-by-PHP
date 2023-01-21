<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration form</title>
</head>
<body>

     <div class="container">
        <h1>login Form</h1>
        <form action="verify.php" method="POST">
         
           
            <input type="email" name="email" placeholder="Enter your email" required><br>
          
            <input type="password" name="pass" placeholder="Enter your password" required><br>
            <button class="btn">Submit</button>









        </form>

        <p>Not  Register? <a href="regform.php">Click Here</a> </p>



     </div>
     <?php 
     
      if(isset($_GET['reg'])){


        if($_GET['reg']==1){

            echo "<script>alert('registration successfull please login')</script>";
        }
      }
     
     
     ?>
    
</body>
</html>