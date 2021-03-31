<?php
$typeRightDesactive=true;
ob_start();
?>
<div class="container-fluid">
    <!-- sondage -->
    <?php
    // var_dump($viewSurveyDesactive);
    include(dirname(__FILE__).'/template/typeOfMangaDesactive.php');
    foreach($viewSurveyDesactive as $value){
        ?>
    <div class="row ">
        <div class="col-12 col-sm-12 col-md-7">
            <div class=" mt-3 align-items-center fadeInLeft">
                <h2 class="p-2">Sondages du <?= $value->created_at; ?></h2>
                <div class="d-flex flex-row p-2">
                    <div>
                        <img src="/assets/upload/survey/1ER_Image_Pour_Sondage-<?= $value->id;?>.png"
                            alt="<?php $value->title1 ; ?>" class="ml-2 img-fluid index-img" width="350">
                            <p class="mt-3 ml-3">Resultats : <?= $value->NumberV1 ?> votes</p>
                    </div>
                    <img src="../../assets/img/versus.svg" alt="Versus" width="65" class="img-fluid p-3 align-center">
                    <div>
                        <img src="/assets/upload/survey/2EME_Image_Pour_Sondage-<?= $value->id;?>.png"
                            alt="<?php $value->title2 ; ?>" class="ml-2 img-fluid index-img" width="350">
                            <p class="mt-3 ml-3">Resultats : <?= $value->NumberV2 ?> votes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
    }
    if(empty($viewSurveyDesactive)){ ?>
        <div class="container">
            <div class="row m-3">
                <h3>Desolé il n'y a pas encore d'anciens sondages ici ʕ灬￫ᴥ￩灬ʔ</h3>
                <img src="/assets/img/gintama.gif" class="img-fluid mt-3" width="700" alt="c'est pas si mal">
            </div>

        </div>
        <?php  
     }
    ?>
</div>
<?php
$mainContent = ob_get_clean();
require('../template/main.php');
?>