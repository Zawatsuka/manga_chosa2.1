<?php 
    require_once(dirname(__FILE__).'/../models/Survey.php');
    require_once(dirname(__FILE__).'/../models/TypeOfManga.php');
    require_once(dirname(__FILE__).'/../models/Vote.php');
    // recuperation de liste des types de manga 
    $list_type = new typeOfManga();
    $getListType = $list_type->listOfType();

    // recuperation de des sondage selon un type de manga
    $idTypeOfManga = intval(trim(filter_input(INPUT_GET, 'idType', FILTER_SANITIZE_NUMBER_INT)));
    if($idTypeOfManga==0){
        $idTypeOfManga=1;
    }
    $listOfSurvey = new Survey();   
    $viewSurvey = $listOfSurvey->viewsAllSurvey($idTypeOfManga);
    
    // creation du vote selon un id 
    // recuperation en get de l'id du sondage
    $surveyVote1 = intval(trim(filter_input(INPUT_GET, 'idSurveyV1', FILTER_SANITIZE_NUMBER_INT)));
    $surveyVote2 = intval(trim(filter_input(INPUT_GET, 'idSurveyV2', FILTER_SANITIZE_NUMBER_INT)));
   
    $vote1 = new Vote(true , false);

    $addVote1 = $vote1->addVote1($_SESSION['id'] ,$surveyVote1 );

    
    $vote2 = new Vote(false , true);

    $addVote2 = $vote2->addVote2($_SESSION['id'],$surveyVote2 );
    
    $i=0;
    $vote = new Vote();
    foreach($viewSurvey as $value){
        $value->HasVoted=$vote->idAccordingToASurvey($value->id,$_SESSION['id']);
        $viewSurvey[$i]=$value;
        $i++;
    }
   
   
   
   
   
   
   
   
   
   
   
   
   
    // $forVote = new Survey();
    // // ajoute +1 dans la colonne vote de survey 
    // $clicVote1 = $forVote->vote1($surveyVote1);
    // $clicVote2 = $forVote->vote2($surveyVote2);

    // $vote = new Vote();
    // // si la session id existe alors rajoute dans la table vote l'id de l'utilisateur
    // // et celui du sondage en question
    // if(isset($_SESSION['id'])){
    // $voteAdd1 = $vote->addVote($_SESSION['id'],$surveyVote1);
    // $voteAdd2 = $vote->addVote($_SESSION['id'],$surveyVote2);
    // var_dump($surveyVote1);
    // var_dump($surveyVote2);
    // // Repere l'id de l'utilisateur et l'id du survey 
    // $OnlyOneVote1= $vote->idAccordingToASurvey($surveyVote1,$_SESSION['id']);
    // $OnlyOneVote2= $vote->idAccordingToASurvey($surveyVote2,$_SESSION['id']);

    // }
  


    include(dirname(__FILE__).'/../views/survey.php');