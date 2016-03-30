									Php orienté objet (php 5)
							Propriétés, constructeur/destructeur, visibilité, héritage


* 	Les variables au sein d'une classe sont appelées "propriétés". 
	Elles sont définies en utilisant un des mots-clés <!-- public -->, <!-- protected -->, 
	ou <!-- private -->, suivi d'une déclaration classique de variable. 

*	Au sein des méthodes de classes, les propriétés <!-- non statiques --> peuvent être appelées en 
	utilisant la syntaxe -> (opérateur de l'objet) 
		<?php $this->property; ?>
	
*	Les propriétés <!-- statiques --> peuvent être appelées en utilisant la syntaxe <!-- :: --> 
		<?php self::$property; ?>

*	Déclaration valides de propriétés (cf POO2/exemple1.php)
		<?php
		   public $var6 = myConstant; // où myConstant est définie préalablement.
		   public $var7 = array(true, false);
	    ?>

*	Déclaration d'une constante au sein d'une classe (attention, pas de <!-- $ --> devant !)
		<?php const CONSTANT = 'valeur constante'; ?>
		- NB : Une constante étant une propriété statique, elle est appelée via <!-- :: -->
		(cf POO2/exemple2.php)

*	Déclaration du constructeur d'une classe (__construct()), du destructeur (__destruct())
		<?php
		    function __construct() {/* code de la fonction */}
		    function __destruct() {/* code de la fonction */}
		?>
		(cf POO2/exemple3.php et POO2/exemple4.php)

		<!-- Principe de visibilité -->
*	La visibilité d'une propriété ou d'une méthode peut être définie en préfixant sa déclaration 
	avec un mot-clé : <!-- public -->, <!-- protected -->, ou <!-- private -->. 
	Les éléments déclarés comme publics peuvent être utilisés par n'importe quelle partie du programme. 
	L'accès aux éléments protégés est limité à la classe elle-même, ainsi qu'aux classes qui en héritent, 
	et à ses classes parentes. 
	L'accès aux éléments privés est uniquement réservé à la classe qui les a défini. 
		(cf POO2/exemple5.php pour les bonnes pratiques)

		<!-- Principe d'héritage -->
* 	Lorsque vous étendez une classe, la classe fille hérite de toutes les méthodes publiques et protégées 
	de la classe parente. 
	Tant qu'une classe n'écrase pas ces méthodes, elles conservent leur fonctionnalité d'origine. 