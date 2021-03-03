<form method="POST">
                <h2>Modification du mot de passe</h2>
                <p>Pour le modifier veuillez ecrire le mot de passe actuel : </p>
                <div class="input-group mb-3 mt-3">
                    <input type="password" class="form-control" placeholder="Mot de passe"
                        aria-label="Recipient's username" aria-describedby="button-addon2" name="password" required>
                </div>
                <p class="text-danger"><?php if(isset($errorsArray['password_error'])){
                           echo $errorsArray['password_error'];              
                        }
                    ?></p>
                <button type="submit" class="btn btn-outline-secondary mt-3">Valider</button>
            </form>