<h2>Modification du mot de passe</h2>
<form method="POST">
    <div class="input-group mb-3 mt-3">
        <input type="password" class="form-control" placeholder="Mot de passe" aria-label="Recipient's username"
            aria-describedby="button-addon2" name="password" required>
    </div>
    <p class="sizeMP ml-2">Dans le mot de passe il doit y avoir...</p>
    <ul>
        <li class="sizeMP">Minimum 8 caracteres</li>
        <li class="sizeMP">Des lettres et des majuscules</li>
        <li class="sizeMP">Des chiffres</li>
        <li class="sizeMP">Des caracteres speciaux(#?!@$%^&*-)</li>
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
    <button type="submit" class="btn btn-outline-secondary mt-3">Modifier</button>
</form>