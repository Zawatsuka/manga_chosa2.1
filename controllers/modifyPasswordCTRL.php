<?php
require_once('../utils/regex.php');
require_once('../models/User.php');
$userObj = new User();
    $idUser= intval(trim(filter_input(INPUT_GET,'idUser',FILTER_SANITIZE_NUMBER_INT)));
    $viewUser = $userObj->UserPage($idUser);
   $passwordHash = $viewUser->password;

   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $errorsArray = array();
    $password= trim(filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING));
    
if(empty($password)){
    $errorsArray['password_error'] = 'Le champ n\'est pas rempli';      
}
$pass_verify = password_verify($password,$passwordHash);
   }



include(dirname(__FILE__).'/../template/header.php');
include(dirname(__FILE__).'/../views/modifyPassword.php');
include(dirname(__FILE__).'/../template/footer.php');