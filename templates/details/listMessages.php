<?php 

// Reprend les variables trouvables dans la base de données pour pouvoir les afficher dans le fichier default.php

foreach ($data['showMessages'] as $message) {
	render('details/default', [
		'id' => $message['id'],
		'text' => $message['text'],
		'created_at' => $message['created_at'],
		'id_users' => $message['id_users'],
		'id_blogs' => $message['id_blogs'],
	], true);
}

?>