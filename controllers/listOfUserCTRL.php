<?php
    session_start();
    require_once(dirname(__FILE__).'/../models/User.php');
    $userObj = new User();
    //  supprimer un inscrit
    $deletedId= intval(trim(filter_input(INPUT_GET,'deleted',FILTER_SANITIZE_NUMBER_INT)));
    $delete = $userObj->DeletedUser($deletedId);

    // liste des inscrits
    $listUser = $userObj->listOfUser();

   


    include(dirname(__FILE__).'/../template/header.php');
    include(dirname(__FILE__).'/../views/listOfUser.php');
    include(dirname(__FILE__).'/../template/footer.php');