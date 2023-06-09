<!doctype html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Spur _ Dashboard</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="https://templates.iqonic.design/streamit/dashboard/html/assets/images/favicon.ico" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="../assets/css/typography.css">
   <!-- Style CSS -->
   <link rel="stylesheet" href="../assets/css/style.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="../assets/css/responsive.css">
      <!-- line awesome -->
      <link rel="stylesheet" href="../assets/1.3.0/css/line-awesome.min.css">
      <!-- font awesome -->
      <link rel="stylesheet" href="../assets/fontawesome-free-6.2.1-web/css/all.min.css">
</head>
<body class="sidebar-main-active right-column-fixed">
   <!-- loader Start -->
   <div id="loading">
      <div id="loading-center">
      </div>
   </div>
   <!-- loader END -->
   <!-- Wrapper Start -->
   <div class="wrapper">
   <!-- header -->
   <?php 
      require_once('header.php');
   ?>
   <!-- Page Content  -->
   <div id="content-page" class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6">
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        <h4 class="card-title">Account Setting</h4>
                     </div>
                  </div>
                  <div class="iq-card-body">
                     <div class="acc-edit">
                        <form>
                           <div class="form-group">
                              <label for="uname">User Name:</label>
                              <input type="text" class="form-control" id="uname" value="Barry@01">
                           </div>
                           <div class="form-group">
                              <label for="email">Email Id:</label>
                              <input type="email" class="form-control" id="email" value="Barryjohn@gmail.com">
                           </div>
                           <div class="form-group">
                              <label for="altemail">Alternate Email:</label>
                              <input type="email" class="form-control" id="altemail" value="designtheme@gmail.com">
                           </div>
                           <div class="form-group">
                              <label class="d-block">Language Known:</label>
                              <div class="custom-control custom-checkbox custom-control-inline">
                                 <input type="checkbox" class="custom-control-input" id="english" checked="">
                                 <label class="custom-control-label" for="english">English</label>
                              </div>
                              <div class="custom-control custom-checkbox custom-control-inline">
                                 <input type="checkbox" class="custom-control-input" id="french" checked="">
                                 <label class="custom-control-label" for="french">French</label>
                              </div>
                              <div class="custom-control custom-checkbox custom-control-inline">
                                 <input type="checkbox" class="custom-control-input" id="hindi">
                                 <label class="custom-control-label" for="hindi">Hindi</label>
                              </div>
                              <div class="custom-control custom-checkbox custom-control-inline">
                                 <input type="checkbox" class="custom-control-input" id="spanish" checked="">
                                 <label class="custom-control-label" for="spanish">Spanish</label>
                              </div>
                              <div class="custom-control custom-checkbox custom-control-inline">
                                 <input type="checkbox" class="custom-control-input" id="arabic">
                                 <label class="custom-control-label" for="arabic">Arabic</label>
                              </div>
                              <div class="custom-control custom-checkbox custom-control-inline">
                                 <input type="checkbox" class="custom-control-input" id="italian">
                                 <label class="custom-control-label" for="italian">Italian</label>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary">Submit</button>
                           <button type="reset" class="btn iq-bg-danger">Cancel</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        <h4 class="card-title">Social Media</h4>
                     </div>
                  </div>
                  <div class="iq-card-body">
                     <div class="acc-edit">
                        <form>
                           <div class="form-group">
                              <label for="facebook">Facebook:</label>
                              <input type="text" class="form-control" id="facebook" value="www.facebook.com">
                           </div>
                           <div class="form-group">
                              <label for="twitter">Twitter:</label>
                              <input type="text" class="form-control" id="twitter" value="www.twitter.com">
                           </div>
                           <div class="form-group">
                              <label for="google">Google +:</label>
                              <input type="text" class="form-control" id="google" value="www.google.com">
                           </div>
                           <div class="form-group">
                              <label for="instagram">Instagram:</label>
                              <input type="text" class="form-control" id="instagram" value="www.instagram.com">
                           </div>
                           <div class="form-group">
                              <label for="youtube">You Tube:</label>
                              <input type="text" class="form-control" id="youtube" value="www.youtube.com">
                           </div>
                           <button type="submit" class="btn btn-primary">Submit</button>
                           <button type="reset" class="btn iq-bg-danger">Cancel</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Wrapper END -->
<!-- Footer -->
<footer class="iq-footer">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6">
            <ul class="list-inline mb-0">
               <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
               <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
            </ul>
         </div>
         <div class="col-lg-6 text-right">
            Copyright 2020 <a href="#">Spur</a> All Rights Reserved.
         </div>
      </div>
   </div>
</footer>
<!-- Footer END -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!-- Appear JavaScript -->
<script src="../assets/js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="../assets/js/countdown.min.js"></script>
<!-- Counterup JavaScript -->
<script src="../assets/js/waypoints.min.js"></script>
<script src="../assets/js/jquery.counterup.min.js"></script>
<!-- Wow JavaScript -->
<script src="../assets/js/wow.min.js"></script>
<!-- Slick JavaScript -->
<script src="../assets/js/slick.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="../assets/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="../assets/js/jquery.magnific-popup.min.js"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="../assets/js/smooth-scrollbar.js"></script>
<!-- Chart Custom JavaScript -->
<script src="../assets/js/chart-custom.js"></script>
<!-- Custom JavaScript -->
<script src="../assets/js/custom.js"></script>
</body>

</html>