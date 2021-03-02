<main>
    <div id="leftContent">
        <?= $mainContent ?? 'erreur du chargement du contenu';?>
    </div>
    <aside id="rightContent">
        <?php isset($typeRight) && !empty($typeRight) ? include(dirname(__FILE__).'/right2.php') : include(dirname(__FILE__).'/Right.php');?>
    </aside>
    
</main>