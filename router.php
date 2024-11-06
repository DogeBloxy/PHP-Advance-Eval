<?php 
// FICHIER ROUTER
// Ce fichier permet de gérer les différentes routes de l'application.

// Il permet également d'importer des fichiers ou de faires des actions avant d'appeler la route approprié.

// Require utils.php permet que les fonctions présentes dans ce fichier soit accessible partout dans le projet, peut importe la route contacter


require 'utils/utils.php';

// ridirige vers le controllers approprié en fonction de la route
switch ($_SERVER['REDIRECT_URL']) {
	case '/':
		require 'controllers/indexCtrl.php';
		break;
	case '/account':
		require 'controllers/accountCtrl.php';
		break;
	case '/details':
		require 'controllers/detailsCtrl.php';
		break;
	// Si la route ne correspond à aucun possibilité, affiche la page 404
	default:
		require 'views/404.php';
		break;
    }
?>