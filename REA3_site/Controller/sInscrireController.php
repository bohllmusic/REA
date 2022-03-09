
<?php
    //session_start();               j'ouvre la session
    include '../View/sInscrireView.php';
    include '../connexionBDD.php';
    include '../Model/class_utilisateur.php';

    if (isset($_POST ['pseudo']) && isset($_POST['email']) && isset($_POST['nom']) &&
     isset($_POST['prenom']) && isset($_POST['mdp']) && isset($_POST['mdpConfirm']) && isset($_POST['age'])) {
        //verification si les champs sont remplis 
        if($_POST['pseudo']!= '' && $_POST['email']!='' && $_POST['nom']!=''&&
         $_POST['prenom']!=''&& $_POST['mdp']!='' && $_POST['age']!=''){
            //verification que les mdp sont identiques
            if ($_POST['mdpConfirm']==$_POST['mdp']){
                try{
                    $user = new Utilisateur();// je cree l'obet utilisateur 
                    $user -> setPseudo(htmlspecialchars($_POST['pseudo']));// je remplis les attributs grace aux setter
                    $user -> setMail(htmlspecialchars($_POST['email']));
                    $user -> setNom(htmlspecialchars($_POST['nom']));
                    $user -> setPrenom(htmlspecialchars($_POST['prenom']));
                    $user -> setMdp(htmlspecialchars($_POST['mdp']));
                    $user -> setAge(htmlspecialchars($_POST['age']));
                    $user -> setPhotoProfil(htmlspecialchars($_POST['photo_profil']));
                    $user -> setBio(htmlspecialchars($_POST['bio']));
                    
                    if($user->testDispo($bdd)==true){
                        $user->createUtilisateur($bdd);// exécution de la fonction qui crée un utilisarteur dans la bdd
                        /* $user->openSession($bdd); */
                        header("Location: ../Controller/accueilController.php");
                    }
                }
                catch(Exception $e){ 
                    die('erreur: '.$e->getMessage());
                }
            }else {echo 'les deux mots de passes saisis sont différents';}
        }else {echo 'veuillez remplir les champs obligatoires, indiqués par une astérisque';};
    }  
?>