<?php 
    session_start();
    var_dump($_SESSION);
    include('template/header.php');
    include(dirname(__FILE__).'/controllers/surveyCtrl.php');
    include('template/footer.php');