<?php
    include './sInscrireView.php';
    include './connexionBDD.php';
    include './class_utilisateur.php';

    if (isset($_POST ['pseudo']) && isset($_POST['email']) && isset($_POST['nom']) &&
     isset($_POST['prenom']) && isset($_POST['mdp']) && isset($_POST['age'])) {
        try{
            $user = new Utilisateur();// je cree l'obet utilisateur 
            $user -> setPseudo($_POST['pseudo']);// je remplis les attributs grace aux setter
            $user -> setMail($_POST['email']);
            $user -> setNom($_POST['nom']);
            $user -> setPrenom($_POST['prenom']);
            $user -> setMdp($_POST['mdp']);
            $user -> setAge($_POST['age']);
            $user -> setPhotoProfil($_POST['photo_profil']);
            $user -> setBio($_POST['bio']);

            $user->createUtilisateur($bdd);// exécution de la fonction qui crée un utilisarteur dans la bdd
        }
        catch(Exception $e){ 
            die('erreur: '.$e->getMessage());
        }


    }
    else{
        echo 'veuillez remplir les champs obligatoires, indiqués par une astérisque';
    }

    
?>