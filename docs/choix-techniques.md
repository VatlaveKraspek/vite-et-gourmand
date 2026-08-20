# Choix techniques du projet Vite & Gourmand

## Objectif de ce document

Ce document conserve les principales décisions techniques prises pendant le développement du projet Vite & Gourmand ainsi que leur justification.

Il doit permettre :
- de conserver une trace des choix réalisés ;
- de faciliter la compréhension du projet ;
- de pouvoir justifier ces choix lors de l'évaluation ;
- de fournir du contexte aux outils d'assistance au développement utilisés sur le projet.

---

## Principes généraux

Le projet est réalisé dans le cadre d'une formation de développeur web et web mobile.

L'objectif est de réaliser une application fonctionnelle répondant à l'énoncé tout en utilisant des technologies que je peux comprendre, expliquer et défendre lors de l'évaluation.

Les solutions simples, lisibles et adaptées aux besoins du projet sont privilégiées.

Une technologie ou un framework ne doit pas être ajouté uniquement pour complexifier ou moderniser artificiellement le projet.

---

## HTML5

HTML5 est utilisé pour structurer les différentes pages de l'application.

### Pourquoi ce choix ?

HTML est la base de la construction des interfaces web et permet d'utiliser une structure sémantique adaptée.

Une attention particulière devra être portée à la sémantique des éléments afin de participer à l'accessibilité de l'application.

---

## CSS

CSS est utilisé pour personnaliser l'apparence de l'application.

Les styles spécifiques au projet sont principalement regroupés dans :

`css/style.css`

### Pourquoi ce choix ?

Même avec l'utilisation de Bootstrap, conserver du CSS personnalisé permet d'adapter précisément l'identité visuelle de Vite & Gourmand sans dépendre uniquement des styles du framework.

---

## Bootstrap

Bootstrap est utilisé pour faciliter la construction de l'interface et son adaptation aux différentes tailles d'écran.

### Pourquoi ce choix ?

Bootstrap permet notamment :
- de disposer d'une grille responsive ;
- d'utiliser des composants d'interface déjà éprouvés ;
- de réduire la quantité de CSS nécessaire ;
- de gagner du temps sur l'intégration.

Le CSS personnalisé reste utilisé lorsque l'apparence souhaitée nécessite de compléter ou modifier Bootstrap.

---

## JavaScript

JavaScript est utilisé pour les interactions dynamiques réalisées directement dans le navigateur.

Le fichier principal est actuellement :

`js/app.js`

### Utilisation actuelle

JavaScript est notamment utilisé pour le filtrage dynamique des menus.

Cela permet de modifier les menus affichés sans recharger complètement la page.

### Pourquoi ce choix ?

L'énoncé demande explicitement que les filtres de la vue globale actualisent dynamiquement les menus affichés sans rechargement de page.

JavaScript permet de répondre simplement à ce besoin côté navigateur.

---

## PHP

PHP est utilisé progressivement dans le projet pour générer les pages côté serveur et mutualiser certaines parties de l'application.

### Utilisation actuelle

Des composants PHP communs ont notamment été créés :

- `includes/header.php`
- `includes/footer.php`
- `includes/menu-card.php`

Ils peuvent être inclus dans différentes pages afin d'éviter de recopier le même code.

### Pourquoi ce choix ?

PHP permet :
- d'éviter la duplication de certaines parties HTML ;
- de créer des composants simples et réutilisables ;
- de préparer progressivement le passage vers une application dynamique ;
- de disposer d'un langage côté serveur pour le futur back-end.

Cette approche permet également d'introduire progressivement PHP sans transformer immédiatement toute l'architecture du projet.

---

## Données temporaires des menus

Les données des menus sont actuellement stockées dans :

`data/menus.php`

Il s'agit d'une solution temporaire utilisée pendant la construction de l'interface.

### Pourquoi ce choix ?

Cette solution permet de :
- développer les interfaces avant la base de données ;
- tester plusieurs menus ;
- développer les composants d'affichage ;
- tester le filtrage ;
- préparer la vue détaillée.

Ces données seront remplacées progressivement par des données provenant de la future base de données.

Le fichier `data/menus.php` ne constitue donc pas la solution définitive de stockage.

---

## XAMPP

XAMPP est utilisé comme environnement de développement local.

Il permet notamment d'exécuter PHP localement et d'accéder à l'application depuis `localhost`.

### Pourquoi ce choix ?

XAMPP fournit un environnement simple à installer et à utiliser pour apprendre et développer une application PHP en local.

Il permet également de préparer l'utilisation future d'une base de données relationnelle.

---

## Git et GitHub

Git est utilisé pour le versionnement du projet et GitHub pour héberger le dépôt distant.

Le projet utilise notamment :
- une branche principale `main` ;
- une branche de développement `develop`.

Des branches dédiées aux fonctionnalités devront être utilisées progressivement conformément aux exigences de l'énoncé.

### Pourquoi ce choix ?

Git permet :
- de conserver l'historique du développement ;
- de revenir sur des modifications ;
- de travailler avec plusieurs branches ;
- de sécuriser le développement ;
- de synchroniser le projet entre plusieurs postes de travail.

GitHub permet également de répondre à l'exigence de livraison du code via un dépôt public.

---

## Visual Studio Code

Visual Studio Code est utilisé comme environnement principal de développement.

### Pourquoi ce choix ?

VS Code permet de travailler avec l'ensemble des technologies utilisées dans le projet depuis un même environnement.

Son système d'extensions permet également d'ajouter progressivement les outils nécessaires au développement.

---

## Codex

Codex est intégré à Visual Studio Code comme outil d'assistance au développement.

Il est utilisé pour :
- analyser le code ;
- expliquer certaines notions ;
- aider à identifier des erreurs ;
- proposer des modifications ;
- accompagner la documentation du projet.

### Principe d'utilisation

Codex est utilisé comme assistant et non comme remplacement de la compréhension du développement.

Les modifications importantes doivent être expliquées avant d'être réalisées et le développement reste effectué progressivement.

Les règles de collaboration avec Codex sont définies dans :

`AGENTS.md`

---

## Base de données relationnelle

L'énoncé impose l'utilisation d'une base de données relationnelle.

Le choix définitif de la technologie n'est pas encore arrêté dans ce document.

La décision devra être documentée lorsque la base de données sera mise en place.

---

## Base de données non relationnelle

L'énoncé impose également l'utilisation d'une base de données non relationnelle, notamment pour certaines statistiques demandées dans l'espace administrateur.

La technologie définitive n'est pas encore choisie.

Cette décision sera documentée au moment de sa mise en place.

---

## Architecture future

L'architecture définitive du back-end n'est pas encore arrêtée.

Les choix futurs devront tenir compte :
- des exigences de l'énoncé ;
- du temps disponible ;
- de la sécurité ;
- de la maintenabilité ;
- du niveau de complexité ;
- de la capacité à expliquer les choix réalisés lors de l'évaluation.

Toute évolution importante de l'architecture devra être ajoutée à ce document avec sa justification.