<?php
include './maison.php';
include './vehicule.php';

echo '<h2>Exercice 1</h2>';
echo "<br><br>";

$pavillon = new Maison("pavillon", 20, 30, 2);

echo $pavillon->getNom();
echo "<br><br>";
echo $pavillon->getLongueur();
echo "<br><br>";
echo $pavillon->getLargeur();
echo "<br><br>";
echo $pavillon->getNbrEtage();
echo "<br><br>";
echo '<br>La surface de '.$pavillon->getNom().' est égale à '.$pavillon->surface().'m2.<br>';

echo '<h2>Exercice 2</h2>';

$mercedes = new Vehicule("Mercedes CLK", 4, 250);
$honda = new Vehicule("Honda CBR", 2, 280);

echo '<br>Le véhicule '.$mercedes->getNom().' est un véhicule de type: '.$mercedes->detect().'.';
echo '<br>Le véhicule '.$honda->getNom().' est un véhicule de type: '.$honda->detect().'.';
echo "<br><br>";
echo '<br>Le véhicule '.$mercedes->getNom().' roule à: '.$mercedes->boost().'km/h.';
echo "<br><br>";