<?php
require_once('../config/config.php');
require_once('../functions/registration_functions.php');
require_once('../functions/upload_functions.php');
require_once('../dashboard/function/movie-upload.php');


$movie_title=$_GET['title'];
$all_movies=get_all_movies();


try {
   
   fetch_specific_movie($all_movies,$movie_title);

   $_SESSION['movie_description']=fetch_specific_movie($all_movies,$movie_title);

   return header('location:../pages/more info.php');  
} catch (\Exception $e) {
}
