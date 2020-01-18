<?php

/********************************************************
*		Une classe qui se nomme monControlleur			*
*		(instanciée à la ligne 51 dans routeur.php)		*
********************************************************/
class monControlleur
{
	/********************************************************
	*		Création d'une méthode public(pour qu'elle 		*
	*		puisse être appelée en dehors de la classe) 	*
	*		maMethode() 									*
	*		elle est appelée à la ligne 62 dans routeur.php	*
	********************************************************/
	public function maMethode()
	{
		/********************************************************
		*		Un simple affichage d'une chaine de caractères	*
		*		(rien de magique ici non plus)					*
		********************************************************/
		echo "bonjour de monControlleur<br/>";
		/********************************************************
		*		On sort brièvement du php pour afficher un 		*
		*		peu de code html (le html d'un lien menant à 	*
		*		monSecondControlleur)							*
		********************************************************/
		?> 
			<a href="?url=monSecondControlleur/uneMethode" > aller vers le second controlleur</a>
		<?php
	}
}
?>