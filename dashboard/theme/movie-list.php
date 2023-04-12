<?php
require_once('../../config/config.php');
require_once('../../functions/registration_functions.php');
require_once('../../functions/upload_functions.php');
require_once('../function/movie-upload.php');

if (!isset($_SESSION['status'])) {
   $_SESSION['error'] = 'log in before you can access this page';
   return header('location:log-in.php');
}

$user_id = $_SESSION['status'];
$movies = movie_list();
?>
<!doctype html>
<html lang="en">


<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Spur</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="https://templates.iqonic.design/streamit/dashboard/html/assets/images/favicon.ico" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">
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

<body>
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
               <div class="col-sm-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Movie Lists</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="add-movie.php" class="btn btn-primary">Add movie</a>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-view">
                           <table class="data-tables table movie_table " style="width:100%">
                              <thead>
                                 <tr>
                                    <th>Movie</th>
                                    <th>Quality</th>
                                    <th>Category</th>
                                    <th>Release Year</th>
                                    <th>Language</th>
                                    <th style="width: 20%;">Description</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php foreach ($movies as $key => $value) : ?>
                                    <?php if ($key % 14 == 0) : ?>

                                       <tr>
                                          <td>
                                             <div class="media align-items-center">
                                                <div class="iq-movie">
                                                   <a href="javascript:void(0);"><img src="../../uploads/banners/<?= $movies[$key + 1] ?>" class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                                </div>
                                                <div class="media-body text-white text-left ml-3">
                                                   <p class="mb-0"><?= $movies[$key] ?></p>
                                                   <small><?= $movies[$key + 9] ?></small>
                                                </div>
                                             </div>
                                          </td>
                                          <td><?= $movies[$key + 3] ?></td>
                                          <td><?= $movies[$key + 8] ?></td>
                                          <td><?= $movies[$key + 6] ?></td>
                                          <td><?= $movies[$key + 7] ?></td>
                                          <td>
                                             <p>
                                                <?= $movies[$key + 4] ?>
                                             </p>
                                          </td>
                                          <td>
                                             <div class="flex align-items-center list-user-action">
                                                <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="#"><i class="lar la-eye"></i></a>
                                                <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="las la-edit"></i></a>
                                                <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="las la-trash"></i></a>
                                             </div>
                                          </td>
                                       </tr>
                                    <?php endif; ?>
                                 <?php endforeach; ?>
                              </tbody>
                           </table>
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
   <script src="../assets/js/jquery.dataTables.min.js"></script>
   <script src="../assets/js/dataTables.bootstrap4.min.js"></script>
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