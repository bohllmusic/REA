<?php    
    include '../View/connexionView.php';
    include '../connexionBDD.php';
    include '../Model/class_utilisateur.php';
    
    if(isset($_POST['email'])&& isset($_POST['mdp'])){
        $user = new Utilisateur;
        $user ->setMail(htmlspecialchars($_POST['email'])); //htmlspecialchars pour convertir les caractères spéciaux en entités HTML. Cela évite les injections de code dans mes input
        $user -> setMdp(htmlspecialchars($_POST['mdp']));
        if ($user->connectUser($bdd)){
            echo 'connecté';
            header("Location: ../Controller/accueilController.php");
        }else{
            echo '<script language=javascript> let  error = document.getElementById("err");
            error.innerHTML= "Identifiants incorrects."</script>';
        }
    }
?>