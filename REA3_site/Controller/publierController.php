<?php
include '../View/publierView.php';
include '../connexionBDD.php';
include '../Model/class_publi.php';
include '../Model/class_genre.php';

if (isset($_POST ['texte']) && isset($_POST['lien']) && isset($_POST['genre']) && 
$_POST['texte'] != ''&& $_POST['lien'] != ''&& $_POST['genre'] != ''){
    $verifLien = @fopen($_POST['lien'], "r");//verification si le lien fonctionne, @fopen ouvre le lien,*
                                                
    if ($verifLien){        //si le lien est valide alors veriflien retourne true , alors on peut continuer
        $publi = new Publication();
        $genre = new Genre;
        $publi -> setTexte_publi(strip_tags(htmlspecialchars($_POST['texte'])));
        $publi -> setLien_publi(strip_tags(htmlspecialchars($_POST['lien'])));
        $genre -> setNom_genre(strip_tags(htmlspecialchars($_POST['genre'])));

        $genre -> createGenre($bdd);

        $genre -> readGenre($bdd);
        /* je verifie si le genre saisi est present dans la bdd , s'il l'est 
        je retourne l'id du genre , s'il ne l'est pas, j'insere le genre dans 
        la bdd et retourne l'id du nouveau genre*/
/*         if (readGenre($bdd)){ //si la requete retourne qqch alors le genre est deja dans la bdd , 
            return $retourGenre['id_genre_musique'];//je retourne simplement l'id du genre
        }else{ //j'enregistre le nouveau genre 
            $genre ->createGenre($bdd);
        }
 */
        
        
    }else{echo 'le lien est invalide';}
};

?>
