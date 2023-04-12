<?php
require_once('../config/config.php');
require_once('../functions/registration_functions.php');
require_once('../functions/upload_functions.php');

if (!isset($_SESSION['status'])) {
   $_SESSION['error'] = 'log in before you can access this page';
   return header('location:log-in.php');
}

$user_id = $_SESSION['status'];
$data=fetch_all_users();
?>
<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Profile Edit</title>
   <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../asset/bootstrap-5.2.3-dist/css/bootstrap.min.css">
  <!-- Typography CSS -->
   <link rel="stylesheet" href="/dashboard/assets/css/typography.css">
   <!-- Style CSS -->
   <link rel="stylesheet" href="/dashboard/assets/css/style.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="/dashboard/assets/css/responsive.css">
   <!-- line awesome -->
   <link rel="stylesheet" href="/dashboard/assets/1.3.0/css/line-awesome.min.css">
   <!-- font awesome -->
   <link rel="stylesheet" href="/dashboard/assets/fontawesome-free-6.2.1-web/css/all.min.css">
   <!-- main css -->
   <link rel="stylesheet" href="../asset/css/index.css">
   <link rel="stylesheet" href="../asset/css/form.css">
   <!-- special -->
   <link rel="stylesheet" href="../asset/css/special.css">
</head>
<body>

<?php
   require_once('header.php');
?>

   <!-- Wrapper Start -->
   <div class="wrapper top">
   <?php if (isset($_SESSION['error'])) : ?>
   <div class="text-white alert alert-primary d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
      <?=$_SESSION['error']?>
  </div>
</div>
 <?php endif; ?>

 <?php if (isset($_SESSION['success'])) : ?>
<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
  <?=$_SESSION['success']?>
  </div>
</div>
 <?php endif; ?>

      <!-- Page Content  -->
      <div class="mt-6">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="iq-card">
                     <div class="iq-card-body p-0">
                        <div class="iq-edit-list">
                           <ul class="iq-edit-profile d-flex nav nav-pills">
                              <li class="col-12 col-md-6 p-0">
                                 <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                    Personal Information
                                 </a>
                              </li>
                              <li class="col-12 col-md-6 p-0">
                                 <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                    Change Password
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-edit-list-data">
                     <div class="tab-content">
                        <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Personal Information</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <form enctype="multipart/form-data" action="../form_actions/profile_edit.php" method="post">
                                    <div class="form-group row align-items-center">
                                       <div class="col-md-12">
                                          <div class="position-relative profile-img-edit">
                                             <img class="profile-pic" src="<?= get_profile(); ?>" alt="profile-pic">
                                             <div class="p-image bg-primary p-1">
                                             <label class="text-white" for="edit" >  
                                             <i class="las la-edit upload-button"></i>
                                             </label>
                                                <input name="profile" id="edit" class="to" type="file">
                                             </div> 
                                          </div>
                                       </div>
                                    </div>
                                    <div class=" row align-items-center">
                                       <div class="form-group col-sm-6">
                                          <label for="fname">First Name:</label>
                                          <input type="text" name="fname" class="form-control" 
                                          id="fname" value="<?= display_profile_info(1) ?>">
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label for="lname">Last Name:</label>
                                          <input type="text" class="form-control" name="lname" 
                                          id="lname" value="<?= display_profile_info(2) ?>">
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label for="uname">User Name:</label>
                                          <?php foreach ($data as $key => $values) : ?>
                                          <?php if (trim($values) == trim($user_id)) : ?>
                                          <?php if ($key % 4 == 0) : ?>
                                          <input type="text" class="form-control" 
                                           name="uname" id="uname" value="<?= $data[$key+1] ?>">
                                          <?php endif; ?>
                                          <?php endif; ?>
                                          <?php endforeach; ?>
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label for="age">Age:</label>
                                          <input type="text" class="form-control" name="age" 
                                           value="<?=display_profile_info(5)?>" id="age">
                                       </div>
                                        <div class="form-group col-sm-6">
                                          <label class="d-block">Gender:</label>
                                          <div class="custom-control custom-radio custom-control-inline">
                                             <input type="radio" value="male" id="male" name="gender" 
                                             <?php if(display_profile_info(6)==null)
                                             {
                                                echo '';
                                             }else{
                                                if(trim(display_profile_info(6))=='male'){
                                                   echo 'checked';
                                                }
                                             }
                                             ?>
                                             class="radio custom-control-input">
                                             <label class="custom-control-label" for="male"> Male </label>
                                          </div>
                                          <div class="custom-control custom-radio custom-control-inline">
                                             <input type="radio" value="female" id="female" name="gender"
                                             <?php if(display_profile_info(6)==null)
                                             {
                                                echo '';
                                             }else{
                                                if(trim(display_profile_info(6))=='female'){
                                                   echo 'checked';
                                                }
                                             }
                                             ?>  class="radio custom-control-input">
                                             <label class="custom-control-label" for="female"> Female </label>
                                          </div>
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label for="email">Email</label>
                                          <?php foreach ($data as $key => $values) : ?>
                                          <?php if (trim($values) == trim($user_id)) : ?>
                                          <?php if ($key % 4 == 0) : ?>
                                          <input class="form-control date-input basicFlatpickr" type="text" 
                                          id="email" name="email" value="<?=$data[$key+2];?>">
                                          <?php endif; ?>
                                          <?php endif; ?>
                                          <?php endforeach; ?>
                                       </div>
                                    </div>
                                    <button type="submit" class="btn text-white sub t mr-2">Submit</button>
                                    <button type="reset" class="btn iq-bg-danger t">Cancel</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Change Password</h4>
                                 </div>
                              </div>

                              <div class="iq-card-body">
                                 <form method="POST" action="../form_actions/change-password.php">
                                    <div class="form-group">
                                       <label for="current_pass">Current Password:</label>
                                       <a href="" class="forgot float-right">Forgot Password</a>
                                       <input type="Password" name="current_password"
                                       class="form-control" id="current_pass" value="">
                                    </div>
                                    <div class="form-group">
                                       <label for="new_pass">New Password:</label>
                                       <input type="password" name="new_password1"
                                       class="form-control" id="new_pass" value="">
                                    </div>
                                    <div class="form-group">
                                       <label for="verify_pass">Verify Password:</label>
                                       <input type="password" name="new_password2"
                                       class="form-control" id="verify_pass" value="">
                                    </div>
                                    <button type="submit" class="btn sub text-white t mr-2">Submit</button>
                                    <button type="reset" class="btn iq-bg-danger t">Cancel</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="preloader">
    <div class="circle"></div>
  </div>

   <!-- Wrapper END -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="/dashboard/assets/js/jquery.min.js"></script>
      <script src="/dashboard/assets/js/bootstrap.min.js"></script>
      <script src="../asset/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script> 
      <script src="../asset/bootstrap-5.2.3-dist/js/bootstrap.bundle.js"></script>
      <script>
    window.addEventListener("load", function () {
      var preloader = document.querySelector(".preloader");
      preloader.style.display = "none";
    });

    window.addEventListener("beforeunload", function () {
      var preloader = document.querySelector(".preloader");
      preloader.style.display = "block";
    });


    var header = document.querySelector(".header");

    window.onscroll = function () {
      if (window.pageYOffset > 100) {
        header.classList.add("header-scrolled");
      } else {
        header.classList.remove("header-scrolled");
      }
    };
  </script>
</body>

</html>
<?php
unset(
   $_SESSION['error'],
   $_SESSION['success']
);
?>