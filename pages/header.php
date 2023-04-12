<!-- Navbar -->
<nav class="navbar header navbar-expand pe-4 ps-4">
   <div class="container-fluid d-flex">

      <!-- Navbar content at start-->
      <button class="btn d-block d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
         <span> <i class="fas fa-bars fa-xl"></i> </span>
      </button>

      <a class="navbar-brand me-auto" href="../index.php" id="brand"> SPUR </a>
      <div class="d-flex d-none d-md-block me-auto">

         <!-- Navbar content at center-->
         <ul class="navbar-nav  me-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
               <a class="nav-link active" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#Top_rated">Top Rated</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="./showing.php">Showing</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="../form_actions/display_history.php">
                 My History
               </a>
            </li>
         </ul>
      </div>
      <!-- Navbar content at end-->
      <div class="mt-2">
         <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <!--  <li class="d-flex nav-item me-3 search">
               <div class="dropdown dropstart">
                  <button class="btn drop" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> -->
                     <!-- <a class="nav-link" href="#"> <i class="text-white fas fa-search"></i></a> -->
                  <!-- </button>
                  <ul class="dropdown-menu bg-transparent" aria-labelledby="dropdownMenuButton1">
                     <input type="search" class="search-bar">
                  </ul>
               </div>
            </li> --> 
            <!-- <li class="nav-item me-3">
               <a class="nav-link search-icon" href="#"> <i class="fas fa-shopping-cart"></i></a>
            </li> -->

            <!-- profile dropdown -->
            <li class="nav-item nav-profile">
               <div class="dropdown">
                  <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                     <img class="img-fluid profile-img" src="<?= get_profile(); ?>" alt="">
                  </a>

                  <div class=" dropdown-menu bg-transparent" aria-labelledby="dropdownMenuButton1">

                     <div class="profileDrop card">
                        <div class="card-header">
                           <div class="d-flex">
                              <div class="dropdown-profile-holder rounded-circle align-self-center d-flex align-items-center justify-content-center">
                                 <img class="img-fluid dropdown-profile rounded-circle" src="<?= get_profile(); ?>">
                              </div>
                              <div class="ms-3 align-self-center">
                                 <div class="caps fs-6 thick text-wrap username">
                                    <?php foreach ($data as $key => $values) : ?>
                                       <?php if (trim($values) == trim($user_id)) : ?>
                                          <?php if ($key % 4 == 0) : ?>
                                             <?= $data[$key + 1] ?>
                                 </div>
                                 <div class="opacity-75">
                                    <small> <?= $data[$key + 2] ?></small>
                                 <?php endif; ?>
                              <?php endif; ?>
                           <?php endforeach; ?>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="ps-3 p-2 pe-3">
                           <a href="#">
                              <div class="pt-1 pb-1 sel d-flex">
                                 <div class="dropdown-icon-holder">
                                    <i class="fa fa-user"></i>
                                 </div>
                                 <div class="ms-3 thick">
                                    <a href="./profile-edit.php">
                                       Edit Account
                                    </a>
                                 </div>
                              </div>
                           </a>
                        </div>

                        <div class="card-footer pe-3 ps-3 p-2">
                           <a href="../form_actions/logout.php">
                              <div class="pt-1 pb-1 sel d-flex">
                                 <div class="dropdown-icon-holder">
                                    <i class="fa fa-sign-out-alt"></i>
                                 </div>
                                 <div class="ms-3 thick">Log Out</div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
         </ul>
      </div>
   </div>
   </div>
</nav>

<!-- canvas to display options on small screen -->

<div class="offcanvas canvas-bg offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
   <div class="offcanvas-header">
      <p></p>
      <button type="button" class="btn-close text-reset btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
   </div>
   <div class="offcanvas-body">
      <div class="">
         <ul class="navbar-nav  me-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
               <a class="fs-2 nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
               <a class="fs-2 nav-link" href="#Top_rated">Top Rated</a>
            </li>
            <li class="nav-item">
               <a class="fs-2 nav-link" href="../form_actions/display_history.php">
                 My History
               </a>
            </li>
            <li class="nav-item">
               <a class="fs-2 nav-link" href="./showing.php">Showing</a>
            </li>
         </ul>
      </div>
   </div>
</div>
<!-- <script src="../asset/bootstrap-5.2.3-dist/js/bootstrap.bundle.js"></script> -->