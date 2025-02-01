Projet de site e-learning "Knowledge Learning"

1/ Prérequis:
- Composer
- Xampp
- VsCode
- Php (version 8.2 minimum)
- Symfony (version 5)

2/ Installation:

Créer un répertoire "knowledge" dans le répertoire "htdocs" dans xampp.
Dans VsCode ouvrer votre répertoire "Knowledge" et taper dans le terminal 'cd <nom du répertoire>' ensuite 'git clone https://github.com/Samuel-Viv/knowledge_learning.git 'afin de télécharger le projet.
Taper ensuite dans le terminal 'composer install' 
Installation de la base de donnée taper:
 - php bin/console doctrine:database:create
 - php bin/console doctrine:migrations:migrate
Création des fixtures:
 - php bin/console doctrine:fixtures:load

3/ Connexion et Faire un achat:
- identifiant admin: janedoe@gmail.com
- mdp: admin0123
- code de carte : 4242 4242 4242 4242
- la date et le code secret n'a pas d'importance

4/ En cas de problemes:
Message d'erreur lorsque vous etes dans la partie admin est que vous voulez allez sur la base de donnée Cursus ou Lesson. Vous devez modifier votre fichier php.ini ";extension=intl" vous devez enlever le ";" .

5/ Faire les tests unitaire
 - Vous devrait écrire dans le terminal 'php bin/console doctrine:database:create --env=test'.
 - Ensuite 'php bin/console doctrine:schema:update --force --env=test'.
 - 'php bin/console doctrine:fixtures:load --env=test'.
 - Et enfin pour lancer les tests 'php bin/phpunit'.
