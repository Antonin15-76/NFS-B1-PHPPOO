<?php
date_default_timezone_get('Europe/Paris');
require_once 'fonction/classAutoloader.php';
spl_autoload_register('classAutoloader');

Demo::afficherMessage('coucou');
Log::logWrite('hfhf');

$formulaire = new Form('index.php?page=validation', 'contact');


$html = $formulaire->beginHtml('vbfvh');
echo $formulaire->displayForm();


$chat =new Mamiferes();
echo '<pre>';
var_dump($chat);
echo '</pre>';


$toto = new Coupe("peugeot", "504", "vert", [2552, 24526,26], 1200);
var_dump($toto);

$voiture = new Voiture("lada", "niva", "blanc", [2000, 1500, 800],1000);
echo '<pre>';
var_dump($voiture);
echo '</pre>';

$voiture->afficherMessage();

echo $voiture->couleur;

$voiture1 = new Voiture("Lada", "Niva", "blanc", [2000, 1500, 800], 900);
$voiture2 = new Voiture("Nissan", "Cube", "violet", [2500, 1800, 1200], 1200);
$voiture1->vitesse = 25;
$voiture2->vitesse = 30;

echo $voiture1->getMarque();


//echo $voiture1->calculEnergetiqueCinetique() . "<br/>";
//$voiture1->vitesse = 20;
//echo $voiture1->calculEnergetiqueCinetique();

$html .= $formulaire->endHtml();
echo $html;