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
    <h1>Registration Form</h1>
        <form action="submit.php" method="POST">
               <input type="text" name="name" placeholder="Enter your name" class="box" required> <br>
               <input type="email" name="email" placeholder="Enter your email" class="box" required><br>
               <input type="password" name="pass" placeholder="Enter your password"  required><br>
            <button class="btn">Submit</button>
             









        </form>
       

       <p>Already Register? <a href="login.php">Click Here</a> </p>



     </div>
    
</body>
</html>