<?php

// store users sign up data in file
function store_users_data($a, $b, $c, $d)
{
   $location = '../storage/data_safe.txt';
   $open = fopen($location, 'a');
   fwrite($open, $a . "\n" . $b . "\n" . $c . "\n" . $d . "\n");
   fclose($open);
}


// count string length function
function stingLength($el)
{
   if (strlen($el) < 4) {
      throw new Exception( $el . " too short to be used as your user name", 1);
   }
}

//get all users details
function fetch_all_users()
{
   $location = "../storage/data_safe.txt";
   $fopen = fopen($location, 'r');
   $data = [];
   if ($fopen) {
      while (($line = fgets($fopen)) != false) {
         array_push($data, $line);
      }
      fclose($fopen);
   }
   return $data;
}


// loop file to prevent multiple use of a single username 
function email_check($el)
{
   $data=fetch_all_users();
   foreach ($data as $key => $value) {
      if($key%4==0){
         
         if(trim($el)==trim($data[$key+2])){
            throw new Exception("Email Already In Use By Another User");            
         }
      }
   }
}

function username_check($el)
{
   $data=fetch_all_users();
   foreach ($data as $key => $value) {
      if($key%4==0){
         
         if(trim($el)==trim($data[$key+1])){
            throw new Exception("Username Already Taken");            
         }
      }
   }
}

// edit username and email all at once
function edit_username($a, $b)
{
   $location="../storage/data_safe.txt";
   $data=fetch_all_users();

   //loop array with currently logged in user key 
   //and assign new password after finding its key
   foreach ($data as $key => $value) {
      if (trim($value) == trim($_SESSION['status'])) {
         if ($key % 4 == 0) {
            $data[$key + 1] = trim($a). "\n";
            $data[$key + 2] = trim($b). "\n";
         }
      }
   }

   //delete previous file
   unlink($location);

   //create new file and push data in array to it 
   $new_file = $data;
   $fopen = fopen('../storage/data_safe.txt', 'w');
   // fwrite($fopen,$new_file);
   file_put_contents($location, $new_file);
   fclose($fopen);


   return $data;
}

function change_password($a, $b)
{

   // open file
   $location = "../storage/data_safe.txt";
   $fopen = fopen($location, 'r+');
   $data = [];

   // push all file content to an empty array
   // then close the file
   if ($fopen) {
      while (($line = fgets($fopen)) != false) {
         array_push($data, $line);
      }
   }
   fclose($fopen);

   //loop array with currently logged in user key 
   //and assign new password after finding its key
   foreach ($data as $key => $value) {
      if (trim($value) == trim($_SESSION['status'])) {
         if ($key % 4 == 0) {
            if ($data[$key + 3] == trim($a) . "\n") {
               $data[$key + 3] = trim($b) . "\n";
            } else {
               throw new Exception("Input the correct Current password");
            }
         }
      }
   }

   //delete previous file
   unlink($location);

   //create new file and push data in array to it 
   $new_file = $data;
   $fopen = fopen('../storage/data_safe.txt', 'w');
   // fwrite($fopen,$new_file);
   file_put_contents($location, $new_file);
   fclose($fopen);


   return $data;
}

function get_all_profile_info()
{
   $location = "../storage/profile_info.txt";
   $open = fopen($location, 'r');
   $data = [];

   while (($line = fgets($open)) != false) {
      array_push($data, $line);
   }
   fclose($open);

   return $data;
}

function store_profile_info($a, $b, $c, $d, $e, $f)
{
   
   $location = "../storage/profile_info.txt";
   $open = fopen($location, 'a+');
   fwrite($open, $_SESSION['status'] . "\n" . $a . "\n" . $b . "\n" . $c . "\n" . $d . "\n" . $e . "\n" . $f . "\n");
   fclose($open);

   return true;
}

function edit_profile_info($a, $b, $c, $d, $e, $f)
{
   $location = "../storage/profile_info.txt";
   $data = get_all_profile_info();

   //loop array with currently logged in user key 
   //and assign new image after finding its key
   foreach ($data as $key => $value) {
      if (trim($value) == trim($_SESSION['status'])) {
         if ($key % 7 == 0) {
            $data[$key + 1] = trim($a) . "\n";
            $data[$key + 2] = trim($b) . "\n";
            $data[$key + 3] = trim($c) . "\n";
            $data[$key + 4] = trim($d) . "\n";
            $data[$key + 5] = trim($e) . "\n";
            $data[$key + 6] = trim($f) . "\n";
         }
      }
   }

   //delete previous file
   unlink($location);

   //create new file and push data in array to it 
   $new_file = $data;
   $fopen = fopen('../storage/profile_info.txt', 'w');
   // fwrite($fopen,$new_file);
   file_put_contents($location, $new_file);
   fclose($fopen);
}

function display_profile_info($a)
{
   $data=get_all_profile_info();

   // loop for the profile info. Using status id as reference
   foreach ($data as $key => $value) {
      if (trim($value) == trim($_SESSION['status'])) {
         if ($key % 7 == 0) {
            return $data[$key + $a];
         }
      }
   }
}
