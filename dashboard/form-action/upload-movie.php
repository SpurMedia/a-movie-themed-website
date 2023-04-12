<?php
require_once('../function/movie-upload.php');

$movie_title = $_POST['title'];
$rating = $_POST['rating'];
$video_quality = $_POST['quality'];
$movie_description = $_POST['description'];
$year = $_POST['year'];
$genre = $_POST['genre'];
$duration = $_POST['duration'];
$trailer_link = $_POST['trailer'];
$slider=$_POST['slider'];
$video_link = $_POST['video_link'];
$download_link = $_POST['download_link'];
try {
   if($slider!='no'){
      $slider_img = movie_slider();
   }else{
      $slider_img='empty';
   }
   $movie_banner = movie_banner();
   $language = $_POST['language'];

   // prevent users from submitting empty field
   if ($movie_title == "" || $movie_banner == "" || $rating == "" || $video_quality == "" || $movie_description == "" || $video_link==''
        || $video_link=="" || $year=='' || $language=='' || $genre=='' || $duration=='' || $trailer_link=='' || $download_link=='') {
      throw new Exception("Error Processing Request. Input Cannot Be Empty", 1);
   } else {
      // ensure user age is in numeric format
      if (!is_numeric($rating) ) {
         throw new Exception("Rating should be numeric not alphabets", 1);
         if(!is_numeric($year)){
         throw new Exception("Year should be numeric not alphabets", 1);
         }
      } else {

         store_movie_info(
            $movie_title,
            $movie_banner,
            $rating,
            $video_quality,
            $movie_description,
            $video_link,
            $year,
            $language,
            $genre,
            $duration,
            $trailer_link,
            $slider,
            $slider_img,
            $download_link
         );
         $_SESSION['Success'] = 'Movie Successfully uploaded';
         return header('location:../theme/add-movie.php');
      }
   }
} catch (Exception $e) {
   $_SESSION['error'] = $e->getMessage();
   return header('location:../theme/add-movie.php');
}
