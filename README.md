# MINI GAME #

### Formation du Lior chamla pour Symfony Route With Docker, PHP7.3, Nginx & MariaDB ###

### Les outils nécessaires au suivi de la formation

# Installez le gestionnaire de versions GIT

Git est un système de versionning de vos fichiers : https://git-scm.com/downloads

# Installez PHP 7.3 minimum 

Il existe plusieurs façons d'obtenir un environnement de développement pour PHP sur votre ordinateur, vous pouvez choisir la façon que vous préférez. 

# Installez le gestionnaire de dépendances de PHP  : Composer

Pour développer des applications modernes en PHP, on utilise son gestionnaire de dépendances Composer, vous pouvez l'installer ici : https://getcomposer.org/download/

Utilisez un terminal puissant et riche 

On utilisera beaucoup la ligne de commande (terminal) dans cette formation et il faut donc vous assurer d'avoir une interface qui tient la route (l'invite de commande par défaut de Windows devrait suffire mais manquera notamment de colorations syntaxiques etc).

Au choix, vous avez les solutions suivantes (et d'autres que je ne liste pas ici) :

PowerShell (installé par défaut sur Windows)
Cmder (à installer par vous-même) : http://cmder.net/
Hyper (à installer par vous-même) : https://hyper.is/

Pour ma part j'utilise PowerShell.

# Testez votre configuration 

Pour s'assurer que tout fonctionne bien vous allez devoir tester tout ce qu'on a installé :

# Ouvrez votre terminal 
Tapez la commande git et assurez vous qu'il n'y a pas de message d'erreur particulier
Tapez la commande php -v et assurez vous que vous avez la version 7.1 au minimum
Tapez la commande composer -V et assurez vous qu'il n'y a pas de message d'erreur particulier

Parfait !


## Mettre en place VSCode pour travailler !
Pour ma part j'utilise VSCode pour travailler avec Symfony. Il existe d'autres solutions (notamment PHPStorm qui est hélas payant et assez complexe à mettre en oeuvre à mon goût) mais c'est celle que j'ai choisi.

Si vous voulez me suivre et vous aussi utiliser VSCode, il vous faudra installer quelques extensions, ainsi que mettre à jour la configuration.

# Extension PHP Intelephense

Elle donne des tonnes d'outils pour travailler en PHP : Autocompletion, formattage du code, import automatique des namespaces etc etc : 

https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client


# Extension PHP DocBlocker

Elle permet de générer rapidement des documentation pour les fonctions que l'on créé ! Essentiel pour documenter correctement le code.

https://marketplace.visualstudio.com/items?itemName=neilbrayfield.php-docblocker


# Extension PHP Namespace Resolver

Essentielle lorsqu'on travaille avec le système des espaces de noms de PHP (les Namespaces), elle vous permettra de retrouver aisément dans quel espace de noms se trouve telle ou telle classe de Symfony.

https://marketplace.visualstudio.com/items?itemName=MehediDracula.php-namespace-resolver

# Pour étudier le composant symfony/routing, je vous ai préparé un projet type que vous pourrez trouver ici : https://github.com/liorchamla/pratique-symfony-routing

# La Route 
Elle représente une URL, ses paramètres et les contraintes qui s'appliquent à elle
# La RouteCollection
Elle représente la liste des routes utilisables dans notre projet et donne un identifiant unique à chaque Route
# Le UrlMatcher
Il permet d'analyser la requête HTTP actuelle et donc l'adresse tapée par l'utilisateur et retrouve la route correspondante en extrayant les paramètres et informations essentielles afin qu'on puisse travailler avec

## composer require symfony/routing

Après avoir tapé cela, on va pouvoir utiliser dans notre projet l'ensemble des classes et fonctions qui sont offertes par cette librairie !

## composer require symfony/var-dumper
  pour dump dump() et dd() qui permettent de faire des inspections de nos variables !

dump() remplace le traditionnel var_dump()
dd() remplace le traditionnel var_dump() et die()




