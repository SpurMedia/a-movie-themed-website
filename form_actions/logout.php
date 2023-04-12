<?php
require_once("../config/config.php");

if (isset($_SESSION['status'])) {
   unset($_SESSION['status']);
   $_SESSION['success'] = "Logout Successful";
   return header("location:../pages/log-in.php");
}
