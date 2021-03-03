<?php
$typeRight= true;
ob_start();
?>
<div class="container-fluid fadeInLeft">
    <div class="row">
        <div class="col-10">
            <?php 
                
                if($_SERVER['REQUEST_METHOD'] == 'POST' && empty($errorsArray)){
                    include(dirname(__FILE__).'/../template/goodInscription.php');
                }else{
                    include(dirname(__FILE__).'/../template/formInscription.php');  
                }
                    
            ?>
               
        </div>
    </div>
</div>
<?php
$mainContent = ob_get_clean();
require('../template/main.php');
?>