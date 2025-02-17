<?php
include './maison.php';

$pavillon = new Maison("pavillon", 60, 40);

echo $pavillon->getNom();
echo "<br><br>";
echo $pavillon->getLongueur();
echo "<br><br>";
echo $pavillon->getLargeur();
echo "<br><br>";
echo '<br>La surface de '.$pavillon->getNom().' est égale à '.$pavillon->surface().'m2.';