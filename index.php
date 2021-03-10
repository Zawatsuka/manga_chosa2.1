<?php 
    session_start();
    var_dump($_POST);
    var_dump($_FILES);
    include('template/header.php');
    include(dirname(__FILE__).'/controllers/surveyCtrl.php');
    include('template/footer.php');