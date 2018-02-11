<?php  

include '../util/php/fonctions_utiles.php';

if (isset($_POST['username']) and isset($_POST['pass'])){
	$user = $_POST['username'];
	$pass = $_POST['pass'];
	
	if(userExists($user, $pass)){
		//démarre le sssion
		session_start();
		
		//enregistre l'user pour le reconnaître sur les autres pages
		$_SESSION['login'] = $user;
		$_SESSION['pass'] = $pass;
		
		//redirection espace articles
		echo 'Connexion réussie, redirection vers la page des articles...';
		echo '<meta http-equiv="refresh" content="2;URL=../frontend/articles.php">';
	}else{
			echo 'Membre inconnu... <br> retour à l\'acueil dans 3 secondes';
			echo '<meta http-equiv="refresh" content="3;URL=../index.html">';
	}
	
}
?>
