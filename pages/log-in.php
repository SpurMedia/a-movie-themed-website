<?php
require_once('../config/config.php');

if (isset($_SESSION['status'])) {
  $_SESSION['error'] = 'you are already logged in';
  return header('location:home.php');
}
?>
<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Sign IN</title>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../dashboard/assets/css/bootstrap.min.css">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="../dashboard/assets/css/typography.css">
   <!-- Style CSS -->
   <link rel="stylesheet" href="../dashboard/assets/css/style.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="../dashboard/assets/css/responsive.css">
   <!-- line awesome -->
   <link rel="stylesheet" href="../dashboard/assets/1.3.0/css/line-awesome.min.css">
   <!-- font awesome -->
   <link rel="stylesheet" href="../dashboard/assets/fontawesome-free-6.2.1-web/css/all.min.css">
</head>

<body>
   <!-- loader Start -->
   <div id="loading">
      <div id="loading-center">
      </div>
   </div>
   <!-- loader END -->
   <!-- Sign in Start -->
   <section class="sign-in-page">
      <div class="container">
         <div class="row justify-content-center align-items-center height-self-center">
            <div class="col-lg-5 col-md-12 align-self-center form-padding">
               <div class="sign-user_card ">
                  <div class="sign-in-page-data">
                     <div class="sign-in-from w-100 m-auto">
                        <h3 class="mb-3 text-center">Log In</h3>
                        <?php if (isset($_SESSION['error'])) : ?>
                        <p class="text-center text-primary">
                        
                              <?= $_SESSION['error'] ?>
                           
                        </p>
                        <?php endif; ?>

                        <?php if (isset($_SESSION['success'])) : ?>
                        <p class="text-center text-success">
                           
                              <?= $_SESSION['success'] ?>
                           
                        </p>
                        <?php endif; ?>

                        <form method="POST" action="../form_actions/log-in.php" role="form" class="mt-4">
                           <div class="form-group">
                              <input type="text" name="username"  value="<? echo isset($_SESSION["username"]) ? $_SESSION["username"] : ''; ?>"
                              class="form-control mb-0" placeholder="Enter Username" required>
                           </div>
                           <div class="form-group">
                              <input type="password" name="password" class="form-control mb-0" placeholder="Password"
                                 required>
                           </div>
                           <div class="sign-info">
                              <button type="submit" class="w-100 btn btn-primary">Sign in</button>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="mt-3">
                     <div class="d-flex justify-content-center links">
                        Don't have an account? <a href="sign-up.php" class="text-primary ml-2">Sign Up</a>
                     </div>
                     <div class="d-flex justify-content-center links">
                        <a href="#gud" class="f-link">Forgot your password?</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Sign in END -->
         <!-- color-customizer -->
      </div>
   </section>
   <!-- Sign in END -->
   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="../dashboard/assets/js/jquery.min.js"></script>
   <script src="../dashboard/assets/js/popper.min.js"></script>
   <script src="../dashboard/assets/js/bootstrap.min.js"></script>
   <!-- Appear JavaScript -->
   <script src="../dashboard/assets/js/jquery.appear.js"></script>
   <!-- Countdown JavaScript -->
   <script src="../dashboard/assets/js/countdown.min.js"></script>
   <!-- Counterup JavaScript -->
   <script src="../dashboard/assets/js/waypoints.min.js"></script>
   <script src="../dashboard/assets/js/jquery.counterup.min.js"></script>
   <!-- Wow JavaScript -->
   <script src="../dashboard/assets/js/wow.min.js"></script>
   <!-- Slick JavaScript -->
   <script src="../dashboard/assets/js/slick.min.js"></script>
   <!-- Owl Carousel JavaScript -->
   <script src="../dashboard/assets/js/owl.carousel.min.js"></script>
   <!-- Magnific Popup JavaScript -->
   <script src="../dashboard/assets/js/jquery.magnific-popup.min.js"></script>
   <!-- Smooth Scrollbar JavaScript -->
   <script src="../dashboard/assets/js/smooth-scrollbar.js"></script>
   <!-- Chart Custom JavaScript -->
   <script src="../dashboard/assets/js/chart-custom.js"></script>
   <!-- Custom JavaScript -->
   <script src="../dashboard/assets/js/custom.js"></script>
</body>

</html>
<?php
unset(
  $_SESSION['error'],
  $_SESSION['success'],
  $_SESSION['username']
);
?>