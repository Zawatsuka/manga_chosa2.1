<div class="container-fluid fadeInLeft mt-3 ml-3">
    <div class="row">
        <form method="POST">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="comments" placeholder="ton commentaire..."
                aria-label="ton commentaire..." aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Envoyer</button>
            </div>
        </div>
        </form>
    </div>
</div>

<div class="bg-comment mt-3 mr-3 ml-3 fadeInLeft bg-border">
    <?php foreach($viewsComment as $comment){?>
    <div>
    
        <h3 class="mt-4 ml-4 text-comment"><?= $_SESSION['pseudo']?></h3>
        <p class="comment "><?= $comment->comments;?></p>
    </div>
    <?php }?>
</div>