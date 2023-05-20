# Réponses aux questions de cours
**_1) Qu'est-ce que Maven?_**

>Maven est un outil de gestion de projet utilisé dans le développement logiciel, notamment pour les applications Java. Il simplifie la gestion des dépendances, la compilation, les tests et le déploiement. Avec un modèle de projet standardisé appelé POM, Maven automatise de nombreuses tâches de construction. Il favorise les bonnes pratiques en standardisant la structure des projets et en facilitant la collaboration. Maven est largement utilisé et s'intègre bien avec les IDE populaires tels qu'Eclipse et IntelliJ IDEA.

**_2) Quelle est l'arborescence d'un projet d'une application web utilisant Maven?_**

>![Texte alternatif](https://i.imgur.com/DmzVfbp.png)

**_3) Indiquer les 3 attributs nécessaires pour décrire un artefact Maven._**

>Pour décrire un artefact Maven, il est essentiel de spécifier trois attributs clés : `GroupId`, `ArtifactId` et `Version`.

>Le `GroupId` identifie de manière unique le groupe ou l'organisation à laquelle appartient l'artefact.  
L'`ArtifactId` est l'identifiant unique de l'artefact lui-même, choisi de manière significative et descriptive.  
La `Version` indique la version spécifique de l'artefact, permettant la gestion et la référence des différentes versions.  

**_4) Citer 2 autres outils "concurrents" de Maven._**

>Deux outils concurrents à Maven sont `Gradle` et `Ant`.

>`Gradle` est un outil de construction open source qui utilise un langage de script basé sur Groovy ou Kotlin. Il offre une grande flexibilité et une meilleure prise en charge des projets de grande envergure.

>`Ant`, quant à lui, est un autre outil de construction open source qui utilise des fichiers XML pour décrire les tâches de construction. Il est apprécié pour sa simplicité et sa flexibilité, mais nécessite une configuration manuelle des dépendances.

**_5) Qu'est-ce que le "TDD"?_**

> Le `TDD` (Test-Driven Development) est une méthode de développement logiciel dans laquelle les tests automatisés sont écrits avant le code de production. Le processus consiste à écrire un test qui échoue, puis à coder juste ce qu'il faut pour faire passer le test. Ensuite, le code est refactoré pour améliorer sa qualité. Cette approche itérative favorise des tests complets et réguliers, assure une meilleure couverture des fonctionnalités et facilite la détection précoce des erreurs. Le TDD encourage également une conception modulaire et une réflexion approfondie sur la testabilité du code dès le début du développement.

**_6) Quels sont les principes "SOLID"?_**

>Les principes "SOLID" sont un ensemble de principes de conception logicielle visant à créer un code clair et bien structuré.

>- Le `SRP` (Single Responsibility Principle) stipule qu'une classe ne devrait avoir qu'une seule responsabilité.
>- L'`OCP` (Open/Closed Principle) préconise l'extension plutôt que la modification du code existant.
>- Le `LSP` (Liskov Substitution Principle) encourage l'utilisation de sous-classes interchangeables.
>- L'`ISP` (Interface Segregation Principle) recommande des interfaces spécifiques pour éviter les dépendances inutiles.
>- Le `DIP` (Dependency Inversion Principle) préconise l'inversion des dépendances pour rendre le code plus souple et réutilisable.

**_7) Citer 3 serveurs d'applications Java._**

>Trois serveurs d'applications Java couramment utilisés sont :

>1. `Apache Tomcat` : Tomcat est un serveur d'applications web Java open source, largement utilisé et populaire. Il est léger, facile à configurer et adapté pour héberger des applications web simples à moyennement complexes.
>
>2. `WildFly (anciennement JBoss)` : WildFly est un serveur d'applications Java EE open source, rapide et léger. Il prend en charge les fonctionnalités avancées de la plateforme Java Enterprise Edition (Java EE) et est adapté aux applications d'entreprise complexes.
>
>3. `Apache WebSphere Application Server` : WebSphere Application Server est un serveur d'applications Java développé par IBM. Il offre une large gamme de fonctionnalités pour les applications Java EE, notamment la prise en charge des services web, de la sécurité et de la haute disponibilité. Il est couramment utilisé dans les environnements d'entreprise à grande échelle.


**_8) Dans quel fichier se trouve la configuration des servlets d'une application web?_**

>La configuration des servlets d'une application web se trouve généralement dans le fichier `web.xml`.

**_9) Quelles sont les 3 directives spécifiées par les spécifications des JSP? (Les citer et indiquer leurs rôles)_**

>Les spécifications des JSP définissent trois directives principales : la directive de page, la directive d'inclusion et la directive de taglib.

>- `La directive de page` permet de spécifier les attributs et comportements de la page JSP, tels que le langage de script, les classes à importer et les paramètres de configuration.
>
>- `La directive d'inclusion` permet d'inclure le contenu d'un autre fichier dans une page JSP, ce qui facilite la réutilisation de fragments de code ou d'éléments communs.
>
>- `La directive de taglib` permet d'importer et de déclarer l'utilisation de bibliothèques de balises dans une page JSP, ce qui étend les fonctionnalités de base des JSP en utilisant des balises personnalisées fournies par des bibliothèques tierces.
>
**_10) Donner une rapide définition de Docker._**

>`Docker` est une plateforme open source qui utilise des conteneurs logiciels pour exécuter des applications de manière isolée et portable. Les conteneurs Docker encapsulent les applications avec leurs dépendances, ce qui permet une portabilité et une efficacité accrues. Ils facilitent le déploiement et la gestion des applications, offrent une isolation des ressources et simplifient la collaboration entre les développeurs et les équipes opérationnelles.  
  
  
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
