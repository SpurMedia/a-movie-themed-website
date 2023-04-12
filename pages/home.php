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
$data = fetch_all_users();
$movies = get_all_movies();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link rel="stylesheet" href="../asset/fontawesome-free-6.2.1-web/css/all.min.css">
  <link rel="stylesheet" href="../asset/bootstrap-5.2.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../asset/css/index.css">
  <link rel="stylesheet" href="../asset/css/form.css">
  <link rel="stylesheet" href="../dashboard/assets/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="../asset/css/trailer.css">
  <link rel="stylesheet" href="../asset//css/promo.css">
  <link rel="website icon" type="png" href="../asset/img/d6bf94228f18d85c8fdf9e8cf936ec00-removebg-preview (1).png">
</head>

<body>

  <?php
  require('header.php');
  ?>

  <!-- carousel from bootstrap library. will be using it to show trending or newly released films   -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="w-75 carousel-indicators mb-4" id="img-indicators">

      <button class="cbt d-none d-md-block" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class=" d-none d-md-block carousel-control-prev-icon" aria-hidden="true"></span>
      </button>

      <?php $slide = 1; ?>
      <?php $count = 0; ?>
      <?php foreach ($movies as $key => $value) : ?>
        <?php if ($key % 14 == 0) : ?>
          <?php if (trim($movies[$key + 11]) == "yes") : ?>
            <div style="background-image: url('../uploads/sliders/<?= trim($movies[$key + 12]) ?>');" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $count; ?>" class="movie-indicator div-fluid active" 
              <?php if ($count == 0) {echo ' aria-current="true"';} else {  echo '';} ?> aria-label="Slide <?= $slide; ?>"></div>
            <?php $slide++; ?>
            <?php $count++; ?>
          <?php endif; ?>
        <?php endif; ?>
      <?php endforeach; ?>

      <button class="cbt d-none d-md-block carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class=" d-none d-md-block carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>

    <div class="carousel-inner">
      <?php $slide = 1; ?>
      <?php foreach ($movies as $key => $value) : ?>
        <?php if ($key % 14 == 0) : ?>
          <?php if (trim($movies[$key + 11]) == "yes") : ?>
            <div class="movie-carousel carousel-item 
      <?php if ($slide == 1) {
              echo 'active';
            } else {
              echo '';
            } ?>">
              <img src="../uploads/sliders/<?= $movies[$key + 12] ?>" class="d-block w-100" alt="...">
              <div class="w-100 h-100 me-6 movies-infos carousel-caption d-none d-md-block">
                <div class="movie-title text-wrap">
                  <p class="text-wrap"><?= $movies[$key] ?></p>
                </div>
                <div class="movie-details">
                  <div>
                    <span class="rating">
                      <i class="text-warning las la-star"></i>
                      <span class="fw-bold rating-figure fs-6"><?= $movies[$key + 2] ?> </span>
                    </span>
                    <span>|</span>
                    <span class=""> <?= $movies[$key + 7] ?></span>
                  </div>
                  <div class="ms-1 ms-md-5 fs-6">
                    <span class="movie-duration">
                      <?= $movies[$key + 9] ?>
                    </span>
                    <span class="movie-genre">•
                      <?= $movies[$key + 8] ?>
                    </span>
                    <span class="release-year">•
                      <?= $movies[$key + 6] ?>
                    </span>
                  </div>
                </div>
                <div class="text-wrap movie-description d-none d-md-block">
                  <?= $movies[$key + 4] ?>
                </div>
                <div class="trailer-buttons">
                  <div class="button-holder" id="play-button">
                    <a class="movie-buttons" href="../form_actions/movie_info.php?title=<?=$movies[$key]?>"><span>
                        <i class="fa fa-play"></i>
                        <span class="ms-1"> Play Now</span>
                      </span></a>
                  </div>

                  <div class="button-holder" id="trailer-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <a class="movie-buttons" href="../form_actions/movie_info.php?title=<?=$movies[$key]?>"><span>
                        trailer
                      </span></a>
                  </div>
                </div>
              </div>
            </div>

            <?php $slide++; ?>
          <?php endif; ?>
        <?php endif; ?>
      <?php endforeach; ?>

    </div>

  </div>

  <!--Here is where we display all showing movies and time-->
  <div class="titles">
    Trending Now
  </div>

  <!--Movie schedule section-->

    <div class="darkener" id="Top_rated">

    <?php $count = 1; ?>
      <?php foreach ($movies as $key => $value) : ?>
        <?php if ($key % 14 == 0) : ?>
          <?php if (trim($movies[$key + 2]) >= 8) : ?>
      <div class="m-3 ms-lg-0 movie-box position-relative">
      <a href="../form_actions/movie_info.php?title=<?=$movies[$key]?>">
        <div class="img-holder" style="background-image:url('../uploads/banners/<?= trim($movies[$key + 1]) ?>'); 
        background-size:cover; background-position:100%;">
        </div>
      </a>
        <span class="top-count position-absolute top-100 start-0 translate-middle" >
        <?= $count ?> 
      </span>
        <div class="text-holder d-none d-md-block ">
          <div>
          <h4> <?= $movies[$key] ?></h4>
          <span> GENRE: <?= $movies[$key + 8] ?> </span>
          <p> <?= $movies[$key + 4] ?> </p>
          </div>
          <div class="w-100 h-25 button-hold">
         <a class="w-100" href="../form_actions/movie_info.php?title=<?=$movies[$key]?>">
            <button class="w-100" type="button" id="more-info-button">
               More Info
            </button>
         </a>
          </div>
        </div>
      </div>
      <?php if($count==4){break;}?>
      <?php $count++; ?>
          <?php endif; ?>
        <?php endif; ?>
      <?php endforeach; ?>

    </div>


  <!--Promo section-->
  <div class="promo-section">
    <div class="promo_text text-center">
     <p class="fs-1"> Lights, Camera, Stream!</p> 
     <P class="fs-3">Explore endless movies at your fingertips</P>
     <a href="./showing.php" class="mt-2 nav-item"><div> 
      Start Streaming
      <span><i class="ms-1 la la-arrow-right la-lg"></i></span>
    </div></a>
    </div>
  </div>


  <!--- section for upcoming movies-->

  <p class="titles"> Coming Soon </p>

  <div class="upcoming-movies-container">

    <div class="card">
      <img src="../asset/img/2805cfa977e88e72de73e3b2d5621577.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text"> Avater </p>
      </div>
    </div>

    <div class="card">
      <img src="../asset/img/1b80feba67f6667237771e99ffc446a2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text"> Avater </p>
      </div>
    </div>


    <div class="card">
      <img src="../asset/img/download.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text"> Avater </p>
      </div>
    </div>

  </div>

  <?php
  require('footer.php');
  ?>


  <script>
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
<?php
unset(
  $_SESSION['error'],
  $_SESSION['success'],
  $_SESSION['username']
); ?>