<?php
    include './sInscrireView.php';
    include './connexionBDD.php';
    include './class_utilisateur.php';

    $pseudo_utilisateur = "";
    $mail_utilisateur = "";
    $nom_utilisateur = "";
    $prenom_utilisateur = "";
    $mdp_utilisateur = "";
    $age_utilisateur = "";
    $photo_profil_utilisateur = "";
    $bio_utilisateur= "";
 

    if (isset($_POST ['pseudo']) && isset($_POST['email']) && isset($_POST['nom']) &&
     isset($_POST['prenom']) && isset($_POST['mdp']) && isset($_POST['age'])) {
        $pseudo_utilisateur = $_POST['pseudo'];
        $mail_utilisateur = $_POST['email'];
        $nom_utilisateur = $_POST['nom'];
        $prenom_utilisateur = $_POST['prenom'];
        $mdp_utilisateur = $_POST['mdp'];
        $age_utilisateur = $_POST['age'];
        $photo_profil_utilisateur = $_POST['photo_profil'];
        $bio_utilisateur= $_POST['bio'];
    }
    else{
        echo 'veuillez remplir les champs obligatoires, indiqués par une astérisque';
    }
        try{
            $user = new Utilisateur();// je cree l'obet utilisateur 
            $user -> setPseudo($pseudo_utilisateur);// je remplis les attributs grace aux setter
            $user -> setMail($mail_utilisateur);
            $user -> setNom($nom_utilisateur);
            $user -> setPrenom($prenom_utilisateur);
            $user -> setMdp($mdp_utilisateur);
            $user -> setAge($age_utilisateur);
            $user -> setPhotoProfil($photo_profil_utilisateur);
            $user -> setBio($bio_utilisateur);

            $user->createUtilisateur($bdd);
        }
        catch(Exception $e){ 
            die('erreur: '.$e->getMessage());
        }

    
?>