<?php
include './maison.php';

$pavillon = new Maison("pavillon", 20, 30, 2);

echo $pavillon->getNom();
echo "<br><br>";
echo $pavillon->getLongueur();
echo "<br><br>";
echo $pavillon->getLargeur();
echo "<br><br>";
echo $pavillon->getNbrEtage();
echo "<br><br>";
echo '<br>La surface de '.$pavillon->getNom().' est égale à '.$pavillon->surface().'m2.';