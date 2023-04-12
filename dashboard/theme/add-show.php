<!doctype html>
<html lang="en">


<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Spur - Dashboard</title>
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
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Add Show</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <form action="">
                           <div class="row">
                              <div class="col-md-6 form-group">
                                 <input type="text" class="form-control" placeholder="Title">
                              </div>
                              <div class="col-md-6 form-group">
                                 <select class="form-control" id="exampleFormControlSelect1">
                                    <option selected disabled="">Choose Language</option>
                                    <option>English</option>
                                    <option>Hindi</option>
                                    <option>Tamil</option>
                                    <option>Gujarati</option>
                                 </select>                                 
                              </div>
                              <div class="col-md-6 form-group">
                                 <select class="form-control" id="exampleFormControlSelect2">
                                    <option selected disabled="">Show Category</option>
                                    <option>Comedy</option>
                                    <option>Crime</option>
                                    <option>Drama</option>
                                    <option>Horror</option>
                                    <option>Romance</option>
                                 </select>
                              </div>
                              <div class="col-md-6 form-group">
                                 <select class="form-control" id="exampleFormControlSelect3">
                                    <option selected disabled="">Choose quality</option>
                                    <option>Full HD</option>
                                    <option>HD</option>
                                 </select>
                              </div>
                              <div class="col-md-6 form_gallery form-group">
                                 <label id="gallery2" for="form_gallery-upload">Upload Image</label>
                                 <input data-name="#gallery2" id="form_gallery-upload" name="gallery"
                                    class="form_gallery-upload" type="file" accept=".png, .jpg, .jpeg">
                              </div>
                              <div class="col-md-6 form_gallery form-group">
                                 <label id="gallery3" for="show2">Upload Show Banner</label>
                                 <input data-name="#gallery3" id="show2" name="gallery" class="form_gallery-upload"
                                    type="file" accept=".png, .jpg, .jpeg">
                              </div>
                              <div class="col-12 form-group">
                                 <textarea id="text1" name="text" rows="5" class="form-control"
                                    placeholder="Description"></textarea>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12">
                                 <h5 class="text-white mb-3">Add Seasons</h5>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-7">
                                 <div class="row">
                                    <div class="col-md-6 form-group">
                                       <select class="form-control" id="exampleFormControlSelect5">
                                          <option disabled="">Select Seasons</option>
                                          <option>Season 1</option>
                                          <option>Season 2</option>
                                          <option>Season 3</option>
                                          <option>Season 4</option>
                                          <option>Season 5</option>
                                       </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                       <input type="text" class="form-control" placeholder="Episode No.">
                                    </div>
                                    <div class="col-md-6 form-group">
                                       <input type="text" class="form-control" placeholder="Episode Name">
                                    </div>
                                    <div class="col-md-6 form_gallery form-group">
                                       <label id="gallery4" for="show3">Upload Image</label>
                                       <input data-name="#gallery4" id="show3" name="gallery"
                                          class="form_gallery-upload" type="file" accept=".png, .jpg, .jpeg">
                                    </div>
                                    <div class="col-md-6 form-group">
                                       <input type="text" class="form-control" placeholder="Running Time in Minutes">
                                    </div>
                                    <div class="col-md-6 form-group">
                                       <input class="form-control date-input basicFlatpickr" type="text"
                                          placeholder="Selete Date">
                                    </div>
                                    <div class="col-12 form-group">
                                       <textarea id="text" name="text" rows="5" class="form-control"
                                          placeholder="Description"></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-5">
                                 <div class="d-block position-relative">
                                    <div class="form_video-upload">
                                       <input type="file" accept="video/mp4,video/x-m4v,video/*" multiple>
                                       <p>Upload video</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12 form-group">
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
   <!-- Flatpickr JavaScript -->
   <script src="../assets/js/flatpickr.min.js"></script>
   <!-- Custom JavaScript -->
   <script src="../assets/js/custom.js"></script>
</body>

</html>