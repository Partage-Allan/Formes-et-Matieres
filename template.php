<?php 
/********************************************************************************************************************************/
/********************************************************afficher le header******************************************************/
/********************************************************************************************************************************/
function afficher_header() 
{
    printf('<header>)\n');
    printf('<div id="bandeau_top">');
        printf('<h1><img src="images/logo1.png" alt="logo" class="logo"/><img src="images/titre1.png" alt="titre" class="titre"/></h1>');
        printf('<p class="texte_titre">Anne-Françoise Bescond</p>');
            printf('<nav id="menu">');
                printf('<ul>');
                    printf('<li class="accueil button"><a href="index.php">Accueil</a></li>');
                    printf('<li class="button"><a href="#">Création</a>');
                        printf('<ul>');
                            printf('<li class="button"><a href=".php">Maison et jardin</a></li>');
                            printf('<li class="button"><a href="#">Sellerie</a></li>');
                            printf('<li class="button"><a href="#">Divers</a></li>');
                        printf('</ul>');
                            printf('</li>');
                            printf('<li class="button"><a class="bouton" href="">Contact</a></li>');
                            printf('<li class="button"><a href="#">Commentaires</a></li>');
                printf('</ul>');
            printf('</nav>');
    printf('</div>');
printf('</header>');
}
/*********************************************************************************************************************************/
/*********************************************************header******************************************************************/
/*********************************************************************************************************************************/
/********************************************************afficher le footer*******************************************************/
function afficher_footer()
{
     printf('<footer>)');  
     printf('<div id="suivez_nous">)\n');
         printf('<p>Suivez l\'actualité de Formes et Matières sur les réseaux sociaux!</p>');
             printf('<a class="infobulle" href="http://www.facebook.com"><img class="icone" src="images/ico-facebook.png" alt="facebook"/><span>Facebook</span></a>)\n');
             printf('<a class="infobulle" href="http://www.twitter.com"><img class="icone" src="images/ico-twitter.png" alt="twitter"/><span>Twitter</span></a>)\n');                    
     printf('</div>)\n');
 printf('</footer>)');
}
?>
/*********************************************************footer******************************************************************/