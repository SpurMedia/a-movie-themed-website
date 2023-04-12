<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Forgot Password  </title>
    <link rel="stylesheet" href="../asset/css/forgot password.css">
    <link rel="stylesheet" href="../asset/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="website icon" type="png" href="../asset/img/d6bf94228f18d85c8fdf9e8cf936ec00-removebg-preview (1).png"> 
    <link rel="stylesheet" href="../asset/bootstrap-5.2.3-dist/css/bootstrap.min.css">
</head>

<body>

    <!-- i place all element in a single div which i called the holder-->
    <div class="holder">

        <!--- this is the form div,it contains the guide on how users can recover their password 
        and an input box for emails -->

        <div class="form">
        
            <!--- here you can edit to the information you want to pass across to he users, on how they can 
            recover their password-->
            <div class="guide">
                <p> 
                    Input your email in the field below. A reset password link would be sent to you via mail.
                </p>
            </div>
        
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              
            
            <div class="next">
                <button type="button"> Next </button>    
            </div>

        </div>

    </div>

    <div class="preloader">
        <div class="circle"></div>
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
    

    <script src="../asset/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>

</body>

</html>