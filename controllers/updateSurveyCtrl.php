<?php
require_once('../utils/regex.php');
require_once('../models/Survey.php');
require_once('../models/TypeOfManga.php');

$idUpdate = intval(trim(filter_input(INPUT_GET, 'idUpdate', FILTER_SANITIZE_NUMBER_INT)));
$viewSurveyObj = new Survey();
$viewSurvey = $viewSurveyObj->viewSurvey($idUpdate);
var_dump($viewSurvey);

$list_type = new typeOfManga();
$getListType = $list_type->listOfType();
$getOneType = $list_type->OneType($viewSurvey->id_typeofmanga);
var_dump($getOneType);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errorsArray = array();
    // verification du titre 1
    $title1 = trim(filter_input(INPUT_POST, 'title1', FILTER_SANITIZE_STRING));

    if (!empty($title1)) {
        $testRegex = preg_match($regexPseudo, $title1);

        if ($testRegex == false) {
            $errorsArray['titre_error'] = 'Le titre n\'est pas valide';
        }
    }

    // verification du titre 2
    $title2 = trim(filter_input(INPUT_POST, 'title2', FILTER_SANITIZE_STRING , ));

    if (!empty($title2)) {
        $testRegex = preg_match($regexPseudo, $title2);

        if ($testRegex == false) {
            $errorsArray['titre_error'] = 'Le titre n\'est pas valide';
        }
    }
    var_dump($errorsArray);
    // verification du select typeOfMAnga 
    $typeOfManga = trim(filter_input(INPUT_POST, 'typeOfManga', FILTER_SANITIZE_NUMBER_INT));
    var_dump($errorsArray);
    if (empty($errorsArray)) { 
        $surveyObj = new Survey($title1,$title2,$typeOfManga,1);
        $SurveyUpdate = $surveyObj->updateSurvey($idUpdate);
        $isOk = '<div class=" slideInDown alert alert-success" role="alert">
        C\'est modifié !</div>';
        if(isset($_FILES)){
            // upload de la premiere image 
            $tmpName = $_FILES['Survey1']['tmp_name'];
            $name ='1ER_Image_Pour_Sondage-'.$idUpdate.'.png';
            $errorFile = $_FILES['Survey1']['error'];
            move_uploaded_file($tmpName, dirname(__FILE__).'/../assets/upload/survey/'.$name);
            // upload de la deuxieme image 
            $tmpName = $_FILES['Survey2']['tmp_name'];
            $name ='2EME_Image_Pour_Sondage-'.$idUpdate.'.png';
            $errorFile = $_FILES['Survey2']['error'];
            move_uploaded_file($tmpName, dirname(__FILE__).'/../assets/upload/survey/'.$name);
        }
    } else {
        $error = '<p class="text-danger mt-2">Erreur au chargement</p>';
    }
}

include(dirname(__FILE__) . '/../template/header.php');
include(dirname(__FILE__) . '/../views/updateSurvey.php');
include(dirname(__FILE__) . '/../template/footer.php');