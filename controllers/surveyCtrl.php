<?php 
    require_once(dirname(__FILE__).'/../models/Survey.php');
    require_once(dirname(__FILE__).'/../models/TypeOfManga.php');
    require_once(dirname(__FILE__).'/../models/Vote.php');
    // recuperation de liste des types de manga 
    $list_type = new typeOfManga();
    $getListType = $list_type->listOfType();

    // recuperation de des sondage selon un type de manga
    $idType = intval(trim(filter_input(INPUT_GET, 'idType', FILTER_SANITIZE_NUMBER_INT)));
    if($idType==0){
        $idType=1;
    }
    $listOfSurvey = new Survey();   
    $viewSurvey = $listOfSurvey->viewsAllSurvey($idType);

    // creation du vote selon un id 
    $surveyVote1 = intval(trim(filter_input(INPUT_GET, 'idSurveyV1', FILTER_SANITIZE_NUMBER_INT)));
    $surveyVote2 = intval(trim(filter_input(INPUT_GET, 'idSurveyV2', FILTER_SANITIZE_NUMBER_INT)));
    $forVote = new Survey();
    $clicFirstVote1 = $forVote->vote1($surveyVote1);
    $clicFirstVote2 = $forVote->vote2($surveyVote2);
    // $clicSecondVote = $forVote->vote2();
    
    if(isset($_SESSION['id'])){
    $vote = new Vote();
    $voteAdd1 = $vote->addVote($_SESSION['id'],$surveyVote1);
    $voteAdd2 = $vote->addVote($_SESSION['id'],$surveyVote2);

    $OnlyOneVote1= $vote->voteUserList($surveyVote1,$_SESSION['id']);
    $OnlyOneVote2= $vote->voteUserList($surveyVote2,$_SESSION['id']);
    }
    // var_dump($OnlyOneVote1);
    // var_dump($OnlyOneVote2);


    include(dirname(__FILE__).'/../views/survey.php');