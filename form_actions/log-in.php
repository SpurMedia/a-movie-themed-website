<?php
require_once('../config/config.php');
require_once('../functions/registration_functions.php');


$username1 = trim($_POST['username']);
$password1 = trim($_POST['password']);


   try {
      $data = fetch_all_users();
      foreach ($data as $key => $value) {
         if (trim($value) == trim($username1)) {
            $_SESSION['username'] = $username1;
            $id = trim($data[$key - 1]);
            $db_password = $data[$key + 2];
            if (trim($db_password) == trim($password1)) {
               $_SESSION['success'] = "Login Successful";
               $_SESSION['status'] = $id;
               if($username1=='admin' && $password1=='admin11'){         
                  return header("location:/dashboard/theme/dashboard.php");
               }else{                  
                  return header("location:../pages/home.php");
               }
            }else{
               throw new Exception("Incorrect Password");
               
            }
         }
      }
      throw new Exception("User not found");
   } catch (Exception $e) {
      $_SESSION['error']=$e -> getMessage();
      return header('location:../pages/log-in.php');
   }

