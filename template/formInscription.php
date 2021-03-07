<form method="POST">
    <div class="container-fluid ml-3">
        <div class="row">
            <h2 class="mt-2">Incription</h2>
            <div class="input-group mt-3">
                <input type="text" class="form-control" placeholder="Adresse Email ╰( ･ ᗜ ･ )╯"
                    aria-label="Dollar amount (with dot and two decimal places)" name="mail" required>
                <div class="input-group-append">
                    <span class="input-group-text">@</span>
                </div>
            </div>
            <p class="text-danger"><?php if(isset($errorsArray['mail_error'])){
                           echo $errorsArray['mail_error'];              
                        }
                    ?></p>


            <div class="input-group mt-3">
                <input type="text" class="form-control" placeholder="Pseudo ( ͡~ ͜ʖ ͡~)"
                    aria-label="Dollar amount (with dot and two decimal places)" name="pseudo" required>
                <div class="input-group-append">
                    <span class="input-group-text">
                        <img src="/assets/img/user.png" class="img-fluid" width="15" alt="user">
                    </span>
                </div>
            </div>
            <p class="text-danger"><?php if(isset($errorsArray['pseudo_error'])){
                           echo $errorsArray['pseudo_error'];              
                        }
                    ?></p>


            <div class="input-group mb-3 mt-3">
                <input id="pass" type="password" class="form-control" placeholder="Mot de passe" aria-label="Recipient's username"
                    aria-describedby="button-addon2" name="password" required>
            </div>
            <p class="sizeMP ml-2">Dans le mot de passe il doit y avoir...</p>
            <ul id="message">
                <li class="sizeMP invalid" id="numberOfCharacter">Minimum 8 caracteres</li>
                <li class="sizeMP invalid" id="tinyCase">Des minuscules</li>
                <li class="sizeMP invalid" id="upperCase">des majuscules</li>
                <li class="sizeMP invalid" id="number">Des chiffres</li>
                <li class="sizeMP invalid" id="specialCharacter">Des caracteres speciaux(#?!@$%^&*-)</li>
            </ul>
            <p class="text-danger"><?php if(isset($errorsArray['password_error'])){
                           echo $errorsArray['password_error'];              
                        }
                    ?></p>


            <div class="input-group mb-3 ">
                <input type="password" class="form-control" placeholder="Retape le, on sait jamais ^^"
                    aria-label="Recipient's username" aria-describedby="button-addon2" name="password" required>
            </div>
            <p class="text-danger"><?php if(isset($errorsArray['password_error'])){
                           echo $errorsArray['password_error'];              
                        }
                    ?></p>

            <div class="input-group mb-3">
                <select class="custom-select" id="inputGroupSelect02" name="gender" required>
                    <option selected>Choisissez ici</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                    <option value="Autre">Autre</option>
                </select>
                <div class="input-group-append">
                    <label class="input-group-text" for="inputGroupSelect02">Civilité</label>
                </div>
            </div>
            <p class="text-danger"><?php if(isset($errorsArray['gender_error'])){
                           echo $errorsArray['gender_error'];              
                        }
                    ?></p>


            <h3 class="mt-2">Anniversaire</h3>
            <div class="input-group mt-2">
                <input type="date" class="form-control" aria-label="Dollar amount (with dot and two decimal places)"
                    name="birthdate" required>
                <div class="input-group-append">
                    <span class="input-group-text">
                        <img src="/assets/img/cakeisalie-100.jpg" class="img-fluid" width="15" alt="gateau">
                    </span>
                </div>
            </div>
            <p class="text-danger"><?php if(isset($errorsArray['birthdate_error'])){
                           echo $errorsArray['birthdate_error'];              
                        }
                    ?></p>
            <button type="submit" class="btn btn-outline-secondary mt-3">S'inscrire </button>
        </div>
    </div>
</form>