<?php 

// Reprend les variables trouvables dans la base de données pour pouvoir les afficher dans le fichier default.php

foreach ($data['informations'] as $info) {
	render('account/default', [
		'id' => $info['id'],
		'email' => $info['email'],
		'firstname' => $info['firstname'],
		'lastname' => $info['lastname'],
		'password' => $info['password'],
		'created_at' => $info['created_at'],
		'id_roles' => $info['id_roles'],
	], true);
}


?>