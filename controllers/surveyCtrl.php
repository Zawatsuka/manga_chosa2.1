<?php 
    require_once(dirname(__FILE__).'/../models/Survey.php');
    require_once(dirname(__FILE__).'/../models/TypeOfManga.php');
    $list_type = new typeOfManga();
    $getListType = $list_type->listOfType();
    $idType = intval(trim(filter_input(INPUT_GET, 'idType', FILTER_SANITIZE_NUMBER_INT)));
    if($idType==0){
        $idType=1;
    }
    $listOfSurvey = new Survey();   
    $viewSurvey = $listOfSurvey->viewsAllSurvey($idType);
    include(dirname(__FILE__).'/../views/survey.php');