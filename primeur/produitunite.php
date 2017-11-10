<?php 
require_once('produit.php');
class produitUnite extends produit{

	public $prixUnite = 1,5;

	public $quantite = 6;

	public function __construct($prixUnite,$quantite){
	echo "Creation d'un legume";
	parent::__construct($nom, $categorie, $poids);
 	$this->prix unité = $prixUnite;
 	$this->quantité = $quantite;
	}

	public function __toString(){
	return "Le légume est a ".
	"prix unité : ".$this->prixUnite.
	"quantité : ".$this->quantité.;
	}

	public function (calcul){
	return ($this->prix unité*$this->quantité);
	}











	
}



