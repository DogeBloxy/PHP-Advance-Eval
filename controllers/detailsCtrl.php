<?php 
// route "/details"

require 'models/Forums.php';


// Création d'un objet (instance) de la classe Forums
$forum = new Forums();

// Affichage de la page details.php avec les informations du forum et des messages en data
render('details', [
	'form' => $forum->getOneForum(),
	'messages' => $forum->getAllMessages(),
]);

?>