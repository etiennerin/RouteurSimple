<?php

/********************************************************
*		Inclusion du fichier monControlleur.php			*
*		(copié collé de ce ficheir)						*
********************************************************/
require_once("monControlleur.php");
require_once("monSecondControlleur.php");

/********************************************************
*		Récupération du contenu(chaine de caractère)	*
*		de l'url et découpage de celui-ci en plusieurs	*
*		tableaux dé que l'on troue un caractère '\'		*
*		puis stockage de ces tableaux dans la variable	*
*		$_GET											*
********************************************************/
$_GET['url'] = explode('/',$_GET['url']);

/********************************************************
*		Une classe qui se nomme Routeur					*
*		(rien de magique ici)							*
********************************************************/
class Routeur
{
	/********************************************************
	*		Création de la méthode route(on dit ici 		*
	*		qu'elle est public donc accessible en 			*
	*		dehors de la classe(donc on peut l'appeler)) 	*
	*		ici l'appel se fait ligne 100					*
	********************************************************/
	public function route()
	{
		/********************************************************
		*		Switch sur le nom du controlleur				*
		*		par exemple si $_GET['url] vallai :				*
		*		'/monControlleur/maMethode'						*
		*		après le découpage(explode)						*
		*		$_GET['url'][0] vaut 'monControlleur'			*
		********************************************************/
		switch($_GET['url'][0])
		{
			/********************************************************
			*		Si l'url(ici $_GET['url']) contient				*
			*		monControlleur alors on execute les				*
			*		instructions correspondantes					*
			********************************************************/
			case "monControlleur" : 
				/********************************************************
				*		Instanciation de monControlleur					*
				********************************************************/
				$contr = new $_GET['url'][0];
				/********************************************************
				*		nouveau switch sur le nom de la méthode			*
				*		à appeller cette fois-ci						*
				********************************************************/
				switch($_GET['url'][1])
				{
					case "maMethode" : 
						/********************************************************
						*		appel de la méthode								*
						********************************************************/
						$contr->maMethode();
						break;
				}
				/********************************************************
				*		break sert a sortir du switch					*
				*		(l'accolade à la ligne 84)						*
				********************************************************/
				break;
			/********************************************************
			*		un second controlleur							*
			*		(si la valeur de 								*
			*		$_GET['url'][0]=="monSecondControlleur)			*
			********************************************************/
			case "monSecondControlleur" : 
				$secContr = new $_GET['url'][0];
				switch($_GET['url'][1])
				{
					case "uneMethode" :
						$secContr->uneMethode();
						break;
				}
				break;
		}
	}
}

/********************************************************
*		Création d'une instance de la classe Routeur	*
*		(un peu comme si on executais simplement une 	*
*		fonction (c'est à ça que servent les 			*
*		parenthèses après Routeur ici))					*
********************************************************/
$monRouteur = new Routeur();

/********************************************************
*		Appel de la méthode route() de la classe 		*
*		Routeur											*
********************************************************/
$monRouteur->route();

?>