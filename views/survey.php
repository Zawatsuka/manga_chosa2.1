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
            <div class="d-flex align-items-center ml-3 mt-3 fadeInLeft">
                <h2 class="title-comment d-none d-sm-none d-md-block">Commentaires </h2>
                <input class="ml-4 d-none d-sm-none d-md-block" type="text" placeholder="Ton commentaire..." size="55">
                <a href="#"><img src="../../assets/img/fleche.png" class="img-fluid zoom d-none d-sm-none d-md-block"
                        width="30" alt=""></a>
            </div>
            <!-- partie envoi de message en mobile  -->
            <div class="fadeInLeft">
                <h2 class="title-comment text-center d-block d-sm-block d-md-none">Commentaires </h2>
                <div class="d-flex justify-content-center">
                    <input class="ml-4 d-block d-sm-block d-md-none" type="text" placeholder="ton commentaire..."
                        size="30">
                    <a href="#"><img src="../../assets/img/fleche.png"
                            class="img-fluid zoom d-block d-sm-block d-md-none" width="30" alt=""></a>
                </div>
            </div>
            <div class="bg-comment mt-3 mr-3 ml-3 fadeInLeft bg-border">
                <div>
                    <div class="d-flex align-center">
                        <img src="../../assets/img/mr-Robot.png" width="50" class="img-fluid mt-4 ml-4" alt="">
                        <h3 class="mt-4 ml-4 text-comment">Mr_Robot_23</h3>
                    </div>
                    <p class="comment "> Trop cool !</p>

                </div>
            </div>
        </div>
    </div>
</div>
    <?php
$mainContent = ob_get_clean();
require('template/main.php');
?>