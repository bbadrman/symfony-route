<?php

/**
 * LISTE DES TÂCHES :
 * -----------
 * Cette page nous montre la liste des tâches. On l'appelle en tapant l'url /index.php (ou encore /index.php?page=list ou même encore juste /)
 */

// On récupère les tâches
$data = require_once '../data.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des tâches</title>
</head>

<body>
    <h1>Liste des tâches</h1>

    <a href="index.php?page=create">Créer une tâche</a>

    <?php foreach ($data as $id => $task) : ?>
        <h2><?= $task['title'] ?> (<?= $task['completed'] ? "Complête" : "Incomplête" ?>)</h2>
        <small>Priorité : <?= $task['priority'] ?></small><br>
        <a href="index.php?page=show&id=<?= $id ?>">En savoir plus</a>
    <?php endforeach ?>
</body>

</html>