<?php
    require_once(dirname(__FILE__).'/../models/Comment.php');
    $comments = trim(filter_input(INPUT_POST, 'comments',FILTER_SANITIZE_STRING));
    $idUser= $_SESSION['id'];
    $commentSet = new Comment();
    $viewsComment = $commentSet->viewComment($values->id);
    $commentAdd= new Comment($comments,$idUser,$values->id);
    $Addcomment = $commentAdd->addComment();
    
    
    include(dirname(__FILE__).'/../template/commentview.php');