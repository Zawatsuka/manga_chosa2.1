<div class="col d-flex flex-column justify-content-between d-none d-sm-none d-md-block bg-right">
    <!-- liste des differents genres -->
    <ul>
    <?php foreach($getListType as $value){?>
        <a href="/index.php?idType=<?=$value->id; ?>">
            <li class="pt-5 center-text zoom"><?=$value->typeofmanga; ?></li>
        </a>
    <?php
    } 
    if(isset($_SESSION['admin']) && $_SESSION['admin']==1){?>
         <a href="/controllers/addTypeCTRL.php">
            <li class="pt-5 center-text zoom">
                <img src="/assets/img/plus_1.png" class="img-fluid" width="40" alt="">        
            </li>
        </a>
    <?php } ?>
   
    </ul>
    <div class="d-flex mb-0 justify-content-center fixImg">
        <img src="/assets/img/Chosa Chan.png" class="img-fluid mb-0 mt-5" width="350" alt="">
    </div>
</div>