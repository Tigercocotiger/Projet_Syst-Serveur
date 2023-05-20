# Documentation de l'Annuaire des utilisateurs

Cette documentation fournit une description et des instructions sur l'utilisation du projet de l'annuaire d'une entreprise

## Fonctionnalités

Les fonctionnalités principales de l'application comprennent :

- Ajout d'un nouvel utilisateur avec les informations suivantes :
  - Login
  - Mot de passe
  - Nom
  - Prénom
  - Email
  - Date d'arrivée

- Affichage de la liste des utilisateurs avec les colonnes suivantes :
  - Login
  - Mot de passe
  - Nom
  - Prénom
  - Email
  - Date d'arrivée
  - Un bouton suppréssion 
- Recherche en temps réel des utilisateurs par leur login
- Suppression d'un utilisateur de la liste

## Configuration requise

Pour exécuter l'application de l'annuaire des utilisateurs, vous aurez besoin des éléments suivants :

- PHP (version 5.6 ou supérieure)
- Base de données MySQL (ou un autre SGBD pris en charge par PHP)
-> Pour le projet j'ai utilisé WAMP qui fait largement le travail

## Installation

Suivez les étapes ci-dessous pour installer et configurer l'application de l'annuaire des utilisateurs :

1. Téléchargez les fichiers du projet sur votre serveur web.
2. Créez une base de données MySQL pour l'application.
3. Importez le fichier `annuaire.sql` dans votre base de données pour créer la table des utilisateurs.
5. Vérifiez que les fichiers `main.js` et `main.css` sont référencés correctement dans le fichier `index.php`.
6. Accédez à l'URL de votre application dans un navigateur pour commencer à utiliser l'annuaire des utilisateurs.

## Utilisation

Une fois l'application de l'annuaire des utilisateurs installée et configurée, vous pouvez effectuer les actions suivantes :

- **Ajouter un utilisateur** : Remplissez les champs du formulaire d'ajout d'utilisateur (login, mot de passe, nom, prénom, email, date d'arrivée) et cliquez sur le bouton "Ajouter". L'utilisateur sera ajouté à la liste affichée.
- **Rechercher un utilisateur** : Saisissez le login d'un utilisateur dans le champ de recherche. La liste des utilisateurs sera filtrée en temps réel pour afficher uniquement les utilisateurs correspondants.
- **Supprimer un utilisateur** : Cliquez sur le bouton "Supprimer" à côté d'un utilisateur dans la liste. L'utilisateur sera supprimé de la liste.
- **Modifier un utilisateur** : Fonction non faite car manque de temps...

## Structure du projet

Le projet de l'annuaire des utilisateurs est structuré comme suit :

- `index.php` : Page principale de l'application contenant le formulaire d'ajout d'utilisateur et la liste des utilisateurs.
- `supprimer_utilisateur.php` : Script PHP pour supprimer un utilisateur à partir de son login
- `ajouter_utilisateur.php` : Script PHP pour ajouter un utilisateur à partir du formulaire de la page principale
- `main.css` : Css qui gère l'entièreté du projet
- `main.js` : Fonctions JS qui gère l'entièreté du projet
- `annuaire.sql` : Fichier SQL à importer
