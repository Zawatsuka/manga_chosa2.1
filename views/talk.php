<?php
$typeRight= true;
ob_start();
?>
 <!-- partie gauche du site -->
 <div class="container-fluid fadeInLeft">
            <!-- sondage -->
            <div class="row ">
                <div class="col-12">
                    <form class="d-flex flex-column">
                        <div>
                            <input type="text" class="m-3 p-3 name-tag zoom" placeholder="Ton Nom / Pseudo">
                        </div>
                        <div>
                            <textarea class="ml-md-3 zone-msg zoom d-md-block mw-100 w-75 w-sm-100" name="" id=""
                                rows="20" placeholder="Donne nous ton p'tit message !"></textarea>
                        </div>
                      
                        <div class="d-flex justify-content-end w-75">
                            <button class="mt-4 mr-0 p-4 zoom button-speak">Envoi ici !</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php
$mainContent = ob_get_clean();
require('../template/main.php');
?>