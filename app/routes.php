<?php

	$w_routes = array(
	    # Accueil
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/accueil.html', 'Default#home', 'default_accueil'],
	    # Route pour Afficher les Articles d'une Cat�gorie
		['GET', '/news/[:categorie]', 'Default#categorie', 'default_categorie'],

	    # Route pour Afficher un Article
		['GET', '/article/[i:id]-[:slug].html', 'Default#article', 'default_article'],

		#  Route pour une nouvel article en add

		['POST', '/app/Views/default/EditeurArticle.php', 'Article#RecupForm', 'article_recupform'],

	// à développer	['GET', '/article/add', 'Article#AddNew', 'article_addnew'],

		['POST', '/article/add', 'Add#NewArticle', 'add_newarticle'],
	);
