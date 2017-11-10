<?php 

require_once('produit.php');
class produitKilo extends produit{

public $poids = 400;
public $prixKilo = 3;

	public function __construct($poids,$prixKilo){
	
	echo "Creation d'un légume";
	parent::__construct($nom, $categorie, $poids);
 	$this->poids = $poids;
 	$this->prixKilo = $prixKilo;
	}

	
	public function __toString(){
	return "Le légume fait :".
	"poids : ".$this->poids.
	"prix kilo : ".$this->prisKilo.;
	}

public function (calcul){
return ($this->poids*$this->prixKilo);
}