<?php class Publication{
    private $id_publi;
    private $texte_publi;
    private $lien_musique_publi;
    private $date_publi;
    private $id_genre_publi;
    private $id_user_publi;

//GETTER SETTER
    function getId_publi(){
		return $this->id_publi;
	}
	function setId_publi($id_publi){
		$this->id_publi = $id_publi;
	}
	function getTexte_publi(){
		return $this->texte_publi;
	}
	function setTexte_publi($texte_publi){
		$this->texte_publi = $texte_publi;
	}
	function getLien_musique_publi(){
		return $this->lien_musique_publi;
	}
	function setLien_musique_publi($lien_musique_publi){
		$this->lien_musique_publi = $lien_musique_publi;
	}
	function getDate_publi(){
		return $this->date_publi;
	}
	function setDate_publi($date_publi){
		$this->date_publi = $date_publi;
	}
	function getId_genre_publi(){
		return $this->id_genre_publi;
	}
	function setId_genre_publi($id_genre_publi){
		$this->id_genre_publi = $id_genre_publi;
	}
	function getId_user_publi(){
		return $this->id_user_publi;
	}
	function setId_user_publi($id_user_publi){
		$this->id_user_publi = $id_user_publi;
	}

//METHODES

    function create_publi($bdd)
        
}
?>