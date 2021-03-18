<?php
$typeRight= true;
ob_start();
if(isset($isOk)){
    echo $isOk;
}
?>
<form action="#" method="post">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <label class="mt-3">Modification du commentaire</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name='comments' id="basic-url" aria-describedby="basic-addon3" value="<?=$CommentValue->comments?>">
                </div>
                <button type="submit" class="btn btn-secondary">Modifier</button>
            </div>
        </div>
    </div>
</form>
<?php
$mainContent = ob_get_clean();
require('../template/main.php');
?>