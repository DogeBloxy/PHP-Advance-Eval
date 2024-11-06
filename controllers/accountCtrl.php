<?php 
// route "/account"

require 'models/Accounts.php';

// Création d'un objet (instance) de la classe Accounts
$accounts = new Accounts();

// Affichage de la page account.php avec la liste des informations d'un compte en data
render('account', [
	'showAccount' => $accounts->getUser(),
]);

?>