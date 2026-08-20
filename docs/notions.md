# Notions apprises pendant le projet Vite & Gourmand

## Objectif du document

Ce fichier regroupe les principales notions techniques rencontrées pendant le développement du projet.

Il sert de mémo personnel pour :
- revoir rapidement une notion ;
- comprendre à quoi elle sert dans le projet ;
- préparer les explications pour l'évaluation ;
- garder une trace de ce qui a été appris.

Les explications doivent rester simples, courtes et liées autant que possible au projet Vite & Gourmand.

---

## Structure d'un projet web

Un projet web est généralement organisé en plusieurs fichiers et dossiers afin de séparer les responsabilités.

Dans ce projet, on retrouve notamment :

- des pages PHP comme `index.php`, `menus.php` ou `menu-details.php` ;
- des fichiers CSS pour l'apparence ;
- des fichiers JavaScript pour les interactions côté navigateur ;
- des composants PHP réutilisables ;
- des données temporaires ;
- un dossier de documentation.

Cette organisation évite d'avoir tout le code dans un seul fichier.

---

## HTML

HTML sert à structurer le contenu d'une page web.

Exemples :
- titres ;
- paragraphes ;
- boutons ;
- formulaires ;
- sections ;
- liens ;
- images.

HTML décrit la structure et le contenu, pas la logique métier.

---

## CSS

CSS sert à gérer l'apparence des éléments HTML.

Il permet notamment de modifier :
- les tailles ;
- les espacements ;
- les couleurs ;
- les polices ;
- la disposition des éléments ;
- l'affichage responsive.

Le fichier principal du projet est actuellement `css/style.css`.

---

## Bootstrap

Bootstrap est un framework CSS.

Il fournit des classes et composants déjà prêts pour faciliter la création d'interfaces responsive.

Dans le projet, il permet notamment de gagner du temps sur :
- les grilles ;
- les cartes ;
- les boutons ;
- les espacements ;
- l'adaptation mobile.

Bootstrap n'empêche pas d'ajouter du CSS personnalisé.

---

## JavaScript

JavaScript permet d'ajouter des comportements dynamiques dans le navigateur.

Dans Vite & Gourmand, il est notamment utilisé pour filtrer les menus sans recharger la page.

Le fichier principal est actuellement :

`js/app.js`

---

## DOM

Le DOM représente la page HTML sous forme d'objets manipulables par JavaScript.

JavaScript peut ainsi :
- rechercher un élément ;
- lire une valeur ;
- modifier un texte ;
- masquer ou afficher un élément ;
- réagir à une action de l'utilisateur.

---

## Événements JavaScript

Un événement correspond à une action détectée par JavaScript.

Exemples :
- clic sur un bouton ;
- modification d'un champ ;
- envoi d'un formulaire ;
- chargement de la page.

Un gestionnaire d'événement permet d'exécuter une fonction lorsqu'un événement se produit.

---

## PHP

PHP est un langage exécuté côté serveur.

Il permet de générer du HTML dynamiquement et servira progressivement à gérer la logique côté serveur de l'application.

Dans le projet, PHP est déjà utilisé pour :
- les pages ;
- les composants réutilisables ;
- les données temporaires des menus.

---

## Inclusion de fichiers PHP

PHP permet d'inclure le contenu d'un fichier dans un autre.

Cela évite de recopier plusieurs fois le même code.

Exemples dans le projet :

- `header.php`
- `footer.php`
- `menu-card.php`

Cette approche permet de créer des composants réutilisables.

---

## require et include

`require` et `include` permettent d'intégrer un fichier PHP dans un autre.

La différence principale est le comportement en cas d'erreur.

Avec `require`, si le fichier nécessaire est introuvable, PHP arrête l'exécution.

Avec `include`, PHP génère un avertissement mais peut continuer l'exécution.

Pour un fichier indispensable au fonctionnement d'une page, `require` est généralement plus adapté.

---

## Tableaux PHP

Un tableau permet de stocker plusieurs données dans une même variable.

Dans le projet, les menus sont actuellement stockés dans des tableaux PHP dans :

`data/menus.php`

Chaque menu contient plusieurs informations comme :
- un identifiant ;
- un titre ;
- une description ;
- un prix ;
- un nombre minimum de personnes.

Ces tableaux sont temporaires et seront remplacés plus tard par la base de données.

---

## Boucle foreach

`foreach` permet de parcourir les éléments d'un tableau PHP.

Elle est notamment utile pour afficher plusieurs menus à partir d'une liste de données.

Principe :

un tableau contient plusieurs menus, et `foreach` permet de traiter chaque menu l'un après l'autre.

---

## Composant réutilisable

