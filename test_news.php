<?php

    require "config.php";
    mysql_connect(DB_HOST,DB_LOGIN,DB_PASS);
    mysql_select_db(DB_BDD);        
    
    $sql="SELECT * FROM news";
    $req= mysql_query($sql) or die;
    while($data=  mysql_fetch_assoc($req))
        {
           echo "<h1>{$data["titre"]}</h1>";
           echo "<p>{$data["contenu"]}</p>";
           echo "<p>".date("j/n/Y G:i",strtotime($data["date"]))."</p>";
        }  
?>
