<?php
ob_start();
if(isset($isOk)){
    echo $isOk;
}
if(isset($error)){
    echo $error;
}
?>
<div class="container-fluid">
    <!-- sondage -->
    <div class="row ">
        <div class="col-12 p-0">

            <?php
            if(isset($_SESSION['id'])){
                // var_dump($viewSurvey);
                foreach($viewSurvey as $values){
                if($values->HasVoted==true){ ?>
            <div class=" mt-3 align-items-center">
                <div class="d-flex flex-row">
                    <div>
                        <img src="/assets/upload/survey/1ER_Image_Pour_Sondage-<?= $values->id;?>.png"
                            alt="'.$values->title1.'" class="ml-2 img-fluid index-img" width="400">
                        <p class="mt-3 ml-3">Resultats : <?= $values->NumberV1 ?> votes</p>
                    </div>
                    <img src="../../assets/img/versus.svg" alt="Versus" width="65" class="img-fluid p-3 align-center">
                    <div>
                        <img src="/assets/upload/survey/2EME_Image_Pour_Sondage-<?= $values->id;?>.png"
                            alt="'.$values->title2.'" class="ml-2 img-fluid index-img" width="400">
                        <p class="mt-3 ml-3">Resultats : <?= $values->NumberV2 ?> votes</p>
                    </div>
                </div>
            </div>

            <?php   }else{
                 ?>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <?php foreach($getListType as $value){?>
                        <option value="<?=$values->id?>"><?=$values->typeofmanga?></option>

                        <?php
                        } ?>
                </select>
            </div>
            <div class=" mt-3 align-items-center">
                <div class="d-flex flex-row">
                    <div>
                        <a href="/index.php?idSurveyV1=<?= $values->id ?>&idType=<?=$values->id_typeofmanga?>">
                            <img src="/assets/upload/survey/1ER_Image_Pour_Sondage-<?= $values->id;?>.png"
                                alt="'.$values->title1.'" class="ml-2 img-fluid index-img zoom" width="400">
                        </a>
                    </div>
                    <img src="../../assets/img/versus.svg" alt="Versus" width="65" class="img-fluid p-3 align-center">
                    <div>
                        <a href="/index.php?idSurveyV2=<?= $values->id ?>&idType=<?=$values->id_typeofmanga?>"
                            class="zoom">
                            <img src="/assets/upload/survey/2EME_Image_Pour_Sondage-<?= $values->id;?>.png"
                                alt="'.$values->title2.'" class="ml-2md- img-fluid index-img zoom" width="400">
                        </a>
                    </div>
                </div>
            </div>
            <?php
            if(isset($_SESSION['admin']) && $_SESSION['admin']==1){?>
            <a href="/controllers/lastSurveyCtrl.php?idDeactivated=<?= $values->id;?>"
                class=" fadeInLeft btn btn-outline-secondary ml-3 mt-3 mb-3 zoom">Archiver</a>
            <a href="/controllers/updateSurveyCtrl.php?idUpdate=<?= $values->id;?>"
                class=" fadeInLeft btn btn-outline-secondary ml-3 mt-3 mb-3 zoom">Modifier</a>
            <a href="/index.php?idDeleted=<?= $values->id;?>"
                class=" fadeInLeft btn btn-outline-secondary ml-3 mt-3 mb-3 zoom">
                <img src="/assets/img/delete.png" width="20" class="img-fluid zoom" alt="poubelle">
            </a>
            <?php }
            }
            
            include(dirname(__FILE__).'/../controllers/commentviewsCTRL.php');
         }
         if(empty($viewSurvey)){ ?>
            <div class="container">
                <div class="row m-3">
                    <h2>Desolé il n'y a pas encore de sondage ﾍ(;´o｀)ﾍ</h2>
                    <img src="/assets/img/desolé.gif" class="img-fluid mt-3" width="700" alt="c'est pas si mal">
                </div>

            </div>
            <?php  
         }
        }else{?>

            <div class="container">
                <div class="row m-3">
                    <h2>Vous devez etre connecter pour avoir accés aux sondages</h2>
                    <img src="/assets/img/david.gif" class="img-fluid mt-3" width="700" alt="c'est pas si mal">
                </div>

            </div>

            <?php }
       ?>
        </div>
    </div>
    <!-- partie commentaires -->
    <!-- partie envoi de message en pc  -->


</div>
<?php
$mainContent = ob_get_clean();
require('template/main.php');
?>