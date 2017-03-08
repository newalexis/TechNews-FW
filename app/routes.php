<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/accueil.html', 'Default#home', 'default_accueil'],
	    # Route pour Afficher les Articles d'une Catégorie
		['GET', '/news/[:categorie]', 'Default#categorie', 'default_categorie'],
	    # Route pour Afficher un Article
		['GET', '/article/[i:id]-[a:slug].html', 'Default#article', 'default_article'],
	);