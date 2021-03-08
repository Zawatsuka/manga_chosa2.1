<?php
$typeRight= true;
ob_start();
?>
<div class="container-fluid fadeInLeft">
    <!-- sondage -->
    <div class="row">
        <div class="col-12 col-sm-12 col-md-7 justify-content-center p-5">
            <h2>Connexion</h2>
           <p class="text-danger"><?=$errorsArray['login_error'] ?? ''; ?></p> 
            <form method="POST">
                <div class="input-group mb-3 mt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Adresse Email ＼(^ω^＼)"
                        aria-label="Adresse Email ＼(^ω^＼)" aria-describedby="basic-addon1" name="mail">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Mot de Passe ᕙ༼*◕_◕*༽ᕤ"
                        aria-label="Mot de Passe ᕙ༼*◕_◕*༽ᕤ" aria-describedby="basic-addon1" name="password">
                    
                </div>
                <div><a class="text-secondary" href="/controllers/forgotpasswordCTRL.php">Mot de passe oublié ?</a></div>
                <button type="submit" class="btn btn-outline-secondary mt-3">Connexion </button>
        </div>
        </form>
    </div>
</div>
</div>
<?php
$mainContent = ob_get_clean();
require('../template/main.php');
?>