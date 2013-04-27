<?php 
/********************************************************************************************************************************/
/********************************************************afficher le header******************************************************/
/********************************************************************************************************************************/
function afficher_header() 
{
    printf("<header>");                                                                                                                         
    printf('<div id="bandeau_top">');
        printf('<a href="index.php"><h1><img src="images/logo1.png" alt="logo" class="logo"/><img src="images/titre1.png" alt="titre" class="titre"/></h1></a>');
        printf('<p class="texte_titre">Anne-Françoise Bescond</p>');
            printf('<nav>');
                printf('<ul id="menu">');
                    printf('<li class="accueil button"><a href="index.php">Accueil</a></li>');
                    printf('<li class="button"><a href="presentation.php">Présentation</a></li>');
                    printf('<li class="button"><a href="creations.php">Créations</a>');
                        printf('<ul>');
                            printf('<li class="button"><a href="#">La maison</a></li>');
                            printf('<li class="button"><a href="#">Le jardin</a></li>');
                            printf('<li class="button"><a href="#">Dans la poche !</a></li>');
                            printf('<li class="button_spe_1"><a href="#">Confection Originales</a></li>');
                        printf('</ul>');
                    printf('</li>');
                    printf('<li class="button"><a href="test_news.php">News</a></li>');
                    printf('<li class="button"><a href="#">Contact</a></li>');
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
     printf('<footer>');  
     printf('<div id="suivez_nous">');
         printf('<p>Suivez l\'actualité de Formes et Matières sur les réseaux sociaux!</p>');
             printf('<a class="infobulle" href="http://www.facebook.com"><img class="icone" src="images/ico-facebook.png" alt="facebook"/><span>Facebook</span></a>');
             printf('<a class="infobulle" href="http://www.twitter.com"><img class="icone" src="images/ico-twitter.png" alt="twitter"/><span>Twitter</span></a>');                    
     printf('</div>');
     printf('</footer>');
}

/*********************************************************footer******************************************************************/
?>