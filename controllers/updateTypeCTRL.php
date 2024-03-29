<?php
session_start();
require_once('../models/TypeOfManga.php');
require_once('../utils/regex.php');
if(isset($_SESSION['admin']) && $_SESSION['admin']==1){
    $idtype = intval(trim(filter_input(INPUT_GET, 'idUpdate', FILTER_SANITIZE_NUMBER_INT)));

    $Type = new typeOfManga();
    $viewType = $Type->OneType($idtype);

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
            $VoteAdd = $addVote->updateType($idtype);
            header('location: /index.php');
        }

    }
    
    $idDeleted = intval(trim(filter_input(INPUT_GET, 'idDeleted', FILTER_SANITIZE_NUMBER_INT)));
    if($idDeleted>0){
        $deleted = $Type->deletedType($idDeleted);
        if($deleted){
            header('location: /index.php');
        }
    }
   

}else{
    header('location: /index.php');
}

include(dirname(__FILE__) . '/../template/header.php');
include(dirname(__FILE__) . '/../views/updateType.php');
include(dirname(__FILE__) . '/../template/footer.php');

?>