<?php
require_once('../config/config.php');
require_once('../functions/registration_functions.php');


$current_password= trim($_POST['current_password']);
$new_password1=trim($_POST['new_password1']);
$new_password2=trim($_POST['new_password2']); 
 
try {

   if (empty($current_password) || empty($new_password1) || empty($new_password2)) {
      throw new Exception("Input Cannot be empty");
   } else {
      if($new_password1==$new_password2){
        change_password($current_password,$new_password1);
         $_SESSION['success']='New Password Updated';
         header('location:../pages/profile-edit.php');
      }else{
         throw new Exception("Make sure both password match");
      } 
      
   }  

} catch (Exception $e) {
   $_SESSION['error']=$e->getMessage();
   header('location:../pages/profile-edit.php');
}