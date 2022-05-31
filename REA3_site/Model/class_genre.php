<?php
    class Genre{
        private $id_genre;
        private $nom_genre;
        /* private  $id_publi; */
//getter setter
        public function getId_genre(){
            return $this->id_genre;
        }
        public function setId_genre($id_genre){
            $this->id_genre = $id_genre;
        }
        public function getNom_genre(){
            return $this->nom_genre;
        }
        public function setNom_genre($nom_genre){
            $this->nom_genre = $nom_genre;
        }
/*         public function getId_publi(){
            return $this->id_publi;
        }
        public function setId_publi($id_publi){
            $this->id_publi = $id_publi;
        }
 *///methodes

        
        public function readGenre($bdd){
            $reqSelectGenre= $bdd->prepare('SELECT * FROM genres_musique 
                                        WHERE nom_genre_musique = :nom_genre_musique');
            $reqSelectGenre-> execute(array(':nom_genre_musique' =>$this->getNom_genre()));
            $retourGenre = $reqSelectGenre->fetch();

        }

        public function createGenre($bdd){
            $reqInsertGenre = $bdd ->prepare('INSERT INTO genres_musique(nom_genre_musique)
                                                VALUES(:nom_genre_musique)');
            $reqInsertGenre->execute(array(
                ':nom_genre_musique'=> $this->nom_genre
            ));

        }
    }

    

?>