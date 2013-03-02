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
            <div class="div_corps_gauche">
                <h2>Présentation</h2>
                <p>Le meuble peint n'est pas encore une matière à part entière ; 
                   tantôt rattachée au meuble, tantôt à la peinture ou à la décoration, 
                   c'est une discipline qui a du mal à exister en tant que telle.<br/><br/>
                   L'objectif de ce site est de contribuer à fixer le meuble peint comme une véritable discipline :<br/>
                   1/ en permettant à tous les acteurs de donner leur contribution sous forme d'articles, de photographies et de conseil technique.<br/>
                   2/ en présentant une galerie permanente ou les créateurs puissent montrer leurs oeuvres et en indiquer le prix. 
                   L'art n'est vivant que s'il rencontre des acheteurs !<br/>
                   3/ en offrant aux fournisseurs de produits et de services concernant le meuble peint l'occasion de toucher exactement 
                   la clientèle à laquelle ils destinent leurs fabrications.<br/><br/>
                   Toutes les contributions (articles, cours, pages d'adresses, pages de conseils) que vous 
                   trouverez sur ce site sont faites gratuitement par leurs auteurs, qui sont des passionnés.<br/> 
                   Elles ne sont rémunérées... Qu'en notoriété ! L'ambition est de faire partager au maximum 
                   l'amour que nous avons pour le meuble peint et d'aider au développement de ce secteur. 
                   Lorsque la contribution est importante, nous citons amplement son auteur, et valorisons son travail du mieux 
                   que nous le pouvons. Aider à améliorer ce site est très certainement un excellent moyen de vous faire connaître !

                   Un abonnement annuel modique est demandé aux créateurs pour exposer dans la galerie. 
                   Il est destiné à couvrir les frais de mise en page et de traitement d'image nécessaires à l'harmonisation des présentations.<br/> 
                   Le traitement d'image est quelque chose d'assez technique et difficile si l'on veut que le résultat soit heureux. 
                   Par souci d'homogénéité du site et de qualité de la présentation nous harmonisons en les détourant toutes 
                   les images que nous publions. C'est beaucoup de travail, mais cela évite le vacarme visuel lorsque les pages sont riches. 
                   Nous nous réservons également la possibilité de ne pas publier les dossiers insuffisamment solides.

                   Nous accueillons volontiers toute publicité sur le site du meuble peint. Ainsi pourrons-nous améliorer chaque jour 
                   la qualité des prestations qui vous sont offertes. Vous pouvez consulter le tarif des annonces sur cette page.<br/>
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