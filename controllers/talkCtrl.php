<?php 
    session_start();
    require_once('../utils/regex.php');
    if(isset($_SESSION)){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $errorsArray = array();
            $pseudo = trim(filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING));
            if (!empty($pseudo)) {
    
                $testRegex = preg_match($regexPseudo, $pseudo);
                if ($testRegex == false) {
                    $errorsArray['pseudo_error'] = 'Le pseudo n\'est pas valide';
                }
            } else {
                $errorsArray['$pseudo_error'] = 'Le champ n\'est pas rempli';
            }
    
            $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));
    
            $to      = $_SESSION['mail'];
            $subject = 'Envoi d\'un message par'. $_SESSION['pseudo'];
            $headers = array(
            'From' => 'thomaslucas2904@gmail.com',
            'Reply-To' => 'thomaslucas2904@gmail.com',
            'X-Mailer' => 'PHP/' . phpversion()
            );
    
            mail($to, $subject, $message, $headers);
    
        }
    }
   

    include(dirname(__FILE__).'/../template/header.php');
    include(dirname(__FILE__).'/../views/talk.php');
    include(dirname(__FILE__).'/../template/footer.php');