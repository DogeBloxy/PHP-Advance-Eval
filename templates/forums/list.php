<?php

// Reprend les variables trouvables dans la base de données pour pouvoir les afficher dans le fichier default.php

foreach ($data['list'] as $forum) {
	render('forums/default', [
		'id' => $forum['id'],
		'title' => $forum['title'],
		'created_at' => $forum['created_at'],
		'id_users' => $forum['id'],
	], true);
}