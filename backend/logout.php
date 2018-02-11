<?php
// On démarre la session
session_start ();

// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();


echo 'Déconnexion... <br> Redirection vers la page de connexion dans 3 secondes';
echo '<meta http-equiv="refresh" content="2;URL=../index.html">';
?>
