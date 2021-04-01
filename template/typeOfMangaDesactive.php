<div class="container mt-3 d-block d-sm-block d-md-block d-lg-none">
                <div class="row">
                    <div class="col-10">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Genre de mangas
                            </button>
                            <div class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton">
                            <?php foreach($getListTypeDesactive as $value){?>
                                <a class="dropdown-item" href="/controllers/lastSurveyCtrl.php?idType=<?=$value->id; ?>">
                                <?=$value->typeofmanga; ?>
                                </a>
                                <?php
                                    } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>