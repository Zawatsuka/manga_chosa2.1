<?php 
    session_start();
    require_once(dirname(__FILE__).'/../models/TypeOfManga.php');
    require_once(dirname(__FILE__).'/../models/Survey.php');
    $list_type = new typeOfManga();
    $getListType = $list_type->listOfType();
    $idDeactivated = intval(trim(filter_input(INPUT_GET, 'idDeactivated', FILTER_SANITIZE_NUMBER_INT)));
    $idType = intval(trim(filter_input(INPUT_GET, 'idType', FILTER_SANITIZE_NUMBER_INT)));
    if($idType==0){
        $idType=1;
    }
    $desactiveSurvey= new Survey();
    $surveyDeactivated = $desactiveSurvey->DesactiveSurvey($idDeactivated);

    include(dirname(__FILE__).'/../template/header.php');
    include(dirname(__FILE__).'/../views/lastSurvey.php');
    include(dirname(__FILE__).'/../template/footer.php');