<?php
 
    $sum = null;

    // Vérification si le formulaire est soumis
    if (isset($_POST['firstNumber']) AND !empty($_POST['firstNumber']) AND isset($_POST['secondNumber']) AND !empty($_POST['secondNumber']) AND isset($_POST['thirdNumber']) AND !empty($_POST['thirdNumber'])) {
        // Calcul de la somme
        $sum = $_POST['firstNumber'] * $_POST['secondNumber'] * $_POST['thirdNumber'];
    }
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exercice calcul TVA</title>
  <link rel="stylesheet" href="style.css">
  <!--<script src="script.js"></script>-->
</head>
<body>
<form method="post">
  <label for="first_number">Prix HT:</label><br>
  <input type="number" id="firstNumber" name="firstNumber"><br>
  <label for="second_number">Nombre d'articles:</label><br>
  <input type="number" id="secondNumber" name="secondNumber"><br>
  <label for="third_number">Taux de TVA:</label><br>
  <input type="number" id="thirdNumber" name="thirdNumber"><br>
  <input type="submit" value="Envoyer">
</form>
<p>La prix TTC est égal à : <?= $sum ?></p>
</body>
</html>