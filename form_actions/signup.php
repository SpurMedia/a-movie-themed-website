<?php
require_once('../config/config.php');
require_once('../functions/registration_functions.php');

$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$user_key=trim(uniqid(rand(500,2000)));

$_SESSION['return_username']= $username;
$_SESSION['return_email']= $email;

// validation that prevent users from inputting symbols in there user name
try {
   if (empty($username) || empty($password) || empty($email)) {
      throw new Exception("Error Processing Request. Empty Input ");
   } else {
      // check if someone else is already using the user name
      email_check($email);
      username_check($username);
   
      // prevent username from having symbols
      if (!preg_match('/^[^[:punct:]]+$/', $username)) {
         throw new Exception("Username can't contain symbols");
      }
      // validate if email is in correct format
      else {
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email");
         }
         // validate if the users agreed to the terms and condition
         else {
            if (!isset($_POST['terms&conditions'])) {
               throw new Exception("Accept Terms and Condition");
            } else {
               // validate to prevent the username is not less then 4 characters
               stingLength($username);

               // validate to prevent the password is not less then 4 characters
               if (strlen($password) < 4) {
                  throw new Exception("password Too Short");
               } else {
                  store_users_data($user_key, $username, $email, $password);
                  $_SESSION['status'] = $user_key;
                  $_SESSION['success'] = "Account created";            
                  return header('location:../pages/home.php');
               }
            }
         }
      }
   }




   // loopSession($_SESSION['userdata'],$username);

} catch (Exception $e) {
   $_SESSION['error'] = $e->getMessage();
   return header('location:../pages/sign-up.php');
}
