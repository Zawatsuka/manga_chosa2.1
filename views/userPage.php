<?php
$typeRight= true;
ob_start();
?>
<a class="ml-3" href="/controllers/listOfUserCTRL.php">
        <img src="/assets/img/fleche2.png" class="img-fluid mt-3 zoom" width="40" alt="fleche de retour">
    </a>
<div class="container text-center flipInX">
    <div class="row">
        <div class="card mb-3 p-5 ml-5 mt-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="/assets/img/user2.png" class="img-fluid" width="120" alt="image de profil utilisateur">
                </div>
                <div class="col-md-8">
                    <div class="card-body p-5">
                        <h5 class="card-title"><?=$viewUser->pseudo;?></h5>
                        <p class="card-text"><?php
                        if($viewUser->admin ==1){
                            echo '<a class="text-secondary" href="/controllers/listOfUserCTRL.php">Administration du site</a>'; 
                             }       
                            ?></p>
                        <a class="text-secondary" href="/controllers/updateUserCTRL.php?idUser=<?=$viewUser->id;?>">
                            <p class="card-text">
                                modifier <img src="/assets/img/update_1.png" class="img-fluid" width="20"
                                    alt="modifier">
                            </p>
                        </a>
                        <a class="btn btn-secondary mt-3" data-toggle="collapse" href="#collapseExample" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            Vos Informations <img src="/assets/img/plus_1.png" class="img-fluid" width="15" alt="plus">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="collapse" id="collapseExample">
    <div class="card card-body">
        <p>Role : <?php
        if($viewUser->admin==1){
            echo ' Administrateur';
        }else{
            echo ' Utilisateur';
        }
        ?></p>
        <p>Adresse Email : <?=$viewUser->mail;?> </p>
        <p>Anniversaire : <?=$viewUser->birthDate;?> </p>
        <p>Civilité : <?=$viewUser->gender;?> </p>

    </div>
</div>

<?php
$mainContent = ob_get_clean();
require('../template/main.php');
?>