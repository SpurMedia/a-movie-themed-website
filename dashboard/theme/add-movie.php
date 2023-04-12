<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Spurm - Dashboard</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="https://templates.iqonic.design/streamit/dashboard/html/assets/images/favicon.ico" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <!--datatable CSS -->
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
                     <?php if (isset($_SESSION['error'])) : ?>
                        <div class="w-100 text-white alert alert-primary d-flex align-items-center" role="alert">
                           <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                              <use xlink:href="#check-circle-fill" />
                           </svg>
                           <div>
                              <?= $_SESSION['error'] ?>
                           </div>
                        </div>
                     <?php endif; ?>

                     <?php if (isset($_SESSION['success'])) : ?>
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                           <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                              <use xlink:href="#check-circle-fill" />
                           </svg>
                           <div>
                              <?= $_SESSION['success'] ?>
                           </div>
                        </div>
                     <?php endif; ?>

                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Add Movie</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <form enctype="multipart/form-data" method="post" action="../form-action/upload-movie.php">
                           <div class="row">
                              <div class="col-lg-7">
                                 <div class="row">
                                    <div class="col-12 form-group">
                                       <input type="text" name="title" class="form-control" placeholder="Title">
                                    </div>
                                    <div class="col-12 form_gallery form-group">
                                       <label id="gallery3" for="form_gallery-upload2">Upload Slider Image</label>
                                       <input data-name="#gallery3" name="slider-img" id="form_gallery-upload2" class="form_gallery-upload" type="file" accept=".png, .jpg, .jpeg">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                       <input type="text" name="rating" class="form-control" placeholder="Rating">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                       <select name="quality" class="form-control" id="exampleFormControlSelect2">
                                          <option disabled="">Choose quality</option>
                                          <option value="FULLHD">FULLHD</option>
                                          <option value="HD">HD</option>
                                       </select>
                                    </div>
                                    <div class="col-12 form-group">
                                       <textarea id="text" name="description" rows="5" class="form-control" placeholder="Description"></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-5">
                                 <div class="d-block position-relative">
                                    <div class="form_video-upload">
                                       <input type="file" name="banner" accept=".png, .jpg, .jpeg" multiple>
                                       <p>Upload Image</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="year" class="form-control" placeholder="Release year">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <select name="language" class="form-control" id="exampleFormControlSelect3">
                                    <option selected disabled="">Choose Language</option>
                                    <option value="english">English</option>
                                    <option value="hindi">Hindi</option>
                                    <option value="French">French</option>
                                 </select>
                              </div>
                              <div class="col-md-6 form-group">
                                 <input type="text" name="genre" class="form-control" placeholder="Movie Genre">
                              </div>
                              <div class="col-md-6 form-group">
                                 <input type="text" name="duration" class="form-control" placeholder="Movie Duration">
                              </div>
                              <div class="col-md-6 form-group">
                                 <input type="text" name="trailer" class="form-control" placeholder="Trailer Link">
                              </div>
                              <div class="col-md-6 form-group">
                                 <input type="text" name="video_link" class="form-control" placeholder="video Link">
                              </div>
                              <div class="col-md-6 form-group">
                                 <input type="text" name="download_link" class="form-control" placeholder="Download Link">
                              </div>
                              <div class="col-md-6 form-group">
                                 <label> Display on slider </label>
                                 <input type="radio" class="rad" name="slider" value="yes"> Yes
                                 <input type="radio" class="rad" name="slider" value="no" checked> No
                              </div>
                              <div class="col-12 form-group ">
                                 <button type="submit" class="btn btn-primary">Submit</button>
                                 <button type="reset" class="btn btn-danger">cancel</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Wrapper END -->

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
   <!-- Select2 JavaScript -->
   <script src="../assets/js/select2.min.js"></script>
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