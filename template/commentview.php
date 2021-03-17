<div class="container-fluid fadeInLeft mt-3 ml-3">
    <div class="row">
        <form method="POST">
            <div class="input-group mt-5">
                <input type="text" class="form-control" name="comments" placeholder="ton commentaire..."
                    aria-label="ton commentaire..." aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="bg-comment m-3 fadeInLeft bg-border">
<?php foreach($viewsComment as $comment){?>
    <div>
        <h3 class="mt-4 ml-4 text-comment"><img src="/assets/img/user.png" width="20" class="img-fluid" alt="">
        <?=$comment->id_user?>
        </h3>
    </div>
    <div>
        <p class="comment ml-4 "><?=$comment->comments?></p>
    </div>
    <?php } ?>


</div>