<?php

/**
 * LA PAGE DE DETAILS D'UNE TÂCHE
 * -------------
 * Elle appelée par l'url /index.php?page=show&id=100 par exemple et elle affiche les détails de la tâche qui correspond à l'id précisé en GET
 */

// On appelle la liste des tâches
$data = require_once "data.php";

// Par défaut, on imagine qu'aucun id n'a été précisé
$id = null;

// Si un id est précisé en GET, on le prend
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

// Si aucun id n'est passé ou que l'id n'existe pas dans la liste des tâches, on arrête tout !
if (!$id || !array_key_exists($id, $data)) {
    throw new Exception("La tâche demandée n'existe pas !");
}

// Si tout va bien, on récupère la tâche correspondante et on affiche
$task = $data[$id];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Détails de la tâche <?= $task['title'] ?></title>
</head>

<body>
    <h1>Détails de <em><?= $task['title'] ?></em></h1>
    <p><?= $task['description'] ?></p>
    <p>
        La tâche est <strong><?= $task['completed'] ? "complétée" : "encore à faire" ?> !</strong>
    </p>
    <a href="index.php">Retour à la liste</a> ou <a href="index.php?page=create">Créer une autre tâche</a>
</body>

</html>