<form method="post" action="creer.php"/>
    Titre :<input type="text" name="titre"/>
    <br/><br/>
    Contenu :<textarea name="contenu"></textarea>
    <br/><br/>
    <input type="submit" value="Poster"/>
</form>
<?php

  require "../config.php";
    mysql_connect(DB_HOST,DB_LOGIN,DB_PASS);
    mysql_select_db(DB_BDD);        
    
    $sql="SELECT * FROM news";
    $req= mysql_query($sql) or die('Erreur SQL ! <br:>'.$sql.'<br/>'.mysql_error());
    while($data= mysql_fetch_assoc($req))
        {
           echo "<p>{$data["titre"]} -- ";
           echo "<a href=\"edit.php?id={$data["id"]}\">Modifier cette news<a/>";
           echo " -- <a href=\"suppr.php?id={$data["id"]}\">Supprimer cette news<a/>";
           echo "</p>";  
        }  
        
?>
