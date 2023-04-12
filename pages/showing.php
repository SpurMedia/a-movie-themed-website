<?php
require_once('../config/config.php');
require_once('../functions/registration_functions.php');
require_once('../functions/upload_functions.php');
require_once('../dashboard/function/movie-upload.php');

if (!isset($_SESSION['status'])) {
   $_SESSION['error'] = 'log in before you can access this page';
   return header('location:log-in.php');
}

$user_id = $_SESSION['status'];
$data=fetch_all_users();
$movies=get_all_movies();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Showing</title>
   <link rel="stylesheet" href="../asset/fontawesome-free-6.2.1-web/css/all.min.css">
   <link rel="stylesheet" href="../asset/bootstrap-5.2.3-dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="../asset/css/index.css">
   <link rel="stylesheet" href="../asset/css/form.css">
   <link rel="stylesheet" href="../asset/css/movie.css">
   <link rel="stylesheet" href="../dashboard/assets/1.3.0/css/line-awesome.min.css">
</head>
<body>
   
<?php
  require('header.php');
?>

   

<!-- Wrapper -->
<div class="wrapper head">

<?php foreach($movies as $key=>$value): ?>
   <?php if($key%14 == 0):?>
      <div class="movie-card">
   <a href="../form_actions/movie_info.php?title=<?=$movies[$key]?>">
         <div class="movie-header" style="background-image:url(../uploads/banners/<?=$movies[$key+1]?>);">
            <div class="header-icon-container">
                  <i class="fa fa-play header-icon"></i>
            </div>
         </div><!--movie-header-->
         <div class="movie-content">
            <div class="movie-content-header">
                  <h3 class="movie-title"><?=$movies[$key]?></h3>
            </div>
            <div class="movie-info">
               <div class="info-section">
                  <label>Rating</label>
                  <span>Genre</span>
               </div><!--date,time-->
               <div class="info-section te">
                  <label>
                  <?=$movies[$key+2]?> 
                     <i class="text-warning la la-star la-lg"></i>
                     <i class="<?= $movies[$key+2]<=2 ? 'text-mute lar la-star': 'text-warning la la-star' ; ?> la-lg"></i>
                     <i class="<?= $movies[$key+2]<=4 ? 'text-mute lar la-star': 'text-warning la la-star' ; ?> la-lg"></i>
                     <i class="<?= $movies[$key+2]<=6 ? 'text-mute lar la-star': 'text-warning la la-star' ; ?> la-lg"></i>
                     <i class="<?= $movies[$key+2]<=8 ? 'text-mute lar la-star': 'text-warning la la-star' ; ?> la-lg"></i>
                  </label>
                  <span><?=$movies[$key+8]?></span>
               </div><!--screen-->
            </div>
         </div><!--movie-content-->
      </a>
      </div><!--movie-card-->
      <?php endif ;?>
      <?php endforeach; ?>


   </div><!--wrapper-->

   <?php
   require_once('footer.php');
  ?>


  
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
      if (window.pageYOffset > 50) {
        header.classList.add("header-scrolled");
      } else {
        header.classList.remove("header-scrolled");
      }
    };
  </script>

<script src="../asset/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script> 
<script src="../asset/bootstrap-5.2.3-dist/js/bootstrap.bundle.js"></script>

</body>
</html>