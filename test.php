<?php
require_once("Class/utilisateur.php");


$test = new utilisateur('NomSaifi', 'PrenomSaifi', 'saifi@example.com', 'motDePasse123');
$test->createUser();

?>