<?php
include ('config.php');

$query_pays = mysql_query("SELECT * FROM joueur");
$pays = mysql_fetch_array($query_pays);

//base pays

switch ($pays) {
	case '1': echo "DE" break; // Allemagne
	case '2': echo "AT" break; // Autriche
	case '3': echo "BE" break; // Belgique
	case '4': echo "BG" break; // Bulgarie
	case '5': echo "CY" break; // Chypre
	case '6': echo "HR" break; // Croatie
	case '7': echo "DK" break; // Danemark
	case '8': echo "ES" break; // Espagne
	case '9': echo "EE" break; // Estonie
	case '10': echo "FI" break; // Finlande
	case '11': echo "FR" break; // France
	case '12': echo "EL" break; // Grèce
	case '13': echo "HU" break; // Hongrie
	case '14': echo "IR" break; // Irlande
	case '15': echo "IT" break; // Italie
	case '16': echo "LV" break; // Letonie
	case '17': echo "LT" break; // Lituanie
	case '18': echo "LU" break; //Luxembourg
	case '19': echo "MT" break; // Malte
	case '20': echo "NL" break; // Pays-bas

	default:
		echo "No Pays"
		break;
}