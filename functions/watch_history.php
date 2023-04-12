<?php
require_once('../config/config.php');
require_once('../dashboard/function/movie-upload.php');

function all_history(){
   $location = '../storage/history.txt';
   $data = [];
   $open = fopen($location, 'r');
   while (($line = fgets($open)) != false) {
      array_push($data, $line);
   }   
   fclose($open);
   return $data;
}

function add_history($a)
{
   $location = '../storage/history.txt';
   $data = [];
   $open = fopen($location, 'a+');
   
   while (($line = fgets($open)) != false) {
      array_push($data, $line);
   }
   foreach ($data as $key => $value) {
      if($key%2==0){
         if(trim($data[$key])==$_SESSION['status']){
            if(trim($data[$key+1])==$a){
               return 'already watched';
            }
         }
      }
   }
   fwrite($open, $_SESSION['status'] . "\n" . trim($a) . "\n");
   fclose($open);
}

//to checked for movies to store in history
function watched_movies($all_movies, $movie_title)
{
   foreach ($all_movies as $key => $value) {
      if ($key % 14 == 0) {
         if (trim($all_movies[$key]) == $movie_title) {
            return $movie_title;
         }
      }
   }
   return header('location:../pages/more info.php');
}


// to get and display a users history
function user_history($histories,$movies){
   $_SESSION['my_history']= [];

   // loop to compare movie name in the history file to that in all movies file
   foreach ($movies as $key => $value) {
      if($key%14==0){
         foreach ($histories as $mov => $value) {
            if($mov%2==0){
               // check if the movie has been watched by the user currently logged in
               if(trim($_SESSION['status'])==trim($histories[$mov])){
                  // if yes, locate the movie in the main movie file
                  if(trim($movies[$key])==trim($histories[$mov+1])){
                     // fetch all details about the movie and story it in a section
                     // the history would be displayed from session
                     for ($i=0; $i<=13; $i++) { 
                        array_push($_SESSION['my_history'],$movies[$key+$i]);
                     }
                  }
               }
            }
         }  
      }
   }

   return $_SESSION['my_history'];
}

