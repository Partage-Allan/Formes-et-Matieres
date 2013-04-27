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
    <div class="corps_presentation">
        <?php
        require "config.php";
        mysql_connect(DB_HOST,DB_LOGIN,DB_PASS);
        mysql_select_db(DB_BDD);        

        $sql="SELECT * FROM news";
        $req= mysql_query($sql) or die('Erreur SQL ! <br:>'.$sql.'<br/>'.mysql_error());
        WHILE ($data=  mysql_fetch_assoc($req)){
               echo "<h1>{$data["titre"]}</h1>";
               echo "<p>{$data["contenu"]}</p>";
               echo "<p>".date("j/n/Y G:i",strtotime($data["date"]))."</p>";
            }  

        ?>
    </div>
<?php afficher_footer();?>