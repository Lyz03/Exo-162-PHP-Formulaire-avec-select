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

<?php
if (isset($_GET["submitExo1"])) {
    if (isset($_GET["surname"]) && isset($_GET["name"])) {

        if (!empty(strip_tags($_GET["surname"])) && !empty(strip_tags($_GET["name"]))) {
            echo strip_tags($_GET["surname"]) . "<br>" . strip_tags($_GET["name"]);
        }
    }
}


if (isset($_POST["submitExo2"])) {
    if (isset($_POST["surname"]) && isset($_POST["name"])) {

        if (!empty(strip_tags($_POST["surname"])) && !empty(strip_tags($_POST["name"]))) {
            echo strip_tags($_POST["surname"]) . "<br>" . strip_tags($_POST["name"]);
        }
    }
}


?>
</body>
</html>

