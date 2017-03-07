<?php

namespace Controller;

use \W\Controller\Controller;
use Model\Db\DBFactory;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home() {
	    
	    # Connexion a la BDD
	    DBFactory::start();
	    
	    # Récupération des Articles en SPOTLIGHT
	    $spotlights = \ORM::for_table('view_articles')->where('SPOTLIGHTARTICLE', 1)->find_result_set();
	    
	    # Récupérations des Articles de la Page d'Accueil
	    $articles = \ORM::for_table('view_articles')->find_result_set();
	    
	    # Transmettre à la Vue
	    $this->show('default/home', ['spotlights' => $spotlights, 'articles' => $articles]);
	}
	
	public function categorie($categorie) {
	    # Connexion a la BDD
	    DBFactory::start();
	    
	    # Récupérations des Articles de la Catégorie
	    $articles = \ORM::for_table('view_articles')->where('LIBELLECATEGORIE', ucfirst($categorie))->find_result_set();
	    
	    # Transmettre à la Vue
	    $this->show('default/categorie', ['articles' => $articles]);
	    
	}

}












