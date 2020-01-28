<?php

require "classes/Voiture.php";

$voiture = new Voiture("lada", "niva", "blanc", [2000, 1500, 800],1000);
echo '<pre>';
var_dump($voiture);
echo '</pre>';

$voiture->afficherMessage();

$voiture = new Voiture();

$voiture->modele = "RB14";
$voiture->couleur = "Rouge";
$voiture->dimensions = [2000, 1000, 500];

echo $voiture->couleur;