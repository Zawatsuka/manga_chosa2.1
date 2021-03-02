<div class="mt-5 ml-2">
  <h2>Bienvenue <?= $pseudo ?></h2>
  <h3>Bravo vous etes inscris !</h3>
  <h4>Recapitulatif de votre inscription</h4>
  <p>Vous allez maintenant recevoir un mail de confirmation</p>
  <p>Civilité :
    <?php if($gender=='Homme'){
                      echo "Homme";
                    }else if($gender=='Femme'){
                      echo "Femme";
                    }else{
                      echo "Autre";
                    }
              ?></p>
  <p>Votre Email : <?=$mail ?? 'Vous n\'avez rien mis'?></p>
  <p>Votre Anniversaire : <?= $birthdate; ?></p>
</div>