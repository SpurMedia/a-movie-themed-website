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
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>More Info</title>
  <link rel="stylesheet" href="../asset/fontawesome-free-6.2.1-web/css/all.min.css">
  <link rel="stylesheet" href="../asset/bootstrap-5.2.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../asset/css/more info.css">
  <link rel="stylesheet" href="../asset/css/index.css">
  <link rel="stylesheet" href="../asset/css/form.css">
  <link rel="stylesheet" href="../dashboard/assets/1.3.0/css/line-awesome.min.css">
  <link rel="website icon" type="png" href="../asset/img/d6bf94228f18d85c8fdf9e8cf936ec00-removebg-preview (1).png">
  <link rel="stylesheet" href="../asset/css/goback.css">
</head>

<body>
  <?php
  require('header.php');
  ?>

  <?php foreach ($movies as $key => $value) : ?>
    <?php if ($key % 14 == 0) : ?>
      <!-- made a container div to place pervious page button, movie trailer and checkout section  -->
      <div class="d-flex holder">

        <div class="movie-trailer-section">
          <div class="position-absolute alert text-wrap copy" id="liveAlertPlaceholder"></div>
          <div class="back-btn ">
            <button class="bg-transparent text-white" onclick="goback()">
              <i class="fa fa-arrow-left fa-2x"></i>
            </button>
          </div>
          <div class="trailer-box">
            <iframe src="<?= $movies[$key + 10] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>

          <div class="mt-4 p-2 movie-info">
            <div class="d-flex justify-content-between">
              <span class="fs-2 text-white up"> <?= $movies[$key] ?> </span>
              <a href='#' id="copy-button">
                <span> <i class="fs-2 text-white fa fa-share-alt" id="liveAlertBtn"></i> </span>
              </a>
            </div>
            <div class="d-flex cap text-white-50">
              subtitled
              <span class="ms-2 text-white ">•</span>
              <div class="ms-1  text-white-50">
                <span class="ms-1"> <?= $movies[$key + 8] ?> </span>
              </div>
              <span class="ms-2 text-white ">•</span>
              <div class="ms-1  text-white-50">
                <span class="ms-1"> <?= $movies[$key + 6] ?> </span>
              </div>
            </div>
            <div class=" mt-2 d-md-flex ">
              <div class="stars fs-2 cap text-white-50">
                <i class="text-warning la la-star"></i>
                <i class="<?= $movies[$key+2]<=2 ? 'text-mute lar la-star': 'text-warning la la-star' ; ?>"></i>
                <i class="<?= $movies[$key+2]<=4 ? 'text-mute lar la-star': 'text-warning la la-star' ; ?>"></i>
                <i class="<?= $movies[$key+2]<=6 ? 'text-mute lar la-star': 'text-warning la la-star' ; ?>"></i>
                <i class="<?= $movies[$key+2]<=8 ? 'text-mute lar la-star': 'text-warning la la-star' ; ?>"></i>
              </div>
              <div class="mt-2 ps-md-2 ms-md-1 border-start cap figure">
                Average Rating: <span><?= $movies[$key + 2] ?></span>
              </div>

              <div class="ms-2 mt-2 ps-md-2 ms-md-1 border-start cap figure">
                <span class="d-md-none"> •</span>
                <span class='language'> <?= $movies[$key + 7] ?></span>

              </div>
            </div>
            <div class="p-3 row buttons-holder">
              <div id='pla' class="bg-white col-12 col-md-5 play-button up">
                <a class="nav-link" href="../form_actions/history.php?title=<?= $movies[$key] ?>">
                  <span><i class="me-1 fa fa-play"></i></span>
                  <span> start watching </span>
                </a>
              </div>

              <div id="download" class="d-flex ms-md-3  col-12 col-md-5 play-button up">
                <a class="nav-link" href="<?= $movies[$key + 13] ?>" rel="noreferrer" target="_blank" download>
                  <span><i class="me-1 fa fa-download"></i></span>
                  <span> Download</span>
                </a>
              </div>
              <div>
              </div>
            </div>
            <div class="movie-description">
              <?= $movies[$key + 4] ?>
            </div>

          </div>

        </div>

        <div class="extra-info" id="extra-info">
          <div class="img-contain">
            <img src="../uploads/banners/<?= $movies[$key + 1] ?>">
          </div>

          <div class="extra-details w-100 mt-2 ps-md-2 ms-md-1 d-flex justify-content-between figure">
            <div> Download Size: </div>
            <div> <?= $movies[$key + 11] ?> mb </div>
          </div>

          <div class="extra-details w-100 mt-2 ps-md-2 ms-md-1 d-flex justify-content-between figure">
            <div> Video Quality: </div>
            <div> <?= $movies[$key + 3] ?></div>
          </div>

          <div class="extra-details w-100 mt-2 ps-md-2 ms-md-1 d-flex justify-content-between figure">
            <div> Duration: </div>
            <div> <?= $movies[$key + 9] ?> </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
  <?php endforeach; ?>

  <?php
  require('footer.php');
  ?>

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

    const copyButton = document.getElementById("copy-button");

    copyButton.addEventListener("click", () => {
      const currentUrl = window.location.href;
      navigator.clipboard.writeText(currentUrl).then(() => {
        console.log("Link copied to clipboard");
      }, (err) => {
        console.error("Failed to copy text: ", err);
      });
    });


    var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
    var alertTrigger = document.getElementById('liveAlertBtn')

    function alert(message, type) {
      var wrapper = document.createElement('div')
      wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

      alertPlaceholder.append(wrapper)
    }

    if (alertTrigger) {
      alertTrigger.addEventListener('click', function() {
        alert('Link copied successfully!', 'success')
      })
    }
  </script>


  <script src="../asset/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
  <script src="../asset/bootstrap-5.2.3-dist/js/bootstrap.bundle.js"></script>
</body>

</html>