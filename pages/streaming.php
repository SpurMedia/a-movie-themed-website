<?php
require_once('../config/config.php');
require_once('../functions/registration_functions.php');
require_once('../functions/upload_functions.php');

if (!isset($_SESSION['status'])) {
  $_SESSION['error'] = 'log in before you can access this page';
  return header('location:log-in.php');
}

$user_id = $_SESSION['status'];
$data = fetch_all_users();
$movies = $_SESSION['movie_description'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Streaming</title>
  <link rel="stylesheet" href="../asset/bootstrap-5.2.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../asset/css/index.css">
  <link rel="stylesheet" href="../asset/css/form.css">
  <link rel="stylesheet" href="../asset/css/streaming.css">
  <link rel="stylesheet" href="../asset/fontawesome-free-6.2.1-web/css/all.min.css">
  <link rel="stylesheet" href="../asset/css/goback.css">
</head>

<body>
  <?php
  require_once('header.php')
  ?>

  <div class="back-btn ">
    <button class="bg-transparent text-white" onclick="goback()">
      <i class="fa fa-arrow-left fa-lg"></i>
    </button>
  </div>

  <div class='body container'>
    <?php foreach ($movies as $key => $value) : ?>
      <?php if ($key % 14 == 0) : ?>
        <video controls loop style="height:500px; width:900px;">
          <source type="video/mp4" src="<?= $movies[$key + 5] ?>">
        </video>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>





  <script>
    function goback() {
      window.history.back();
    }

    window.addEventListener("load", function() {
      var preloader = document.querySelector(".preloader");
      preloader.style.display = "none";
    });

    window.addEventListener("beforeunload", function() {
      var preloader = document.querySelector(".preloader");
      preloader.style.display = "block";
    });


    var header = document.querySelector(".header");

    window.onscroll = function() {
      if (window.pageYOffset > 100) {
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