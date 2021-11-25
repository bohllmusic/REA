<?php 
    class Utilisateur{
        private $id_utilisateur;
        private $pseudo_utilisateur;
        private $mail_utilisateur;
        private $nom_utilisateur;
        private $prenom_utilisateur;
        private $mdp_utilisateur;
        private $age_utilisateur;
        private $photo_profil_utilisateur;
        private $bio_utilisateur;
        private $id_roles;
    

    //GETTERS 
        public function getId(){
            return $this -> id_utilisateur; 
        }
        public function getPseudo(){
            return $this -> pseudo_utilisateur; 
        }
        public function getMail(){
            return $this -> mail_utilisateur; 
        }
        public function getNom(){
            return $this -> nom_utilisateur; 
        }
        public function getPrenom(){
            return $this -> prenom_utilisateur; 
        }
        public function getMdp(){
            return $this -> mdp_utilisateur; 
        }
        public function getAge(){
            return $this -> age_utilisateur; 
        }
        public function getPhotoProfil(){
            return $this -> photo_profil_utilisateur; 
        }
        public function getBio(){
            return $this -> bio_utilisateur; 
        }
        public function getIdRoles(){
            return $this -> id_roles; 
        }

    //SETTERS

        public function setId($new_id_utilisateur){
            $this -> id_utilisateur = $new_id_utilisateur;
        }
        public function setPseudo($new_pseudo_utilisateur){
            $this -> pseudo_utilisateur = $new_pseudo_utilisateur;
        }
        public function setMail($new_mail_utilisateur){
            $this -> mail_utilisateur = $new_mail_utilisateur;
        }
        public function setNom($new_nom_utilisateur){
            $this -> nom_utilisateur = $new_nom_utilisateur;
        }
        public function setPrenom($new_prenom_utilisateur){
            $this -> prenom_utilisateur = $new_prenom_utilisateur;
        }
        public function setMdp($new_mdp_utilisateur){
            $this -> mdp_utilisateur = $new_mdp_utilisateur;
        }
        public function setAge($new_age_utilisateur){
            $this -> age_utilisateur = $new_age_utilisateur;
        }
        public function setPhotoProfil($new_photo_profil_utilisateur){
            $this -> photo_profil_utilisateur = $new_photo_profil_utilisateur;
        }
        public function setBio($new_bio_utilisateur){
            $this -> bio_utilisateur = $new_bio_utilisateur;
        }
        public function setIdRoles($new_id_roles){
            $this -> id_roles = $new_id_roles;
        }

        //methode create user
        public function createUtilisateur($bdd) {
          
            
            try{
            
                //requête ajout d'un utilisateur
                $req = $bdd->prepare('INSERT INTO utilisateurs (pseudo_utilisateur, mail_utilisateur, nom_utilisateur, prenom_utilisateur,
                mdp_utilisateur, age_utilisateur, photo_profil_utilisateur, bio_utilisateur) 
                VALUES (:pseudo_utilisateur, :mail_utilisateur, :nom_utilisateur, :prenom_utilisateur, :mdp_utilisateur, 
                :age_utilisateur, :photo_profil_utilisateur, :bio_utilisateur)');
                //éxécution de la requête SQL
                $req->execute(array(
                    'pseudo_utilisateur' => $this->getPseudo(),
                    'mail_utilisateur' => $this->getMail(),
                    'nom_utilisateur' => $this->getNom(),                                                                 
                    'prenom_utilisateur' => $this->getPrenom(),                                                                 
                    'mdp_utilisateur' => $this->getMdp(),                                                                 
                    'age_utilisateur' => $this->getAge(),                                                                 
                    'photo_profil_utilisateur' => $this->getPhotoProfil(),                                                                 
                    'bio_utilisateur' => $this->getBio()                                                               
                ));
            }
            catch(Exception $e){
            
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }        
        }
    }


?>