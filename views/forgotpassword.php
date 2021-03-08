<?php
$typeRight= true;
ob_start();
?>
<div class="container m-4">
    <div class="row">
        <form method="POST">
            <h2>Oublie de mot de passe</h2>
            <p>Veuillez mettre votre adresse Email vous allez recevoir un p'tit message ＼(^ω^＼)</p>
            <div class="input-group mb-3 mt-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control" placeholder="Adresse Email ＼(^ω^＼)"
                    aria-label="Adresse Email ＼(^ω^＼)" aria-describedby="basic-addon1" name="mail">
            </div>
            <button type="submit" class="btn btn-outline-secondary mt-3">Envoyer </button>
        </form>
    </div>
</div>


<?php
$mainContent = ob_get_clean();
require('../template/main.php');
?>