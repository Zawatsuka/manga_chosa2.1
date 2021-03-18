<?php
    session_start();
    require_once(dirname(__FILE__).'/../models/TypeOfManga.php');
    require_once('../utils/regex.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $errorsArray = array();
    
    
    // -------------------verification du type ---------------------
    $type= trim(filter_input(INPUT_POST,'type', FILTER_SANITIZE_EMAIL));
    if(!empty($type)){
        
        $testRegex = preg_match($regexPseudo,$type);
        if($testRegex == false){
            $errorsArray['type_error'] = 'Le type n\'est pas valide';
        }
    }else{
        $errorsArray['type_error'] = 'Le champ n\'est pas rempli';
    }

    if(empty($errorsArray) && $_SESSION['admin']==1){
        $addVote = new typeOfManga($type);
        $VoteAdd = $addVote->addType();
    }

    }
    include(dirname(__FILE__).'/../template/header.php');
    include(dirname(__FILE__).'/../views/addtype.php');
    include(dirname(__FILE__).'/../template/footer.php');