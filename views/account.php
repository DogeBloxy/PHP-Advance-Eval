<?php 

// Appel la fonction permettant de compléter le contenu du fichier default.php du dossier account
ob_start();
render('account/show', [
	'informations' => $data['showAccount'],
], true);
$content = ob_get_clean();

// Modifie la barre de navigation en fonction de la page
render('default', [
	'title' => 'COMPTE',
    'link1' => '',
	'user' => 'Nom Prénom',
	'content' => $content,
], true);


?>