<?php
require_once('../config/config.php');
require_once('../functions/upload_functions.php');
require_once('../dashboard/function/movie-upload.php');
require_once('../functions/watch_history.php');



   $histories=all_history();
   $movies=get_all_movies();

   user_history($histories,$movies);
   
   
 return header('location:../pages/history.php');