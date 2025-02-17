<?php
include 'vendor/autoload.php';
$message = "";
//Test si le formulaire est soumis
if(isset($_POST["submit"])) {
    //tester si les champs sont remplis
    if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) &&
    !empty($_POST["email"]) && !empty($_POST["password"])) {
        //tester si le mail est valide
        if(!preg_match(
            "/^[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/",
            $_POST["email"])) {
                $message .= "Le mail est invalide";
        }
        //tester si le mot de passe est valide
        if(!preg_match( "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{12,}$/",
        $_POST["password"])) {
            $message .= "Le mot de passe est invalide";
        }
        //tester si le fichier existe
        if(isset($_FILES["fichier"])) {
            //Récupération de l'extension en minuscule
            $ext = strtolower(getFileExtension($_FILES["fichier"]["name"]));
            //tester si le fichier est plus petit que 12 1024*1024*12
            if($_FILES["fichier"]["size"] < (12*1024*1024)) {
                //tester si le fichier est un png ou jpeg
                if($ext != 'png' && $ext != 'jpeg') {
                    $message .= "le fichier n'est pas au bon format";
                }
                //Test si tout est ok
                if(empty($message)) {
                    //déplacer et renommer le fichier
                    move_uploaded_file(
                        $_FILES["fichier"]["tmp_name"], './asset/images/' .
                        strtoupper(substr($_POST["lastname"] ,0,1)). $_POST["firstname"]. '.' . $ext
                    );
                }
            }
            else {
                $message .= "le fichier est trop grand";
            }
        }
    }
    else {
        $message = "Veuillez remplir tous les champs";
    }
}
//Méthode pour récupérer l'extension d'un fichier
function getFileExtension($file){
    return substr(strrchr($file,'.'),1);
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="lastname">Nom:</label><br>
        <input type="text" name="lastname"><br>
        <label for="firstname">Prénom:</label><br>
        <input type="text" name="firstname"><br>
        <label for="email">Adresse email:</label><br>
        <input type="email" name="email"><br>
        <label for="password">Mot de passe:</label><br>
        <input type="password" name="password"><br>
        <label for="file">Pièce jointe:</label><br>
        <input type="file" name="fichier"><br><br>
        <input type="submit" value="envoyer" name="submit">
    </form>
</body>
</html>