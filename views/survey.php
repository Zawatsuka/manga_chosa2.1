<?php
ob_start();
?>
<div class="container-fluid">
    <!-- sondage -->
    <div class="row ">
        <div class="col-12 p-0">
            <div class=" mt-3 align-items-center fadeInLeft">
                <div class="d-flex flex-row">
                    <div>
                        <a data-toggle="collapse" href="#collapseExample" onclick="move()" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img src="../../assets/img/jotaro.png" alt="jotaro Kujo"
                                class="ml-2 img-fluid index-img zoom">
                        </a>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                        role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 60%"> 60%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="../../assets/img/versus.svg" alt="Versus" width="65" class="img-fluid p-3 align-center">
                    <div>
                        <a data-toggle="collapse" href="#collapseExample" onclick="move()" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img src="../../assets/img/josuke.png" alt="josuke Higashikata"
                                class="ml-2md- img-fluid index-img zoom">
                        </a>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                        role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 40%"> 40%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- partie commentaires -->
            <!-- partie envoi de message en pc  -->
            <?php
            include(dirname(__FILE__).'/../controllers/commentviewsCTRL.php');
            ?>
        </div>
    </div>
</div>
    <?php
$mainContent = ob_get_clean();
require('template/main.php');
?>