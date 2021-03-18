<?php
 require_once(dirname(__FILE__).'/../models/Comment.php'); 
session_start();
    $idComment = trim(filter_input(INPUT_GET, 'idComm', FILTER_SANITIZE_NUMBER_INT));
    $valueComment = new Comment();
    $CommentValue = $valueComment->viewCommentWithIdComm($idComment);
    var_dump($CommentValue);
   foreach($CommentValue as $value){
       if($_SERVER['REQUEST_METHOD'] == 'POST' && $_SESSION['id']==$value=$id_user){
        $comment = trim(filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING));
        $updateComm = new Comment($comment);
        $UpComm =$updateComm-> UpdateComm($idComment);
    }
   }
    
    
    var_dump($CommentValue);
    include(dirname(__FILE__).'/../template/header.php');
    include(dirname(__FILE__).'/../views/updateComment.php');
    include(dirname(__FILE__).'/../template/footer.php');