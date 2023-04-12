<?php
require_once('../config/config.php');

if (!isset($_SESSION['status'])) {
   $_SESSION['error'] = 'log in before you can access this page';
   return header('location:log-in.php');
}

$user_id = $_SESSION['status'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="../asset/css/successful.css">
    <link rel="stylesheet" href="../asset/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="website icon" type="png" href="../asset/img/d6bf94228f18d85c8fdf9e8cf936ec00-removebg-preview (1).png">
</head>
<body>
    <div class="wraper">
 
     <div class="confrim-wraper">

        <div class="circle">

            <div class="short-thick"></div>       
            <div class="long-thick"></div>
            
        </div>
        
     </div>

     <div class="text-container">

        <div class="text"> Ticket booked successfully </div>

        <a href="./home.php"><button type="button" class="button"> Back To Home </button></a>

     </div>

     
    </div>
    <div class="preloader">
        <div class="circle1"></div>
      </div>
      
    
    <script>
      window.addEventListener("load", function(){
        var preloader = document.querySelector(".preloader");
        preloader.style.display = "none";
      });
      
      window.addEventListener("beforeunload", function(){
        var preloader = document.querySelector(".preloader");
        preloader.style.display = "block";
      });
    </script>  
    

</body>
</html>