<?php
// upload files
function profile_image()
{
   // file name
   $name = $_FILES['profile']['name'];
   // temporary name on server 
   $tmp_name = $_FILES['profile']['tmp_name'];
   // file size
   $size = $_FILES['profile']['size'];
   // file type
   $type = $_FILES['profile']['type'];
   // the type of image i want to accept
   $allowed_format = ['jpeg', 'png'];
   // modify file type
   $file_type = explode('/', $type);
   // location of which i want to place the uploaded files 
   $location = "../uploads/profile/";
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

// edit profile picture
function edit_profile($a)
{

   // open file
   $file_location = "../storage/profile_img.txt";
   $fopen = fopen($file_location, 'r');
   $data = [];

   // push all file content to an empty array
   // then close the file
   while (($line = fgets($fopen)) != false) {
      array_push($data, $line);
   }
   fclose($fopen);

   //loop array with currently logged in user key 
   //and assign new image after finding its key
   foreach ($data as $key => $value) {
      if (
         trim($value) == trim($_SESSION['status'])
      ) {
         if ($key % 2 == 0) {
            $data[$key + 1] = trim($a) . "\n";
         }
      }
   }

   //delete previous file
   unlink($file_location);

   //create new file and push data in array to it 
   $new_file = $data;
   $fopen = fopen('../storage/profile_img.txt', 'w');
   // fwrite($fopen,$new_file);
   file_put_contents($file_location, $new_file);
   fclose($fopen);
}

// upload profile pic
function upload_profile_pics($a)
{
   $file_location = "../storage/profile_img.txt";
   $open = fopen($file_location, 'a');
   fwrite($open, trim($_SESSION['status']) . "\n" . trim($a) . "\n");
   fclose($open);
}

// get all profiles data
function fetch_all_profile()
{
   // open file
   $file_location = "../storage/profile_img.txt";
   $fopen = fopen($file_location, 'a+');
   $data = [];

   // push all file content to an empty array
   // then close the file
   while (($line = fgets($fopen)) != false) {
      array_push($data, $line);
   }
   fclose($fopen);

   return $data;
}

function get_profile()
{
   $location = "../storage/profile_img.txt";
   $fopen = fopen($location, 'r');
   $data = [];
   // push all data from file to array
   if ($fopen) {
      while (($line = fgets($fopen)) != false) {
         array_push($data, $line);
      }
      fclose($fopen);
      // loop for the profile image. Using status id as reference
      foreach ($data as $key => $value) {
         if (trim($value) == trim($_SESSION['status'])) {
            if ($key % 2 == 0) {
               return "../uploads/profile/" . $data[$key + 1];
            }
         }
      }
      //if user id not found in profile file, it's means user doesn't have a profile yet
      // so we assign a default profile to the user
      return '../uploads/rand/default.jpg';
   }
}

function fetch_specific_movie($all_movies,$movie_title){
   $data=[];
   foreach ($all_movies as $key => $value ) {
      if($key%14==0){
         if(trim($all_movies[$key])==$movie_title){
            for ($i=0; $i<=13; $i++) { 
               array_push($data,$all_movies[$key+$i]);
            }
         }
      }
   }
   return $data;
}

// functions that assign profile image to new users
// function get_random_image(){
//    $dir_path='../uploads/rand/';

   
// $profile_data=fetch_all_profile();
// foreach ($profile_data as $key => $value) {
//    if(trim($value)==trim($_SESSION['status'])){
//       if(isset($profile_data[$key +1])){
//          return '../uploads/'.$profile_data[$key + 1];
//       }
//    }else{
//       $checker='new user';
//    }
// }

// if(isset($checker)){
//    $dir_path='../uploads/rand/';
//    if(!empty($dir_path)){
//       $files=scandir($dir_path);
//       $count=count($files);
//       echo $count;
//       $index=rand(1,$count-1);

//       return '../uploads/rand/'.'0'.$index;
//    }else{
//       throw new Exception("No Image found", 1);
      
//    }
// }
// }
