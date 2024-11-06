<?php 
// route "/"

require 'models/Forums.php';


// Création d'un objet (instance) de la classe Forums
$forums = new Forums();

// Affichage de la page index.php avec la liste des forums en data
render('index', [
	'forumsList' => $forums->getAllForums(),
]);

?>