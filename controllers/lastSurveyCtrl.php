<?php 
    session_start();
    require_once(dirname(__FILE__).'/../models/TypeOfManga.php');
    require_once(dirname(__FILE__).'/../models/Survey.php');
    require_once(dirname(__FILE__).'/../models/Vote.php');
    setlocale(LC_TIME, 'fr_FR.utf8', 'fra.utf8');
    $list_type = new typeOfManga();
    $getListTypeDesactive = $list_type->listOfType();
    $idDeactivated = intval(trim(filter_input(INPUT_GET, 'idDeactivated', 
    FILTER_SANITIZE_NUMBER_INT)));
    $idType = intval(trim(filter_input(INPUT_GET, 'idType', FILTER_SANITIZE_NUMBER_INT)));
    if($idType==0){
        $idType=1;
    }
    $vote = new Vote();

    $survey= new Survey();
    if(isset($_SESSION['admin']) && $_SESSION['admin']==1){
        $surveyDeactivated = $survey->DesactiveSurvey($idDeactivated);   
    }
    $viewSurveyDesactive = $survey->viewsAllSurveyDesactive($idType);
    
    foreach($viewSurveyDesactive as $value){
        $value->NumberV1 =$vote->countVoteWhereId1($value->id)->votes1;
        $value->NumberV2 =$vote->countVoteWhereId2($value->id)->votes2;
    }

    include(dirname(__FILE__).'/../template/header.php');
    include(dirname(__FILE__).'/../views/lastSurvey.php');
    include(dirname(__FILE__).'/../template/footer.php');