<!doctype html>
<html lang="en">
   
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Streamit - Responsive Bootstrap 4 Admin Dashboard Template</title>
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
                              <h4 class="card-title">Rating Lists</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <table class="data-tables table movie_table" style="width:100%">
                                 <thead>
                                    <tr>
                                       <th style="width: 5%;">No</th>
                                       <th style="width: 5%;">Category</th>
                                       <th style="width: 15%;">Name</th>
                                       <th style="width: 30%;">Description</th>
                                       <th style="width: 15%;">Release Date</th>
                                       <th style="width: 10%;">Rating</th>
                                       <th style="width: 10%;">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>
                                          Movie
                                       </td>
                                       <td><p>Man of Street</p></td>
                                       <td>
                                          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</p>
                                       </td>
                                       <td>
                                          2017
                                       </td>
                                       <td><i class="las la-star text-primary mr-2"></i> 9.2</td>
                                       <td>
                                          <div class="flex align-items-center list-user-action">
                                             <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                             data-original-title="View" href="#"><i class="lar la-eye"></i></a>
                                             <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                   class="las la-edit"></i></a>
                                             <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i
                                                   class="las la-trash"></i></a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                       <td>
                                          Show
                                       </td>
                                       <td><p>Cursed</p></td>
                                       <td>
                                          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</p>
                                       </td>
                                       <td>
                                          2012
                                       </td>
                                       <td><i class="las la-star text-primary mr-2"></i> 8.5</td>
                                       <td>
                                          <div class="flex align-items-center list-user-action">
                                             <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                             data-original-title="View" href="#"><i class="lar la-eye"></i></a>
                                             <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                   class="las la-edit"></i></a>
                                             <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i
                                                   class="las la-trash"></i></a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>3</td>
                                       <td>
                                          Movie
                                       </td>
                                       <td><p>Veronica</p></td>
                                       <td>
                                          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</p>
                                       </td>
                                       <td>
                                          2018
                                       </td>
                                       <td><i class="las la-star text-primary mr-2"></i> 7.0</td>
                                       <td>
                                          <div class="flex align-items-center list-user-action">
                                             <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                             data-original-title="View" href="#"><i class="lar la-eye"></i></a>
                                             <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                   class="las la-edit"></i></a>
                                             <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i
                                                   class="las la-trash"></i></a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>4</td>
                                       <td>
                                          Movie
                                       </td>
                                       <td><p>Troll Hunters</p></td>
                                       <td>
                                          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</p>
                                       </td>
                                       <td>
                                          2020
                                       </td>
                                       <td><i class="las la-star text-primary mr-2"></i> 9.5</td>
                                       <td>
                                          <div class="flex align-items-center list-user-action">
                                             <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                             data-original-title="View" href="#"><i class="lar la-eye"></i></a>
                                             <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                   class="las la-edit"></i></a>
                                             <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i
                                                   class="las la-trash"></i></a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>5</td>
                                       <td>
                                          Show
                                       </td>
                                       <td><p>Gran Torino</p></td>
                                       <td>
                                          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</p>
                                       </td>
                                       <td>
                                          2019
                                       </td>
                                       <td><i class="las la-star text-primary mr-2"></i> 7.5</td>
                                       <td>
                                          <div class="flex align-items-center list-user-action">
                                             <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                             data-original-title="View" href="#"><i class="lar la-eye"></i></a>
                                             <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                   class="las la-edit"></i></a>
                                             <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i
                                                   class="las la-trash"></i></a>
                                          </div>
                                       </td>
                                    </tr>
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