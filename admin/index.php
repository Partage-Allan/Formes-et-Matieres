<?php

  require "../config.php";
    mysql_connect(DB_HOST,DB_LOGIN,DB_PASS);
    mysql_select_db(DB_BDD);        
    
    $sql="SELECT * FROM news";
    $req= mysql_query($sql) or die;
    while($data=  mysql_fetch_assoc($req))
        {
           echo "<p>{$data["titre"]} -- ";
           echo "<a href=\"edit.php\">Modifier cette news<a/>";
           echo " -- <a href=\"suppr.php?id={$data["id"]}\">Supprimer cette news<a/>";
           
           echo "</p>";  
        }  
        
?>
