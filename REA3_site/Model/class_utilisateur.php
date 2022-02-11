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
        //methode testDispo
        public function testDispo($bdd){
            //requete select pour verifier si l'adresse mail et le pseudo sont deja utilisés
              //adresse mail:
            $reqSelectMail= $bdd->prepare ('SELECT * FROM utilisateurs WHERE mail_utilisateur = :mail_utilisateur');
            $reqSelectMail -> execute(array(':mail_utilisateur'=>$this->getMail()));
            $dispoMail=$reqSelectMail->fetch();
              //pseudo:
            $reqSelectPseudo= $bdd->prepare ('SELECT * FROM utilisateurs WHERE pseudo_utilisateur = :pseudo_utilisateur');
            $reqSelectPseudo->execute(array(':pseudo_utilisateur' =>$this->getPseudo()));
            $dispoPseudo=$reqSelectPseudo->fetch();
            if ($dispoMail){
            
                echo 'Un compte est déjà enregistré avec cette adresse mail.';
                return false;
            }else if ($dispoPseudo) {
                echo 'Ce pseudo est déjà utilisé.';
                return false;
            }else{
                return true;
            }
        }

        //methode create user
        public function createUtilisateur($bdd) {
          
              
            try{
            
                //requête ajout d'un utilisateur
                $reqInsert = $bdd->prepare('INSERT INTO utilisateurs (pseudo_utilisateur, mail_utilisateur, nom_utilisateur, prenom_utilisateur,
                mdp_utilisateur, age_utilisateur, photo_profil_utilisateur, bio_utilisateur) 
                VALUES (:pseudo_utilisateur, :mail_utilisateur, :nom_utilisateur, :prenom_utilisateur, :mdp_utilisateur, 
                :age_utilisateur, :photo_profil_utilisateur, :bio_utilisateur)');
                //éxécution de la requête SQL


                $reqInsert->execute(array(
                    'pseudo_utilisateur' => $this->getPseudo(),
                    'mail_utilisateur' => $this->getMail(),
                    'nom_utilisateur' => $this->getNom(),                                                                 
                    'prenom_utilisateur' => $this->getPrenom(),                                                                 
                    'mdp_utilisateur' => password_hash($this->getMdp(), PASSWORD_DEFAULT), //hachage mdp                                                                
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

        //methode connexion
        public function connectUser($bdd){
            $reqSelectLogin= $bdd->prepare ('SELECT * FROM utilisateurs WHERE mail_utilisateur = :mail_utilisateur');
            $reqSelectLogin -> execute(array(':mail_utilisateur'=>$this->getMail()));
            $login=$reqSelectLogin->fetch();
            if($login){
                if(password_verify($this->getMdp(),$login['mdp_utilisateur'])=== true){
                    return true;
                }else {
                    return false;
                }
            }
            
            else{
                return false;
            }
        }

    }


?>