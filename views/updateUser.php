<?php
$typeRight= true;
ob_start();
if(isset($isOk)){
    echo $isOk;
}
?>
<div class="container-fluid fadeInLeft">
    <div class="row">
        <div class="col-10">
            <form method="POST">
            <a class="ml-3" href="/controllers/userPageCTRL.php?idUser=<?=$viewUser->id;?>">
                    <img src="/assets/img/fleche2.png" class="img-fluid mt-3 zoom" width="40" alt="fleche de retour">
                    </a>
                <div class="container-fluid ml-3">
                    <div class="row">
                        <h2 class="mt-2">Modification</h2>

                       <!-- --------------- partie mail ---------- -->
                        <div class="input-group mt-3">
                            <input type="text" class="form-control" 
                            placeholder="Adresse Email ╰( ･ ᗜ ･ )╯"
                                aria-label="Dollar amount (with dot and two decimal places)"
                                 name="mail"
                                 value="<?=$viewUser->mail;?>"
                                  required>
                            <div class="input-group-append">
                                <span class="input-group-text">@</span>
                            </div>
                        </div>
                        <p class="text-danger"><?php if(isset($errorsArray['mail_error'])){
                           echo $errorsArray['mail_error'];              
                        }
                    ?></p>

                        <!-- ----------------partie pseudo------------------- -->
                        <div class="input-group mt-3">
                            <input type="text"
                             class="form-control"
                              placeholder="Pseudo ( ͡~ ͜ʖ ͡~)"
                                aria-label="Dollar amount (with dot and two decimal places)" 
                                name="pseudo" 
                                value="<?=$viewUser->pseudo;?>"
                                required>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <img src="/assets/img/user.png" class="img-fluid" width="15" alt="user">
                                </span>
                            </div>
                        </div>
                        <p class="text-danger"><?php if(isset($errorsArray['pseudo_error'])){
                           echo $errorsArray['pseudo_error'];              
                        }
                    ?></p>

                        <!-- ------------------partie Civilité----------------- -->
                        <div class="input-group mb-3 mt-3">
                            <select class="custom-select" id="inputGroupSelect02" name="gender" required>
                                <option selected><?=$viewUser->gender;?></option>
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                                <option value="Autre">Autre</option>
                            </select>
                            <div class="input-group-append">
                                <label class="input-group-text" for="inputGroupSelect02">Civilité</label>
                            </div>
                        </div>
                        <p class="text-danger"><?php if(isset($errorsArray['gender_error'])){
                           echo $errorsArray['gender_error'];              
                        }
                    ?></p>

                        <!-- ----------------partie date de naissance-------------- -->
                        <h3 class="mt-2">Anniversaire</h3>
                        <div class="input-group mt-2">
                            <input type="date"
                             class="form-control"
                                aria-label="Dollar amount (with dot and two decimal places)" 
                                name="birthdate"
                                value="<?= $viewUser->birthDate?>"
                                 required>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <img src="/assets/img/cakeisalie-100.jpg" class="img-fluid" width="15" alt="gateau">
                                </span>
                            </div>
                        </div>
                        <p class="text-danger"><?php if(isset($errorsArray['birthdate_error'])){
                           echo $errorsArray['birthdate_error'];              
                        }
                    ?></p>



                    
                        <button type="submit" class="btn btn-outline-secondary mt-3">Modifier </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
$mainContent = ob_get_clean();
require('../template/main.php');
?>