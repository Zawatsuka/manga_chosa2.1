 <!-- nav bar -->
 <nav class="navbar navbar-expand-lg navbar-primary bg-img stick">
            <a class="navbar-brand d-none d-sm-none d-md-block d-lg-block rubberBand" href="#">
                <img src="../../assets/img/manga-chosa-blanc.png" width="180" height="120" alt="" loading="lazy">
            </a>
            <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none rubberBand" href="#">
                <img src="../../assets/img/logo-mobile.png" width="180" height="75" alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <div> <img src="../../assets/img/burger2.png" width="50" height="50" alt=""></div>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active zoom">
                        <a class="nav-link text-white text-change ml-md-5" href="/">Sondage<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item zoom">
                        <a class="nav-link text-white text-change ml-md-5" href="/controllers/talkCtrl.php">On Parle ?</a>
                    </li>
                    <li class="nav-item zoom">
                        <a class="nav-link text-white text-change ml-md-5" href="/controllers/lastSurveyCtrl.php">Derniers
                            Sondages</a>
                    </li>
                    <?php if(!isset($_SESSION['pseudo'])){?>
                    <li class="nav-item zoom">
                        <a class="nav-link text-white text-change ml-md-5" href="/controllers/connectCtrl.php">Connexion</a>
                    </li>
                    <li class="nav-item zoom">
                        <a class="nav-link text-white text-change ml-md-5" href="/controllers/registerCtrl.php">Inscris toi ?</a>
                    </li>
                    <?php }else{?>
                        <li class="nav-item zoom">
                        <a class="nav-link text-white text-change ml-md-5" href="/controllers/userPageCTRL.php?idUser=<?=$_SESSION['id']?>"><?= $_SESSION['pseudo']?></a>
                    </li>
                    <li class="nav-item zoom">
                        <a class="nav-link text-danger text-change ml-md-5" href="/controllers/disconnectCTRL.php">Deconnexion</a>
                    </li>
                    <?php }?>
                    
                </ul>
            </div>
        </nav>