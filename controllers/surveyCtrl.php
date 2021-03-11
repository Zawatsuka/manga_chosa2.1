<?php 
    require_once(dirname(__FILE__).'/../models/Survey.php');
    $listOfSurvey = new Survey();   
    $viewSurvey = $listOfSurvey->viewsAllSurvey();

    include(dirname(__FILE__).'/../views/survey.php');