<?php
require_once("Class/utilisateur.php");

$test = new utilisateur('NomSaifi', 'PrenomSaifi', 'saifi@example.com', 'motDePasse123');
$test->nom = 'NouveauNom';
$test->prenom = 'NouveauPrenom';
$test->mot_de_passe = 'NouveauMotDePasse';

$test->updateUser();
?>
