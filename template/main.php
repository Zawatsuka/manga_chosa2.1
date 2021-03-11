<main>
    <div id="leftContent">
        <?= $mainContent ?? 'erreur du chargement du contenu';?>
    </div>
    <aside id="rightContent">
        <?php
        if(isset($typeRight) && !empty($typeRight)){
            include(dirname(__FILE__).'/right2.php');
        }else if(isset($typeRightDesactive) && !empty($typeRightDesactive)){
            include(dirname(__FILE__).'/rightDesactive.php');
        }else{
            include(dirname(__FILE__).'/Right.php'); 
        }
        
        ?>
    </aside>
    
</main>