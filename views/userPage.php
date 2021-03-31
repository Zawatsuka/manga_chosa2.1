<?php
$typeRight= true;
ob_start();
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1){

echo '<a class="ml-3" href="/controllers/listOfUserCTRL.php">
    <img src="/assets/img/fleche2.png" class="img-fluid mt-3 zoom" width="40" alt="fleche de retour">
</a>';
}?>


<div class="container text-center flipInX m-3 mt-5">
    <div class="row">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-4">
                    <?php
                $file='../assets/upload/profil-'.$viewUser->id.'.jpg';
                if(file_exists($file)==true){?>
                    <img src="/assets/upload/profil-<?=$viewUser->id?>.jpg"
                        class=" mt-5 m-3 ml-4 img-fluid rounded-circle" width="400" alt="">
                    <?php }else{ ?>
                    <img src="/assets/img/user2.png" class="m-3 ml-4  img-fluid" width="180" alt="user">
                    <?php }?>
                </div>
                <div class="col-md-8">
                    <div class="card-body p-5">
                        <h5 class="card-title"><?=$viewUser->pseudo;?></h5>
                        <p class="card-text">
                            <?php
            if($viewUser->admin ==1){
                echo '<p>
                        <a class="text-secondary" href="/controllers/listOfUserCTRL.php">Administration du site</a>
                    </p>';
                    
                echo '<p><a class="text-secondary" href="/controllers/CreateSurveyCTRL.php">Creation d\'un sondage</a></p>'; 
            }?>
                        </p>
                        <p class="card-text">
                            <?php if($idUser == $_SESSION['id']){
                            echo '<a class="text-secondary" href="/controllers/updateUserCTRL.php?idUser='.$viewUser->id.'">
                                Modifier
                                <img src="/assets/img/update_1.png" class="img-fluid" width="20"
                                    alt="pictogramme modifier">
                            </a>';
                            }
                            ?>
                        </p>
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

<div class="col-6 flipInX ">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Tes derniers commentaires</h5>
            <div class="overflowDiv">
                <?php foreach($userComments as $values){
                    ?>
                <p class="card-text">
                    <img src="/assets/upload/profil-<?=$values->idOfUser ?>.jpg" class="img-fluid rounded-circle"
                        width="35" alt="<?=$values->pseudo ?>">
                    <?=$values->pseudo ?>
                </p>
                <p class="card-text"> <?=$values->comments ?></p>
                <?php }?>
            </div>

        </div>
    </div>
</div>

<?php
$mainContent = ob_get_clean();
require('../template/main.php');
?>