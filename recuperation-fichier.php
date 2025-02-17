<?php
include 'vendor/autoload.php';
if(isset($_POST["submit"])) {
    //test si le fichier existe 
    if(isset($_FILES["fichier"])) {
        //test si l'extension est valide
        if(getFileExtension($_FILES["fichier"]["name"]) != strtolower('png') || getFileExtension($_FILES["fichier"]["name"]) != strtolower('jpg') ||
        getFileExtension($_FILES["fichier"]["name"]) != strtolower('jpeg')) {
            echo "Le format de fichier est incorrect";
        }

        else{
        //Test si la taille est supérieure à 1M0
            if($_FILES["fichier"]["size"] > (1025*1024)) {
                echo "Le fichier est trop grand";
            } else {
                //Déplacer et renommer le fichier
                move_uploaded_file($_FILES["fichier"]["tmp_name"], 
                './images/'. uniqid() . '.' . getFileExtension($_FILES["fichier"]["name"]));
            }
        }  
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
        <input type="file" name="fichier">
        <input type="submit" value="envoyer" name="submit">
    </form>
</body>
</html>