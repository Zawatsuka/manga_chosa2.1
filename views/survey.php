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

            <?php foreach($viewSurvey as $values){?>
            <div class=" mt-3 align-items-center">
                <div class="d-flex flex-row">
                    <div>
                        <a href="/index.php?vote2=<?=$_SESSION['id']?>">
                            <img src="/assets/upload/survey/1ER_Image_Pour_Sondage-<?= $values->id;?>.png"
                                alt="'.$values->title1.'" class="ml-2 img-fluid index-img zoom" width="400">
                        </a>
                    </div>
                    <img src="../../assets/img/versus.svg" alt="Versus" width="65" class="img-fluid p-3 align-center">
                    <div>
                        <a href="/index.php?vote1=<?= $_SESSION['id'];?>" class="zoom">
                            <img src="/assets/upload/survey/2EME_Image_Pour_Sondage-<?= $values->id;?>.png"
                                alt="'.$values->title2.'" class="ml-2md- img-fluid index-img zoom" width="400">
                        </a>
                    </div>
                </div>
            </div>
            <?php if(isset($_SESSION['admin']) && $_SESSION['admin']==1){?>
            <a href="/controllers/lastSurveyCtrl.php?idDeactivated=<?= $values->id;?>" class=" fadeInLeft btn btn-outline-secondary ml-3 mt-3 mb-3">Archiver</a> 
            <?php }
         } ?>
        </div>
    </div>
    <!-- partie commentaires -->
    <!-- partie envoi de message en pc  -->
    <?php
            include(dirname(__FILE__).'/../controllers/commentviewsCTRL.php');
            ?>

</div>
<?php
$mainContent = ob_get_clean();
require('template/main.php');
?>