<?php

function movie_banner()
{
   // file name
   $name = $_FILES['banner']['name'];
   // temporary name on server 
   $tmp_name = $_FILES['banner']['tmp_name'];
   // file size
   $size = $_FILES['banner']['size'];
   // file type
   $type = $_FILES['banner']['type'];
   // the type of image i want to accept
   $allowed_format = ['jpeg', 'png'];
   // modify file type
   $file_type = explode('/', $type);
   // location of which i want to place the uploaded files 
   $location = "../../uploads/banners/";
   if ($name == null) {
      throw new Exception("Banner Image cannot be empty");
   } else {
      // encrypt the file name
      $encrypted_name = trim(md5($name) . uniqid(rand(2000, 60000)) . '.' . $file_type[1]);
      // max file size
      if ($size <= 2000000) {
         // if file is really an image
         if (getimagesize($tmp_name)) {
            // check if uploaded file format is allowed
            if (in_array($file_type[1], $allowed_format)) {
               // check if file already exit
               if (!file_exists($location . $encrypted_name)) {
                  // finally move file to the final destination   
                  if (move_uploaded_file($tmp_name, $location . $encrypted_name)) {
                     // returns the encrypted name for future uses
                     return $encrypted_name;
                  } else {
                     throw new Exception("Error Processing Request there was an error while uploading the file", 1);
                  }
               } else {
                  throw new Exception("Error Processing Request file already exists", 1);
               }
            } else {
               throw new Exception("Error Processing Request please only jpeg is allowed", 1);
            }
         } else {
            throw new Exception("Error Processing Request file is not an image", 1);
         }
      } else {
         throw new Exception("Error Processing Request file size too large", 1);
      }
   }
}

function movie_slider()
{
   // file name
   $name = $_FILES['slider-img']['name'];
   // temporary name on server 
   $tmp_name = $_FILES['slider-img']['tmp_name'];
   // file size
   $size = $_FILES['slider-img']['size'];
   // file type
   $type = $_FILES['slider-img']['type'];
   // the type of image i want to accept
   $allowed_format = ['jpeg', 'png'];
   // modify file type
   $file_type = explode('/', $type);
   // location of which i want to place the uploaded files 
   $location = "../../uploads/sliders/";
   if ($name == null) {
      throw new Exception("slider Image cannot be empty");
   } else {
      // encrypt the file name
      $encrypted_name = trim(md5($name) . uniqid(rand(2000, 60000)) . '.' . $file_type[1]);
      // max file size
      if ($size <= 2000000) {
         // if file is really an image
         if (getimagesize($tmp_name)) {
            // check if uploaded file format is allowed
            if (in_array($file_type[1], $allowed_format)) {
               // check if file already exit
               if (!file_exists($location . $encrypted_name)) {
                  // finally move file to the final destination   
                  if (move_uploaded_file($tmp_name, $location . $encrypted_name)) {
                     // returns the encrypted name for future uses
                     return $encrypted_name;
                  } else {
                     throw new Exception("Error Processing Request there was an error while uploading the file", 1);
                  }
               } else {
                  throw new Exception("Error Processing Request file already exists", 1);
               }
            } else {
               throw new Exception("Error Processing Request please only jpeg is allowed", 1);
            }
         } else {
            throw new Exception("Error Processing Request file is not an image", 1);
         }
      } else {
         throw new Exception("Error Processing Request file size too large", 1);
      }
   }
}


// function upload_movie()
// {
//    // file name
//    $name = $_FILES['video']['name'];
//    // temporary name on server 
//    $tmp_name = $_FILES['video']['tmp_name'];
//    // file size
//    $size = $_FILES['video']['size'];
//    // file type
//    $type = $_FILES['video']['type'];
//    // the type of image i want to accept
//    $allowed_format = ['mp4', 'm4v'];
//    // modify file type
//    $file_type = explode('/', $type);
//    // location of which i want to place the uploaded files 
//    $location = "../../uploads/movies/";
//    if ($name == null) {
//       throw new Exception("Banner Image cannot be empty");
//    } else {
//       // encrypt the file name
//       $encrypted_name = trim(uniqid(rand(2000, 60000)) . '.' . $file_type[1]);
//       // max file size
//       if ($size >= 20000) {
//          // check if uploaded file format is allowed
//          if (in_array($file_type[1], $allowed_format)) {
//             // check if file already exit
//             if (!file_exists($location . $encrypted_name)) {
//                // finally move file to the final destination
//                if (move_uploaded_file($tmp_name, $location . $encrypted_name)) {
//                   // returns the encrypted name for future uses
//                   return $encrypted_name;
//                } else {
//                   throw new Exception("Error Processing Request there was an error while uploading the file", 1);
//                }
//             } else {
//                throw new Exception("Error Processing Request file already exists", 1);
//             }
//          } else {
//             throw new Exception("Error Processing Request please only mp4 & m4v is allowed", 1);
//          }
//       } else {
//          throw new Exception("Error Processing Request file size too large", 1);
//       }
//    }
// }


function store_movie_info($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l,$m,$n)
{

   $location = "../../storage/movies_safe.txt";
   $open = fopen($location, 'a');
   fwrite($open, $a . "\n" . $b . "\n" . $c . "\n" . $d . "\n" . $e . "\n" . $f . "\n" . $g . "\n" . $h . "\n" . $i . "\n" . $j . "\n" . $k . "\n" . $l . "\n". $m. "\n" . $n."\n");
   fclose($open);

}

// for public users
function get_all_movies()
{
   $location = "../storage/movies_safe.txt";
   $open = fopen($location, 'r');
   $data = [];
   while (($line = fgets($open)) != false) {
      array_push($data, $line);
   }

   return $data;
}

// for dashboard user
function movie_list()
{
   $location = "../../storage/movies_safe.txt";
   $open = fopen($location, 'r');
   $data = [];
   while (($line = fgets($open)) != false) {
      array_push($data, $line);
   }

   return $data;
}