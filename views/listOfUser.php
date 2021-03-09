<?php
$typeRight= true;
ob_start();
?>
<div class="container m-2 fadeInLeft">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>Pseudo</th>
                    <th>Adresse Email</th>
                    <th>Civilité</th>
                    <th>Date de Naissance</th>
                    <th>Administrateur</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($listUser as $value){
                      ?>
                <tr>
                    <td>
                        <a href="/controllers/userPageCTRL.php?idUser=<?=$value->id?>" class="text-secondary">
                            <?php
                            $file='../assets/upload/profil-'.$value->id.'.jpg';
                            if(file_exists($file)==true){?>
                                <img src="/assets/upload/profil-<?=$value->id?>.jpg" class=" ml-4 img-fluid rounded-circle p-0" width="30" alt="">
                                <?php }else{ ?>
                                <img src="/assets/img/user.png" class=" ml-4  img-fluid" width="20" alt="user">
                               <?php }?>
                               <?= $value->pseudo ?>
                        </a> 
                    </td>
                    <td><?= $value->mail ?></td>
                    <td><?= $value->gender ?></td>
                    <td><?= $value->birthDate ?></td>
                    <td>
                        <?php if($value->admin ==1){
                        echo 'oui';
                        }else{
                        echo 'non';
                        } ?>
                    </td>
                    <td>
                    <?php
                    if($value->admin ==0){?>
                       <a href="/controllers/listOfUserCTRL.php?deleted=<?=$value->id;?>">
                            <img src="/assets/img/delete.png" class="img-fluid" width="20" alt="poubelle">
                        </a>
                       <?php }?>
                    </td>
                </tr>
                <?php       
                    }
                ?>
            </tbody>
        </table>

    </div>

</div>
<?php
$mainContent = ob_get_clean();
require('../template/main.php');
?>