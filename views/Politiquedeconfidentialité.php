<?php
include(dirname(__FILE__).'/../template/header.php');
$typeRight= true;
ob_start();
?>
<div class="container">
    <div class="row">
        <div class="col-12 p-3">
            <h3>Politique de confidentialité et de protection des données
                personnelles (avril 2021)</h3>
            <p>Manga Chosa édite le site Internet www.mangachosa.fr
            </p>
            <p>
                Manga Chosa a créé cette politique de confidentialité et de protection des
                données personnelles, afin de communiquer sa politique et ses pratiques en matière de collecte,
                d'utilisation et de divulgation des informations vous concernant, qui auront été obtenues via le Site
                Internet.</p>

            <p>Veuillez lire attentivement cette Politique de Confidentialité. Manga Chosa
                peut la modifier à tout moment. Vous pouvez prendre connaissance de la version la plus récente de cette
                Politique de Confidentialité en consultant la rubrique « Politique de Confidentialité » du Site
                Internet.</p>

            <p>Si vous décidez d'utiliser le Site Internet, vous acceptez que Manga Chosa collecte, utilise et divulgue
                des informations vous concernant, notamment des informations
                personnelles, dans les conditions définies dans la présente Politique de Confidentialité.</p>

            <p>
                Si vous n'acceptez pas les termes de cette Politique de Confidentialité ou toute modification apportée à
                ces termes, nous vous prions de bien vouloir quitter le Site Internet.
            </p>
            <h5>
                1. Quelles sont les informations collectées sur notre Site Internet ?
            </h5>
            <p>
                Les information collectés sur le site web sont: Pseudo, adresse-mail, genre et la date de naissance.

            </p>
            <h5>
                2. Comment sont utilisées vos données personnelles ?
            </h5>
            <ul>
                <li>-Quand l'utilisateur s'inscrit ses données sont stockés en base de données.</li>
                <li>-Lorsque l'utilisateur commente son commentaire est envoyé en base de donnée.</li>
                <li>-Et lorsque l'utilisateur vote, son vote est envoyé en base de données.</li>
            </ul>
            <h5>
                3. Confidentialité et Sécurité
            </h5>
            <p>
                Toutes les données personnelles collectées à travers le Site Internet sont strictement confidentielles
                et ne seront accessibles qu’aux personnes autorisées de Manga Chosa ou
                des prestataires de services agissant pour son compte et sous sa responsabilité.

                Manga Chosa a mis en œuvre des mesures de sécurité pour protéger les informations personnelles que vous
                nous fournissez, notamment contre les accès et utilisations non
                autorisés. Veuillez être conscient, toutefois, qu'aucune transmission de données sur Internet n'est
                sécurisée à 100 % et que toutes les informations communiquées en ligne peuvent être potentiellement
                interceptées et utilisées par d'autres personnes que le destinataire souhaité.
            </p>
            <h5>
                4. Modifications et mises à jour de la Politique de Confidentialité
            </h5>
            <p>En utilisant le Site Internet, vous acceptez la collecte, l'utilisation et la divulgation de vos
                informations de la manière décrite dans cette Politique de Confidentialité. Cette Politique de
                Confidentialité traduit les pratiques professionnelles en vigueur au sein de Manga Chosa, elle peut être
                modifiée et mise à jour. En cas de modification ou de mise à jour, la Politique de Confidentialité
                révisée sera mise en ligne sur le Site Internet f, avec mention de la dernière date de mise à jour.
                Veuillez vérifier régulièrement le Site Internet, pour rester informé de tout changement ou mise à jour
                de la Politique de Confidentialité et des pratiques de Manga Chosa.

                Si vous autorisez Manga Chosa à conserver dans sa base de données
                des utilisateurs les informations confidentielles que vous fournissez sur ce Site Internet et que LManga
                Chosa a l'intention de divulguer ces informations à des tiers d'une manière qui ne figure pas dans cette
                Politique de Confidentialité, Manga Chosa vous en avertira par écrit et vous fournira la possibilité de
                refuser tout autre usage ou divulgation de vos informations personnelles dans ce cadre.</p>
            <h5>
                5. Vos droits concernant vos données personnelles
            </h5>
            <p>
                Conformément à la réglementation en vigueur, vous pouvez contacter Manga chosa, à tout instant, afin
                d’exercer vos droits d’accès, de rectification, d’effacement et de portabilitédes informations que vous
                avez fournies à Manga Chosa, ainsi que votre
                droit de limiter et de vous opposer au traitement de ces informations en contactant notre service
                d’information (voir ci-dessous la section "Nous contacter").
                Vous avez également la possibilité d’introduire une réclamation auprès d’une autorité de contrôle, telle
                que la CNIL en France.S'il y a lieu, vous devez vous assurer de fournir à Manga Chosa les mises à jour
                ou changements des informations vous concernant, y compris notamment celles relatives à votre adresse
                email afin de nous permettre d'expédier les éventuels documents d’information demandés à la bonne
                adresse et de vous contacter au sujet de celle-ci en cas de nécessité.
            </p>
            <h5>
                6. Nous contacter
            </h5>
            <p>
                En cas de questions sur la Politique de Confidentialité ou pour toute autre requête en matière de
                protection des données personnelles, vous pouvez contacter notre service d’information en téléphonant au
                0642075850 , ou en nous écrivant par courrier électronique à manga@chosa.fr ou postal au 12 rue du bois
                Tournant 75008 PARIS.
            </p>
        </div>
    </div>
</div>




<?php
$mainContent = ob_get_clean();
require('../template/main.php');
include(dirname(__FILE__).'/../template/footer.php');
?>