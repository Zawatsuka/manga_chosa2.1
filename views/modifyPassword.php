<?php
$typeRight= true;
ob_start();
if(isset($isOk)){
  echo $isOk;
}
?>
<div class="container">
    <div class="row">
        <div class="col-10">
          <?php
          
          if(isset($pass_verify)&& $pass_verify==true){
            include(dirname(__FILE__).'/../template/formUpdateMP.php');
        }else if(isset($pass_verify)&& $pass_verify==false){
          ?>
            <div class="alert alert-danger" role="alert">
            Mauvais mot de passe ٩(๑`^´๑)۶

          </div>
          <?php
            include(dirname(__FILE__).'/../template/formMP.php'); 
        }else{
            include(dirname(__FILE__).'/../template/formMP.php'); 
        }
            ?>

        </div>

    </div>
</div>
<?php
$mainContent = ob_get_clean();
require('../template/main.php');
?>