<div class="container-fluid fadeInLeft mt-3 ml-3">
    <div class="row">
        <form method="POST" action="/index.php?idType=<?=$values->id_typeofmanga?>">
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
<?php
// var_dump($viewsComment);
foreach($viewsComment as $comment){?>
    <div>
        <h3 class="mt-4 ml-2 text-comment">
        <?php
        $file='assets/upload/profil-'.$comment->idOfUser.'.jpg';
        if(file_exists($file)==true){?>
            <img src="/assets/upload/profil-<?=$comment->idOfUser?>.jpg" class=" ml-4 img-fluid rounded-circle p-0" width="33" alt="">
            <?php }else{ ?>
            <img src="/assets/img/user.png" class=" ml-4  img-fluid" width="10" alt="user">
           <?php }?>
        <?=$comment->pseudo?>
        </h3>
    </div>
    <div>
        <p class="comment ml-5 "><?=$comment->comments?></p>
    <?php if($_SESSION['id']==$comment->idOfUser){?>
        <a class="ml-5 text-secondary" 
        href="/controllers/updateCommentctrl.php?idComm=<?=$comment->idOfComment ?>">modifier</a>
        <a class=" ml-1 text-secondary" 
        href="/controllers/commentviewsCTRL.php?idDeleted=<?=$comment->idOfComment?>">
        supprimer
        </a>
        <?php } ?>
    </div>
    <?php } ?>


</div>