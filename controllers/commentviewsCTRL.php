<?php
    require_once(dirname(__FILE__).'/../models/Comment.php');
    $comments = trim(filter_input(INPUT_POST, 'comments',FILTER_SANITIZE_STRING));
    $idUser= $_SESSION['id'];
    $commentAdd= new Comment($comments,$idUser);
    $Addcomment = $commentAdd->addComment();
    $commentSet = new Comment();
    $viewsComment = $commentSet->viewComment();
    
    include(dirname(__FILE__).'/../template/commentview.php');