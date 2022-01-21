<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exo 162</title>
</head>
<body>

<form id="exo1" action="/user.php" method="get">
    <div>
        <label for="surname">Nom</label>
        <input id="surname" type="text" name="surname">
    </div>
   <div>
       <label for="name">Prénom</label>
       <input id="name" type="text" name="name">
   </div>
    <input type="submit" name="submitExo1">
</form>

<br>

<form id="exo2" action="/user.php" method="post">
    <div>
        <label for="surname">Nom</label>
        <input id="surname" type="text" name="surname">
    </div>
    <div>
        <label for="name">Prénom</label>
        <input id="name" type="text" name="name">
    </div>
    <input type="submit" name="submitExo2">
</form>

<br>


<?php

$display = "block";
if (isset($_POST['submitExo3'])) {
    if (isset($_POST["surname"], $_POST["name"], $_POST["civility"], $_FILES["file"])) {

        if (!empty(strip_tags($_POST["surname"])) && !empty(strip_tags($_POST["name"])) && !empty(strip_tags($_POST["civility"]))){

            $fileExtension = pathinfo($_FILES['file']['name']);

            if (strtolower($fileExtension['extension']) === 'pdf') {
                echo "<p>le fichier est un pdf</p>";
            } else {
                echo "<p>le fichier n'est pas un pdf</p>";
            }

            echo $fileExtension['filename'] . "<br>" . $fileExtension['extension'] . "<br>";
            echo strip_tags($_POST['civility']) . "<br>" . strip_tags($_POST["surname"]) . "<br>" . strip_tags($_POST["name"]);
            $display = 'none';
        }
    }
}
?>


<form id="exo3" action="/index.php" method="post" enctype="multipart/form-data" style="display: <?= $display ?>">
    <div>
        <label for="civility">Civilité</label>
        <select name="civility" id="civility">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
        </select>
    </div>
    <div>
        <label for="surname">Nom</label>
        <input id="surname" type="text" name="surname">
    </div>
    <div>
        <label for="name">Prénom</label>
        <input id="name" type="text" name="name">
    </div>
    <div>
        <label for="file">Fichier</label>
        <input id="file" type="file" name="file">
    </div>
    <input type="submit" name="submitExo3">
</form>

</body>
</html>
