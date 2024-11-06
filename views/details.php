<?php 

// Appel la fonction permettant de compléter le contenu du fichier default.php du dossier details
ob_start();
render('details/listMessages', [
	'showMessages' => $data['messages'],
], true);
$content = ob_get_clean();



// Modifie la barre de navigation en fonction de la page
render('default', [
	'title' => 'FORUM',
    'link1' => 'Ajouter un message',
	'user' => 'Nom Prénom',
	'content' => $content,
], true);


?>
