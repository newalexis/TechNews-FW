<?php
namespace Model\News;

class CategorieModel extends \W\Model\Model 
{
    /**
     * Récupère les Catégories depuis la BDD
     */
	public function findCategories() {
	    // -- Récupère toutes les catégories
	    $categories = $this->findAll();
	    $data = [];
	    
	    // -- On parcours l'ensemble des résutats et pour chaque itération on crée un Objet Categorie.
	    // -- On retourne ensuite un tableau contenant l'ensemble des Objets.
	    foreach ($categories as $categorie) {
	        $data[] = new Categorie($categorie['IDCATEGORIE'], $categorie['LIBELLECATEGORIE'], $categorie['ROUTECATEGORIE']);
	    }
	    
	    return $data;
	}
}