<?php
$typeRight= true;
ob_start();
?>
<form method="POST" enctype="multipart/form-data">
    <div class="container mt-5">
        <h3 class="mb-5 ml-2">Creation de sondage</h3>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Type de Manga</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="typeOfManga">
                <option selected>Chosissez votre genre</option>
                <?php foreach($getListType as $value){?>
                <option value="<?= $value->id ?>"><?= $value->typeofmanga?></option>
                <?php } ?>
            </select>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="Survey1" name="Survey1">
                        <label class="custom-file-label" for="Survey1" aria-describedby="inputGroupFileAddon02">Premier
                            Sujet</label>
                    </div>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" class="form-control" placeholder="Premier sujet" name="title1"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="Survey2" name="Survey2">
                        <label class="custom-file-label" for="Survey2" aria-describedby="inputGroupFileAddon02">Deuxieme
                            Sujet</label>
                    </div>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" class="form-control" placeholder="Second sujet" name="title2"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
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