<?php
	// On demande d'afficher "Bonjour"
	// et on termine l'instruction par ";"
	echo "Bonjour !";
	// On crée un connecteur
	$serveur = "localhost";
	$user = "root";
	$password = "root";
	$nom_base = "CPGI26_promo";
	$connecteur = new mysqli($serveur,$user,$password,$nom_base);

	// Encodage UTF-8 conseillé
	$connecteur->set_charset("utf8");
	// On récupère le résultat de la requete
	// sous forme d'un tableau
	// nommé "$resultat"
	$resultat = $connecteur->query("SELECT * FROM Eleves");
	// on parcourt le tableau "$resultat"
	// chaque ligne est nommée "$ligne"
	foreach ($resultat as $ligne) {
		echo "<br>";
	    // On affiche la valeur "prenom" de la ligne
		echo $ligne['prenom'];
		// On affiche toute la ligne "en vrac"
		print_r($ligne);
	}
?>
