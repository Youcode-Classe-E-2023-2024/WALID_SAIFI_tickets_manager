<?php
require_once("Class/utilisateur.php");

$test = new utilisateur('NomSaifi', 'PrenomSaifi', 'saifi@example.com', 'motDePasse123');

// Mettez à jour les propriétés de l'objet
$test->nom = 'NouveauNom';
$test->prenom = 'NouveauPrenom';
$test->mot_de_passe = 'NouveauMotDePasse';

// Appelez la fonction updateUser pour mettre à jour en base de données
$test->updateUser();
?>
