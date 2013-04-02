<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="./css/f_et_m.css"/>
        <?php require ('template.php');?>
        <script type="text/javascript" src="./js/jsmenuderoulant.js"></script>
        <script type="text/javascript" src="./js/jquery-1.8.3.js"></script>
        <script type="text/javascript" src="./js/jquery-ui-1.9.2.custom.min.js"></script>
            <title>Formes et Matières</title>
    </head>

<?php afficher_header();?>
<div class="corps_creations">
    <p class="fil_ariane">Accueil > Mes créations</p>
    <h2>Mes créations</h2>
    
    <section class="choix_photos">
        <div class="categorie">
            <h1>La maison</h1>
             <img class="img_mini" src="images/fauteuil-blanc-mini.JPG" data-title="Fauteuil Blanc"/>
             <img class="img_mini" src="images/fauteuil-2-mini.JPG" data-title="Fauteuil-2"/>
             <p class="paragraphe_3">Toutes mes créations pour l'intérieur, des fauteuils, des poufs, tabourets... </p>
        </div><br/>
        <div class="categorie">
            <h1>Le jardin</h1>
             <img class="img_mini" src="images/porte-plante-RN-mini.JPG" data-title="porte-plante rouge et noir"/>
             <img class="img_mini" src="images/porte-plante-NB-mini.JPG" data-title="porte-plante noir et blanc"/>
             <img class="img_mini" src="images/jardin-rose-mini.jpg" data-title="porte-plante noir et blanc"/>
            
        </div><br/>
        <div class="categorie">
            <h1>Dans la poche</h1>
             <img class="img_mini" src="images/porte-carte-mini.JPG" data-title="porte carte"/>
             <img class="img_mini" src="images/etuit-rouge-mini.JPG" data-title="etuit-rouge"/>
             <img class="img_mini" src="images/blague-a-tabac-mini.JPG" data-title="blague à tabac"/>
            
        </div>
    </section>
              
</div>
<?php afficher_footer();?>


   