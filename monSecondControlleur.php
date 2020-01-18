<?php

/********************************************************
*		Une classe qui se nomme monSecondControlleur	*
*		(rien de magique ici)							*
********************************************************/
class monSecondControlleur
{
	/********************************************************
	*		Création d'une méthode nommée uneMethode()		*
	*		qui est public(pour que l'on puisse l'appeller 	*
	*		en dehors de la classe)							*
	*		et est appelée dans le routeur					*
	*		à la ligne 80									*
	********************************************************/
	public function uneMethode()
	{
		/********************************************************
		*		Un simple affichage d'une chaine de caractère	*
		*		(rien de magique ici non plus)					*
		********************************************************/
		echo "bonjour du second controlleur";
	}
}
?>