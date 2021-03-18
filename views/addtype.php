<?php
$typeRight= true;
ob_start();
if(isset($isOk)){
    echo $isOk;
}
?>
<form method="post">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <label class="mt-3">Ajout d'un nouveau type de manga</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name='type' id="basic-url" aria-describedby="basic-addon3">
                </div>
                <button type="submit" class="btn btn-secondary">Ajouter</button>
            </div>
        </div>
    </div>
</form>
<?php
$mainContent = ob_get_clean();
require('../template/main.php');
?>