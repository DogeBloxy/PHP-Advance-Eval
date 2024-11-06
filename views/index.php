<?php 

// Appel la fonction permettant de compléter le contenu du fichier default.php du dossier forums
ob_start();
render('forums/list', [
	'list' => $data['forumsList'],
], true);
$content = ob_get_clean();

// Modifie la barre de navigation en fonction de la page
render('default', [
	'title' => 'BLOG',
	'link1' => 'Créer un forum',
	'user' => 'Nom Prénom',
	'content' => $content,
], true);

?>