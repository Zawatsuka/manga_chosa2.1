<?php 
    session_start();
    require_once dirname(__FILE__).'/../models/User.php';

    $errorsArray = array();

    $mail = trim(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL));
    if(!empty($_POST['password']) && !empty($mail)){
    $password = $_POST['password'];
    $user = new User();
    $user = $user->getUserLogin($mail, $password);
    if($user){
        $_SESSION['id'] = $user->id;
        $_SESSION['pseudo'] = $user->pseudo;
        header('location: /index.php');
    } else {
        $errorsArray['login_error'] = 'Votre login ou mot de passe n\'est pas reconnu';
    }
}

    include(dirname(__FILE__).'/../template/header.php');
    include(dirname(__FILE__).'/../views/connect.php');
    include(dirname(__FILE__).'/../template/footer.php');