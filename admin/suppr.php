<?php
    require "../config.php";
    mysql_connect(DB_HOST,DB_LOGIN,DB_PASS);
    mysql_select_db(DB_BDD);
    $sql = 'DELETE FROM news WHERE id='.$_GET["id"].'';
    $req = mysql_query($sql) or die('Erreur SQL ! <br:>'.$sql.'<br/>'.mysql_error());
    header ('Location: index.php');
?>
