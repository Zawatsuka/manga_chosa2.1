<?php
$typeRightTalk= true;
ob_start();
if(isset($_SESSION['id'])){
?>
 <!-- partie gauche du site -->
 <div class="container-fluid fadeInLeft">
            <!-- sondage -->
            <div class="row ">
                <div class="col-12">
                    <form method="POST" class="d-flex flex-column">
                        <div>
                            <input type="text" class="m-3 p-3 name-tag zoom" placeholder="Ton Nom / Pseudo" name='pseudo'>
                        </div>
                        <div>
                            <textarea class="ml-md-3 zone-msg zoom d-md-block mw-100 w-75 w-sm-100" name="message" 
                                rows="20" placeholder="Donne nous ton p'tit message !"></textarea>
                        </div>
                      
                        <div class="d-flex justify-content-end w-75">
                            <button type="submit" class="mt-4 mr-0 p-4 zoom button-speak">Envoi ici !</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php
}else{?>

<div class="container">
                <div class="row m-3">
                    <h2>Vous devez être connecté pour pouvoir envoyé un message</h2>
                    <img src="/assets/img/natsu.gif" class="img-fluid mt-3" width="700" alt="c'est pas si mal">
                </div>

            </div>

<?php
}
$mainContent = ob_get_clean();
require('../template/main.php');
?>