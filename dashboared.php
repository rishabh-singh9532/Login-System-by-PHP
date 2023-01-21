
<?php 
session_start();

if (isset( $_SESSION['userNAME'])) {
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <!-- cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Dashboared</title>
</head>
<body>
    <div class="container">
    <div class="icons">
               
                <div id="user-btn" class="fas fa-user"></div>
                
            </div>


    <h1>Hello users     </h1>

    <h1 class="detail"> <?php echo  $_SESSION['userNAME'];?></h1>
    <h1 class="detail"> <?php echo  $_SESSION['useremail'];?></h1>


    <a href="logout.php" class="rbtn">LOGOUT</a>
    </div>
</body>
</html>

<?php



}else{
    header("location:login.php");
}

?>