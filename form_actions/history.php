<?php
require_once('../config/config.php');
require_once('../functions/upload_functions.php');
require_once('../dashboard/function/movie-upload.php');
require_once('../functions/watch_history.php');

$movie_title=$_GET['title'];
$all_movies=get_all_movies();


try {

   $_SESSION['just_watched']=watched_movies($all_movies, $movie_title);

   add_history($_SESSION['just_watched']);

   return header('location:../pages/streaming.php');


} catch (\Exception $e) {
}
