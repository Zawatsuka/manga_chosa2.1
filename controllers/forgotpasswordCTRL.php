<?php
    if(isset($_POST['mail'])){
        $mail= $_POST['mail'];
        $subject = 'Bah alors tu as oublié ton mot de passe ?';
        $message = 'let\'s go';
        $headers = 'From: thomaslucas2904@gmail.com' . "\r\n" .
        'Reply-To: thomaslucas2904@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
   
        mail($mail, $subject, $message, $headers);
    }
    include(dirname(__FILE__).'/../template/header.php');
    include(dirname(__FILE__).'/../views/forgotpassword.php');
    include(dirname(__FILE__).'/../template/footer.php');