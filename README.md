Projet Knowledge E-Learning

1/ Prérequis:
- Composer
- XAMPP
- VSCode
- PHP
- Symfony

2/ Installation:

(Commandes dans terminal)
Symfony : symfony new --webapp nom_projet
Composer : composer install / update / require
XAMPP : cliquer sur MySQL/Admin, puis céer une nouvelle base de données "knowledge-learning"
Installation et migration de la base de donnée :
 - symfony console doctrine:database:create
 - symfony console make:migration
 - symfony console doctrine:migrations:migrate

3/ Création des fixtures:
 - composer require --dev orm-fixtures
 - symfony console make:fixture
 - php bin/console doctrine:fixtures:load --no-interaction

4/ Connexion et achat:
 - id admin: johndoe@gmail.com
 - mdp: admin012345
 - code de carte : 4242 4242 4242 4242

5/ Faire les tests unitaire
 - php bin/console doctrine:database:create --env=test
 - php bin/console doctrine:schema:update --force --env=test
 - php bin/console doctrine:fixtures:load --env=test
 - Lancer tests : php bin/phpunit

6/ Lancer le projet en local
 - symfony server:start