Un composant est une partie de l'interface conçue pour être utilisée à plusieurs endroits.

Dans le projet, `includes/menu-card.php` permet de générer une carte de menu sans recopier tout son HTML dans chaque page.

Avantages :
- moins de duplication ;
- code plus facile à modifier ;
- structure plus cohérente.

---

## Paramètre dans une URL

Une URL peut contenir des informations transmises à une page.

Exemple :

`menu-details.php?id=2`

Ici, `id=2` permet d'indiquer à la page quel menu doit être affiché.

PHP peut ensuite récupérer cette information.

---

## Requête POST

Une requête `POST` permet d'envoyer des données depuis un formulaire vers le serveur.

Dans le projet, le formulaire de contact utilise `method="post"` pour envoyer l'adresse e-mail, le titre et la description à `contact.php`.

---

## $_POST

`$_POST` est une variable spéciale de PHP.

Elle permet de récupérer les données envoyées par un formulaire en méthode `POST`.

Exemple dans le formulaire de contact :

`$_POST['email']`

---

## trim()

`trim()` supprime les espaces inutiles au début et à la fin d'une chaîne de caractères.

Cela évite par exemple qu'un champ contenant seulement des espaces soit considéré comme une vraie valeur.

---

## filter_var()

`filter_var()` permet de valider ou filtrer une valeur en PHP.

Dans le formulaire de contact, cette fonction sert à vérifier que l'adresse e-mail respecte un format valide.

---

## FILTER_VALIDATE_EMAIL

`FILTER_VALIDATE_EMAIL` est un filtre PHP utilisé avec `filter_var()`.

Il permet de vérifier si une chaîne de caractères correspond à une adresse e-mail valide.

---

## htmlspecialchars()

`htmlspecialchars()` transforme certains caractères spéciaux en entités HTML.

Cette fonction protège l'affichage des données saisies par l'utilisateur dans une page HTML.

Dans le formulaire de contact, elle est utilisée pour réafficher les valeurs saisies sans interpréter du code HTML.

---

## Données temporaires

Avant de mettre en place une base de données, il est possible d'utiliser des données simulées.

Dans le projet, `data/menus.php` joue actuellement ce rôle.

Cela permet de développer et tester l'interface avant de construire le back-end définitif.

---

## Localhost

`localhost` désigne l'ordinateur sur lequel le serveur web est exécuté.

Avec XAMPP, le projet PHP peut être exécuté localement avant son déploiement sur Internet.

Cela permet de développer et tester l'application sans la publier.

---

## XAMPP

XAMPP fournit notamment un serveur Apache et des outils permettant d'exécuter PHP localement.

Il est utilisé dans ce projet pour lancer l'application depuis le navigateur avec `localhost`.

---

## Git

Git est un système de gestion de versions.

Il permet de :
- conserver l'historique des modifications ;
- revenir à un état précédent ;
- travailler avec des branches ;
- identifier les différentes étapes du développement.

---

## Commit

Un commit correspond à un enregistrement d'un état du projet dans Git.

Il doit idéalement correspondre à une modification cohérente et avoir un message compréhensible.

Dans ce projet, les messages de commit sont rédigés en français.

---

## Push

`push` permet d'envoyer les commits locaux vers le dépôt distant, ici GitHub.

---

## Pull

`pull` permet de récupérer les modifications présentes sur le dépôt distant.

C'est notamment utile pour travailler alternativement sur plusieurs ordinateurs.

---

## Branches Git

Une branche permet de développer des modifications séparément du reste du projet.

Le projet utilise actuellement :
- `main` comme branche principale ;
- `develop` comme branche de développement.

L'énoncé demande également d'utiliser des branches dédiées aux fonctionnalités.

---

## GitHub

GitHub héberge le dépôt Git du projet.

Il permet notamment :
- de sauvegarder le code à distance ;
- de synchroniser plusieurs postes ;
- de partager le projet ;
- de fournir le dépôt demandé pour l'évaluation.

---

## Responsive design

Le responsive design consiste à adapter l'interface aux différentes tailles d'écran.

Le projet doit fonctionner notamment sur ordinateur et mobile.

Bootstrap facilite cette adaptation grâce à son système de grille et à ses classes responsive.

---

## Séparation des responsabilités

Une bonne organisation consiste à éviter de mélanger inutilement toutes les responsabilités.

Exemple :
- HTML/PHP pour la structure et le rendu ;
- CSS pour l'apparence ;
- JavaScript pour les interactions côté navigateur ;
- base de données pour le stockage ;
- PHP côté serveur pour la logique métier.

Cette séparation facilite la compréhension et la maintenance du projet.
