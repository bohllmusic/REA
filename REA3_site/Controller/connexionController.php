<?php
    include '../View/connexionView.php';
    include '../connexionBDD.php';
    include '../Model/class_utilisateur.php';
    
    if(isset($_POST['email'])&& isset($_POST['mdp'])){
        $user = new Utilisateur;
        $user ->setMail($_POST['email']);
        $user -> setMdp($_POST['mdp']);
        if ($user->connectUser($bdd) === true){
            echo 'connecté';
            header("Location: ../Controller/accueilController.php");
        }else{
            echo '<script language=javascript> let  error = document.getElementById("err");
            error.innerHTML= "Identifiants incorrects."</script>';
        }
        
    }

?>