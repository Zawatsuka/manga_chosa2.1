
<?php 
require_once('../utils/regex.php');
require_once('../models/Survey.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errorsArray=array();
    // verification du titre 1
    $title1 = trim(filter_input(INPUT_POST, 'title1', FILTER_SANITIZE_STRING));

    if (!empty($title1)) {
        $testRegex = preg_match($regexPseudo, $title1);

        if ($testRegex == false) {
            $errorsArray['titre_error'] = 'Le titre n\'est pas valide';
        }
    }

    // verification du titre 2
    $title2 = trim(filter_input(INPUT_POST, 'title2', FILTER_SANITIZE_STRING));

    if (!empty($title2)) {
        $testRegex = preg_match($regexPseudo, $title2);

        if ($testRegex == false) {
            $errorsArray['titre_error'] = 'Le titre n\'est pas valide';
        }
    }

    // verification du select typeOfMAnga 
    $typeofManga = trim(filter_input(INPUT_POST, 'typeofManga', FILTER_SANITIZE_NUMBER_INT));

   
    if (empty($errorsArray)) { 
        if(isset($_FILES)){
            // upload de la premiere image 
            $tmpName = $_FILES['Survey1']['tmp_name'];
            $name ='Image_Pour_Sondage-'.$title1.'.png';
            $error = $_FILES['Survey1']['error'];
            move_uploaded_file($tmpName, dirname(__FILE__).'/../assets/upload/survey/'.$name);
            // upload de la deuxieme image 
            $tmpName = $_FILES['Survey2']['tmp_name'];
            $name ='Image_Pour_Sondage-'.$title2.'.png';
            $error = $_FILES['Survey2']['error'];
            move_uploaded_file($tmpName, dirname(__FILE__).'/../assets/upload/survey/'.$name);
        }
        $surveyObj = new Survey($title1,$title2,$typeOfManga);
        $SurveyAdd = $usertab->addSurvey();
        $isOk = '<div class=" slideInDown alert alert-success" role="alert">
        C\'est modifié !</div>';
    } else {
        $error = '<p class="text-danger mt-2">Erreur au chargement</p>';
    }
}






    session_start();
    include(dirname(__FILE__).'/../template/header.php');
    include(dirname(__FILE__).'/../views/createSurvey.php');
    include(dirname(__FILE__).'/../template/footer.php');