<?php
$typeRight= true;
ob_start();
?>
<div class="container mt-5">
<h3 class="mb-5 ml-2">Creation de sondage</h3>
    <div class="row">
        <div class="col-6">
            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                    <label class="custom-file-label" for="inputGroupFile02"
                        aria-describedby="inputGroupFileAddon02">Choose file</label>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                    <label class="custom-file-label" for="inputGroupFile02"
                        aria-describedby="inputGroupFileAddon02">Choose file</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-secondary mb-3 mt-3 ml-3">Creation</button>
    </div>
</div>
<?php
$mainContent = ob_get_clean();
require('../template/main.php');
?>