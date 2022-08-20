<!-- 
    PAGE D'ERREUR :
    ------------
    Elle ne sert qu'à afficher le fait qu'une page n'ait pas été trouvée
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page non trouvée :'(</title>
</head>

<body>
    <h1>Ooops ! La page demandée n'existe pas !</h1>
    <a href="<?= $generator->generate('list') ?>">Revenir à la liste</a>
</body>

</html>