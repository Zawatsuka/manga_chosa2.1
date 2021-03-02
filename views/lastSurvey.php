<?php
ob_start();
?>
<div class="container-fluid">
    <!-- sondage -->

    <div class="row ">
        <div class="col-12 col-sm-12 col-md-7">
            <div class=" mt-3 align-items-center fadeInLeft">
                <h2 class="p-2">Sondages du 23/11/2020</h2>
                <div class="d-flex flex-row p-3">
                    <div>
                        <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                            aria-controls="collapseExample">
                            <img src="../../assets/img/luffy.png" alt="Monkey D. Luffy"
                                class="ml-2 img-fluid index-img zoom">
                        </a>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                        role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 70%"> 70%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="../../assets/img/versus.svg" alt="Versus" width="65" class="img-fluid p-3 align-center">
                    <div>
                        <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                            aria-controls="collapseExample">
                            <img src="../../assets/img/Ichigo.png" alt="Ichigo Kurosaki"
                                class="ml-2md- img-fluid index-img zoom">
                        </a>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                        role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 30%"> 30%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$mainContent = ob_get_clean();
require('../template/main.php');
?>