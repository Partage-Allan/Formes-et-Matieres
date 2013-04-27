<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="./css/f_et_m.css"/>
        <?php require ('template.php');?>
        <script type="text/javascript" src="./js/jsmenuderoulant.js"></script>
        <script type="text/javascript" src="./js/jquery-1.8.3.js"></script>
        <script type="text/javascript" src="./js/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="galleria/galleria-1.2.9.min.js"></script>
        <title>Formes et Matières</title>
    </head>
    <?php afficher_header();?>
    <body>
        <div class="corps">
            <p class="fil_ariane">Accueil > </p>
            <div class="div_corps_gauche">
                <h2>Bienvenue chez Formes et Matières !</h2>
                <p class="paragraphe_1">
                    Formes et Matières c'est : ------------>>>>>>>   Texte d'acceuil ou autre?
                </p>
            </div>
            <div id="galleria">
                <img src="images/fauteuil-blanc.JPG" data-title="Fauteuil Blanc" data-description="Jolie fauteuil blanc recouvert de cuir piqué main.">
                <img src="images/jardin-rose.jpg" data-title="Pergolat et transat" data-description="Pergolat triangulaire ainsi que ses transats de jardin.">
                <img src="images/porte-plante-RN.JPG" data-title="Porte plante mural" data-description="Joli porte plante mural">
                <img src="images/pouf-face-a.jpg" data-title="Pouf double face" data-description="Première face d'un pouf fait main, interchangeable avec fermuture éclaire.">
                <img src="images/pouf-face-b.JPG" data-title="Pouf double face" data-description="Seconde face d'un pouf fait main, interchangeable avec fermuture éclaire.">
            </div>

            <script>
                Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
                Galleria.configure({
                                    imageCrop: true,
                                    transition: 'fade',
                                    autoplay: 7000,
                                    carousel: true,
                                    lightbox: true
                                    });
                Galleria.run('#galleria');
            </script>
            </div>
        </div>
    </body>
    <?php afficher_footer();?>
</html>