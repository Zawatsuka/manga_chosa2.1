<?php
require_once('../utils/regex.php');
require_once('../models/User.php');
$userObj = new User();
    $idUser= intval(trim(filter_input(INPUT_GET,'idUser',FILTER_SANITIZE_NUMBER_INT)));
    $viewUser = $userObj->UserPage($idUser);
   $passwordHash = $viewUser->password;

//    verification du mot de passe par l'utilisateur
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $errors = array();
    
    $password= trim(filter_input(INPUT_POST,'passwordVerif', FILTER_SANITIZE_STRING));
    
    if(empty($password)){
        $errors['password_error'] = 'Le champ n\'est pas rempli';      
        }
    $pass_verify = password_verify($password,$passwordHash);
    }
    var_dump($errors);

// modification du mot de passe 
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $errorsArray = array();
    var_dump($errorsArray);
    $password= trim(filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING));

        if(!empty($password)){
            $testRegex = preg_match($regexPassword,$password);
    
            if($testRegex == false){
                $errorsArray['password_error'] = 'Le password n\'est pas valide';
            }else{
                $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            }
        }else{
            $errorsArray['password_error'] = 'Le champ n\'est pas rempli';
        }
    if(empty($errorsArray)){
        // j'ajoute false pour dire que le user n'est pas admin 
        $usertab = new User($password); 
        // var_dump($usertab); 
        $testRegister = $usertab->updatePasswordUser($idUser);
        $isOk= '<div class=" slideInDown alert alert-success" role="alert">
        C\'est modifié !
        </div>';
    }else{
        $error = '<p class="text-danger mt-2">Erreur au chargement</p>';
    }

   }


include(dirname(__FILE__).'/../template/header.php');
include(dirname(__FILE__).'/../views/modifyPassword.php');
include(dirname(__FILE__).'/../template/footer.php');