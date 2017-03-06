<?php

namespace Controller;

use \W\Controller\Controller;
use Model\News\CategorieModel;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
	    $CategorieModel = new CategorieModel;
	    $categories     = $CategorieModel->findCategories();
		$this->show('default/home', ['categories' => $categories]);
	}

}