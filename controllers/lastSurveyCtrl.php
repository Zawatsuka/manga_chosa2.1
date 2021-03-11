<?php 
    session_start();
    require_once(dirname(__FILE__).'/../models/TypeOfManga.php');
    $list_type = new typeOfManga();
    $getListType = $list_type->listOfType();
    include(dirname(__FILE__).'/../template/header.php');
    include(dirname(__FILE__).'/../views/lastSurvey.php');
    include(dirname(__FILE__).'/../template/footer.php');