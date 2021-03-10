<?php
    session_start();
    require_once(dirname(__FILE__).'/../models/User.php');
    $userObj = new User();
    $idUser= intval(trim(filter_input(INPUT_GET,'idUser',FILTER_SANITIZE_NUMBER_INT)));
    // $idUser= $_SESSION['id'];
    $viewUser = $userObj->UserPage($idUser);

    include(dirname(__FILE__).'/../template/header.php');
    include(dirname(__FILE__).'/../views/userPage.php');
    include(dirname(__FILE__).'/../template/footer.php');

    ?>