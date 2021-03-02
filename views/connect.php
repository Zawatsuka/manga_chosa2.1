<?php
$typeRight= true;
ob_start();
?>
<div class="container-fluid fadeInLeft">
    <!-- sondage -->
    <div class="row">
        <div class="col-12 col-sm-12 col-md-7 justify-content-center p-5">
            <div class="d-flex justify-content-center">
                <div class="flex-column">
                    <div class="d-none d-sm-none d-md-block">
                        <input type="text" size="70" class="p-3 m-4 connexion-form zoom"
                            placeholder="Pseudo/Adresse Mail">
                    </div>
                    <div class="d-none d-sm-none d-md-block">
                        <input type="password" size="70" class="p-3 m-4 connexion-form zoom" placeholder="Mot de passe">
                    </div>
                    <div class="d-block d-sm-block d-md-none">
                        <input type="text" size="40" class="p-3 m-4 connexion-form zoom"
                            placeholder="Pseudo/Adresse Mail">
                    </div>
                    <div class="d-block d-sm-block d-md-none">
                        <input type="password" size="40" class="p-3 m-4 connexion-form zoom" placeholder="Mot de passe">
                    </div>
                    <div class="button-margin">
                        <a href="#">
                            <p class="color-link ml-3">T'as oublié ton mot de passe ?</p>
                        </a>
                    </div>
                    <div class="button-margin zoom">
                        <button class="px-5 py-4 m-3 button-connect"> Connexion </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
$mainContent = ob_get_clean();
require('../template/main.php');
?>