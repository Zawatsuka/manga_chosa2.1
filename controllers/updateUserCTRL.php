<?php
include('../utils/regex.php');
include('../models/User.php');
setlocale(LC_TIME, 'fr_FR.utf8', 'fra.utf8');


$idUser = intval(trim(filter_input(INPUT_GET, 'idUser', FILTER_SANITIZE_NUMBER_INT)));
$userObj = new User();
$viewUser = $userObj->UserPage($idUser);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errorsArray = array();




    // -------------------verification du mail ---------------------
    $mail = trim(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL));
    if (!empty($mail)) {

        $testRegex = preg_match($regexEmail, $mail);
        if ($testRegex == false) {
            $errorsArray['mail_error'] = 'Le mail n\'est pas valide';
        }
    } else {
        $errorsArray['mail_error'] = 'Le champ n\'est pas rempli';
    }

    // -------------verification de l'ancien mot de passe-----------------
    $lastPassword = trim(filter_input(INPUT_POST, 'lastPassword', FILTER_SANITIZE_STRING));

    if (!empty($lastPassword)) {
        $testRegex = preg_match($regexPassword, $lastPassword);

        if ($testRegex == false) {
            $errorsArray['password_error'] = 'Le password n\'est pas valide';
        }
    }


    // -------------verification du nouveau mot de passe-----------------
    $password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));

    if (!empty($password)) {
        $testRegex = preg_match($regexPassword, $password);

        if ($testRegex == false) {
            $errorsArray['password_error'] = 'Le password n\'est pas valide';
        } else {
            $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        }
    }


    // ------------------second mot de passe--------------------
    $secondPassword = trim(filter_input(INPUT_POST, 'secondPassword', FILTER_SANITIZE_STRING));

    if (!empty($secondPassword)) {
        $testRegex = preg_match($regexPassword, $secondPassword);

        if ($testRegex == false) {
            $errorsArray['password_error'] = 'Le password n\'est pas valide';
        } else {
            $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        }
    }


    // ----------------------------verification du genre--------------------
    $gender = trim(filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING));
    if (!empty($gender)) {

        $testRegex = preg_match($regexPseudo, $gender);
        if ($testRegex == false) {
            $errorsArray['gender_error'] = 'Le gender n\'est pas valide';
        }
    } else {
        $errorsArray['gender_error'] = 'Le champ n\'est pas rempli';
    }


    // ----------------------verification du pseudo---------------
    $pseudo = trim(filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING));
    if (!empty($pseudo)) {

        $testRegex = preg_match($regexPseudo, $pseudo);
        if ($testRegex == false) {
            $errorsArray['pseudo_error'] = 'Le pseudo n\'est pas valide';
        }
    } else {
        $errorsArray['$pseudo_error'] = 'Le champ n\'est pas rempli';
    }


    // ----------------------------verification de la date de naissance------------------
    $birthdate = trim(filter_input(INPUT_POST, 'birthdate', FILTER_SANITIZE_STRING));

    if (!empty($birthdate)) {

        $testRegex = preg_match($regexBirthDate, $birthdate);
        if ($testRegex == false) {
            $errorsArray['birthdate_error'] = 'La date de naissance n\'est pas valide';
        }
    } else {
        $errorsArray['birthdate_error'] = 'Le champ n\'est pas rempli';
    }






    $verifyPassword = password_verify($lastPassword, $viewUser->password);
    if (empty($errorsArray)) {
        // j'ajoute false pour dire que le user n'est pas admin 
        if(empty($password) && empty($secondPassword) && empty($lastPassword) ) {
            $usertab = new User($mail, $birthdate, $gender, $pseudo, $viewUser->password);
        } else if($verifyPassword == true && $password == $secondPassword) {
            $usertab = new User($mail, $birthdate, $gender, $pseudo, $pass_hash);
        }
        // var_dump($usertab); 
        $testRegister = $usertab->updateUser($idUser);
        $isOk = '<div class=" slideInDown alert alert-success" role="alert">
    C\'est modifié !
    </div>';
    } else {
        $error = '<p class="text-danger mt-2">Erreur au chargement</p>';
    }
}
$userObj = new User();
$viewUser = $userObj->UserPage($idUser);



include(dirname(__FILE__) . '/../template/header.php');
include(dirname(__FILE__) . '/../views/updateUser.php');
include(dirname(__FILE__) . '/../template/footer.php');
