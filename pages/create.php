
<?php
/**
 * PAGE DE CREATION D'UNE TÂCHE :
 * -------------
 * Cette page peut être appelée de deux façons :
 * - en GET : quand on tape simplement l'adresse /index.php?page=create dans le navigateur, c'est une requête en GET par défaut
 * => Elle affiche simplement le formulaire HTML
 * - en POST : quand on soumet le formulaire, le navigateur va rappeler /index.php?page=create mais cette fois ci en POST
 * => On analyse le $_POST et on traite les données soumises
 */

// Si la requête arrive en POST, c'est qu'on a soumis le formulaire :
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Traitement à la con (enregistrement en base de données, redirection, envoi d'email, etc)...
    var_dump("Bravo, le formulaire est soumis (TODO : traiter les données)", $_POST);

    // Arrêt du script
    return;
}

// Sinon, si on est en GET, on affiche :
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Créer une tâche</title>
</head>

<body>
    <h1>Créer une nouvelle tâche</h1>

    <form action="" method="POST">
        <input type="text" name="title" placeholder="Titre de la tâche">
        <input type="text" name="description" placeholder="Description de la tâche">
        <select name="priority">
            <option value="1">Priorité faible</option>
            <option value="2">Priorité moyenne</option>
            <option value="3">Priorité forte</option>
        </select>
        <label>
            <input type="checkbox" name="completed"> Tâche terminée ?
        </label>
        <button type="submit">Enregistrer</button>
    </form>

    <a href="<?= $generator->generate('list') ?>">Retour à la liste</a> 
    ou <a href="<?= $generator->generate('create') ?>">Créer une autre tache</a>
</body>

</html>