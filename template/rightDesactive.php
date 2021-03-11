<div class="col d-flex flex-column justify-content-between d-none d-sm-none d-md-block bg-right">
    <!-- liste des differents genres -->
    <ul>
    <?php foreach($getListTypeDesactive as $value){?>
        <a href="/controllers/lastSurveyCtrl.php?idType=<?=$value->id; ?>">
            <li class="pt-5 center-text zoom"><?=$value->typeofmanga; ?></li>
        </a>
    <?php
    } ?>
    </ul>
    <div class="d-flex mb-0 justify-content-center fixImg">
        <img src="../../assets/img/chosachan2.png" class="img-fluid mb-0 mt-5" width="250" alt="">
    </div>
</div>