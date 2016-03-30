									Php orienté objet (php 5)
							Les bases, $this, instanciation, opérateur ::


Les avantages qu'il présente : 
	* Visibilité dans les classes
	* Class abstract
	* Class final
		+ 	- Méthodes magiques
			- Interfaces
			- Clônage
			- Typage

	* La pseudo-variable $this est disponible lorsqu'une méthode est appelée depuis un contexte objet. 
	$this est une référence à l'objet appelant (habituellement, l'objet auquel la méthode appartient, 
	mais ce peut être un autre objet si la méthode est appelée de manière statique depuis le contexte 
	d'un autre objet).
		(cf POO2/exemple1.php comment créer une classe)
		(cf POO2/exemple2.php création et utilisation d'une classe)
		(cf POO2/exemple3.php instanciation d'un objet d'une classe)
		(cf POO2/exemple4.php instanciation et utilisation, résumé)
		
		<?php 
			echo $get_class($this);
			echo maClasse::class;
		?> 
		- Retourne le nom de classe de l'objet $this ou de la classe maClasse (le deuxième utile
		si la classe est elle-même définie dans un espace de nom).

		<?php $instance = new SimpleClass();?>
		- Permet de créer un objet de la classe "SimpleClass".

		<? $obj3 = Test::getNew();?>
		- Appel de la fonction getNew() de la classe Test. $obj3 est une instance de la classe Test

	* Une classe peut hériter des méthodes et des membres d'une autre classe en utilisant le mot-clé 
	extends dans la déclaration. Il n'est pas possible d'étendre plusieurs classes : une classe peut 
	uniquement hériter d'une seule classe de base. 

		<? $obj4 = Child::getNew();?>
		- Appel de la fonction getNew() de la classe Test. $obj3 est une instance de la classe Child
		Cette classe Child extends Test

	* Les méthodes et membres hérités peuvent être surchargés en les redéclarant avec le même nom que 
	dans la classe parente. Cependant, si la classe parente a défini une méthode comme <!-- final -->, 
	alors celle-ci ne sera pas surchargeable. Il est possible d'accéder aux méthodes ou une propriétés 
	statiques surchargées en y faisant référence avec l'opérateur <!-- parent:: -->. 