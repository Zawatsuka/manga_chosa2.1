<?php
    session_start();
    require_once(dirname(__FILE__).'/../models/User.php');
    require_once(dirname(__FILE__).'/../models/Comment.php');
    $userObj = new User();
    $UserComm = new Comment();
    $idUser= intval(trim(filter_input(INPUT_GET,'idUser',FILTER_SANITIZE_NUMBER_INT)));
    // $idUser= $_SESSION['id'];
    if(isset($idUser)){
        $viewUser = $userObj->UserPage($idUser);
        $userComments = $UserComm->viewCommentforUser($viewUser->id);
    }
    if($idUser!=$viewUser->id || $idUser <= 0) {
        header('location: /index.php');
    }
    

    include(dirname(__FILE__).'/../template/header.php');
    include(dirname(__FILE__).'/../views/userPage.php');
    include(dirname(__FILE__).'/../template/footer.php');

    ?>