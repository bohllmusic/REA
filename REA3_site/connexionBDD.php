<?php
    $bdd = new PDO('mysql:host=localhost;  dbname=diggin_nuggets', 'root','',    //CONNEXION A LA BDD en stockant la bdd dans la variable $bdd
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $bdd->exec("set names utf8");
    
?>