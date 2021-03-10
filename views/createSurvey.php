<?php
$typeRight= true;
ob_start();
var_dump($_FILES);
?>
<form method="POST" enctype="multipart/form-data">
<div class="container mt-5">
    <h3 class="mb-5 ml-2">Creation de sondage</h3>
    <div class="row">
        <div class="col-6">
            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="Survey1" name="Survey1">
                    <label class="custom-file-label" for="Survey1"
                        aria-describedby="inputGroupFileAddon02">1er sondage</label>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="Survey2" name="Survey2">
                    <label class="custom-file-label" for="Survey2"
                        aria-describedby="inputGroupFileAddon02">Deuxieme sondage</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-secondary mb-3 mt-3 ml-3">uploader Images</button>
    </div>
</div>
</form>
<?php
$mainContent = ob_get_clean();
require('../template/main.php');
?>