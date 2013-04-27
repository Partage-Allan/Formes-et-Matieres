<?php
    require "../config.php";
    mysql_connect(DB_HOST,DB_LOGIN,DB_PASS);
    mysql_select_db(DB_BDD);
        extract($_POST);
        $sql="SELECT * FROM news WHERE id={$_GET["id"]}";
        $req= mysql_query($sql) or die('Erreur SQL ! <br:>'.$sql.'<br/>'.mysql_error());
        $data=  mysql_fetch_assoc($req);
?>    

<form method="post" action="creer.php"/>
<input type="hidden" value="<?php echo $data["id"]; ?>"/>
    Titre :<input type="text" name="titre" value="<?php echo $data["titre"]; ?>"/>
    <br/><br/>
    Contenu :<textarea name="contenu"><?php echo $data["contenu"]; ?></textarea>
    <br/><br/>
    <input type="submit" value="poster"/>
</form>
