<?php
 
    $sum = null;

    // Vérification si le formulaire est soumis
    if (isset($_POST['firstNumber']) AND !empty($_POST['firstNumber']) AND isset($_POST['secondNumber']) AND !empty($_POST['secondNumber'])) {
        // Calcul de la somme
        $sum = $_POST['firstNumber'] + $_POST['secondNumber'];
    }
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exercice addition formulaire</title>
  <link rel="stylesheet" href="style.css">
  <!--<script src="script.js"></script>-->
</head>
<body>
<form method="post">
  <label for="first_number">First number:</label><br>
  <input type="number" id="firstNumber" name="firstNumber"><br>
  <label for="second_number">Second number:</label><br>
  <input type="number" id="secondNumber" name="secondNumber">
  <input type="submit" value="Envoyer">
</form>
<p>La somme est égale à : <?= $sum ?></p>
</body>
</html>