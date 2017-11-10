<?php 
	abstract class PRODUIT
	protected $nom = poivron;
	protected $categorie = légume;
	protected $poids= 200g;
	
	
	public function __construct($nom, $categorie, $poids) {
      echo "Construction d'un produit";
		$this->nom = $nom ;
		$this->catégorie = $catégorie ;
		$this->poids= $poids;
	}
}

?>

