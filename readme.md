# Projet Laravel

![Logo Laravel](https://miro.medium.com/max/1024/1*IQ9laxKlEm6CodFOZIbgLQ.png)

## 1 - Prérequis


* Requis :
    * Minimum [PHP](https://www.php.net/downloads.php) => 7.2.0
    * BCMath PHP Extension
    * Ctype PHP Extension
    * JSON PHP Extension
    * Mbstring PHP Extension
    * OpenSSL PHP Extension
    * PDO PHP Extension
    * Tokenizer PHP Extension
    * XML PHP Extension
    * [Composer](https://getcomposer.org/)

* Laravel installer :
    * Ouvrir un terminal et exécuter : `composer global require laravel/installer`
    * Vérifier si dans $PATH la variable d'environnement Laravel existe sinon ajoutez la


## 2 - Mettre en place

* Utiliser la commande : `git clone <URL du repo>`

* Accèder avec un terminal au dossier et lancer la commande : `php artisan serv`

* Et enfin accèder à l'addresse suivante : `localhost:8000`

## 3 - Fichiers de configuration

* Fichier de configuration :
    * Tous les fichiers de configuration du framework Laravel sont stockés dans le répertoire `config`.
    * Il est possible que vous devrez peut-être configurer certaines autorisations. Les répertoires de `storage` doivent être accessibles en écriture par votre serveur Web, sinon Laravel ne fonctionnera pas.
    * Dans le cas de `Homestead` (une machine virtuelle), ces dernières sont déjà définies.