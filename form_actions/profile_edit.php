<?php
require_once('../config/config.php');
require_once('../functions/registration_functions.php');
require_once('../functions/upload_functions.php');

try {
   $first_name = trim($_POST['fname']);
   $last_name = trim($_POST['lname']);
   $user_name = trim($_POST['uname']);
   $email = trim($_POST['email']);
   $age = trim($_POST['age']);
   if(isset($_POST['gender'])){
   $gender = trim($_POST['gender']);
}else{
   throw new Exception("Select Gender", 1); 
}
   
   // prevent users from submitting empty field
   if ($first_name == "" || $last_name == "" || $user_name == "" || $email == "" || $age == "" || $gender=="") {
      throw new Exception("Error Processing Request. Input Cannot Be Empty", 1);
   } else {
      // ensure user age is in numeric format
      if (!is_numeric($age)) {
         throw new Exception("Age should be numeric not alphabets", 1);
      } else {
         // prevent symbol in the first name or last name
         if (!preg_match('/^[^[:punct:]]+$/', $first_name || $last_name)) {
            throw new Exception("Username can't contain symbols");
         } else {
            // validate email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               throw new Exception("Invalid Email", 1);
            } else {
               stingLength($user_name);
               $profile_info_data = get_all_profile_info();
               foreach ($profile_info_data as $key => $value) {
                  if (trim($value) == trim($_SESSION['status'])) {
                     // user already setup his/her profile
                     $daa= 'set';
                  } else {
                     // user has not setup his/her profile
                     $dama=34;
                  }
               }
            }
         }
      }
   }

   // edit user profile if he already has it set 
   if (isset($daa)) {
      edit_profile_info($first_name, $last_name, $user_name, $email, $age, $gender);
      edit_username($user_name,$email);
   } else {
      //store user profile if he doesn't has it set 
      store_profile_info($first_name, $last_name, $user_name, $email, $age, $gender);
   }


   if (!empty($name = $_FILES['profile']['name'])) {
      $profile_data = fetch_all_profile();
      $profile_name = profile_image();
      // check if user already have a profile image before
      foreach ($profile_data as $key => $value) {
         if (trim($value) == trim($_SESSION['status'])) {
            // user already have a profile image in the past
            $true = 'yes';
         } else {
            // user does not have a profile image in the past
            $false = 'no';
         }
      }

      // edit user profile image if he already have one in the past 
      if (isset($true)) {
         edit_profile($profile_name);
      } else {
         // upload user profile image if he doesn't have one in the past 
         upload_profile_pics($profile_name);
      }
   }

   $_SESSION['success'] = 'Profile Successfully Updated';
   header('location:../pages/profile-edit.php');

} catch (\Exception $e) {
   $_SESSION['error'] = $e->getMessage();
   header('location:../pages/profile-edit.php');
}
