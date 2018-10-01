<?php

require_once('./allocine.class.php');

define('ALLOCINE_PARTNER_KEY', '100043982026');
define('ALLOCINE_SECRET_KEY', '29d185d98c984a359e6e6f26a0474269');

$allocine = new Allocine(ALLOCINE_PARTNER_KEY, ALLOCINE_SECRET_KEY);
?>
<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Pagination PHP</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
</head>

<body>
<div>
	<?php
	// Imports des fichiers de pagination/DB
	include_once('paginate.php');

	// Connexion à la BDD (à vous de configurer les paramètres de connexion à la base)
	$dbc = @mysqli_connect(localhost, root,'' , films);
	if (!$dbc) {
		trigger_error('Connexion à la BDD impossible : ' . mysqli_connect_error() );
		exit();
	}

	// Calcul du nombre total d'entrées $total dans la table pagination
	$res = mysqli_query($dbc, 'SELECT COUNT(*) FROM pagination');
	$row = mysqli_fetch_row($res);
	$total = $row[0];

	// Libération de la mémoire associée au résultat
	mysqli_free_result($res);

	$epp = 3; // nombre d'entrées à afficher par page (entries per page)
	$nbPages = ceil($total/$epp); // calcul du nombre de pages $nbPages (on arrondit à l'entier supérieur avec la fonction ceil())

	// Récupération du numéro de la page courante depuis l'URL avec la méthode GET
	// S'il s'agit d'un nombre on traite, sinon on garde la valeur par défaut : 1
	$current = 1;
	if (isset($_GET['p']) && is_numeric($_GET['p'])) {
		$page = intval($_GET['p']);
		if ($page >= 1 && $page <= $nbPages) {
			// cas normal
			$current=$page;
		} else if ($page < 1) {
			// cas où le numéro de page est inférieure 1 : on affecte 1 à la page courante
			$current=1;
		} else {
			//cas où le numéro de page est supérieur au nombre total de pages : on affecte le numéro de la dernière page à la page courante
			$current = $nbPages;
		}
	}

	// $start est la valeur de départ du LIMIT dans notre requête SQL (dépend de la page courante)
	$start = ($current * $epp - $epp);

	// Récupération des données à afficher pour la page courante
	$qry = "SELECT p_text FROM pagination LIMIT $start, $epp";
	$res = @mysqli_query($dbc, $qry);

	if ($res) {
		// Affichage des données
		echo "<ul id=\"results\">\n";
		while($item = mysqli_fetch_array($res)) {
			
	print_r ($item);
	exit();
		  echo "\t<li>" .$item['p_text']. "</li>\n";
		}
		echo "</ul>\n";

		mysqli_free_result($res);
	} else {
		echo mysqli_error($dbc);
	}
	?>

	<?php echo paginate('http://localhost/films/test', '?p=', $nbPages, $current); ?>
</div>
</body>
</html>