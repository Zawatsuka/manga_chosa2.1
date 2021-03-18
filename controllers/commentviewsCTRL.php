<?php
    require_once(dirname(__FILE__).'/../models/Comment.php');
    require_once(dirname(__FILE__).'/../models/User.php');
    $comments = trim(filter_input(INPUT_POST, 'comments',FILTER_SANITIZE_STRING));
    $idUser= $_SESSION['id'];
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $errorArray = array();
        if(!isset($idUser)){
            $errorsArray['user_error'] = 'l\'id User n\'existe ';
        }
        if(!isset($values->id)){
            $errorsArray['survey_error'] = 'l\'id survey n\'existe ';
        }
        if(empty($errorsArray)){
            $commentAdd= new Comment($comments,$idUser,$values->id);
            $Addcomment = $commentAdd->addComment();
            // header("Location : /index.php");
        }
    
    }
    $commentSet = new Comment();
    $viewsComment = $commentSet->viewComment($values->id);
    // var_dump($viewsComment);
    
    
    include(dirname(__FILE__).'/../template/commentview.php');