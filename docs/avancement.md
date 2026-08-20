# Avancement du projet Vite & Gourmand

## État actuel

Le projet est en cours de développement.

La structure de base du front-end est mise en place et PHP est déjà utilisé pour rendre certains éléments réutilisables.

Les données des menus sont actuellement simulées dans un fichier PHP.
Cette solution est temporaire et sera remplacée plus tard par une base de données.

---

## Éléments réalisés

### Environnement de développement

- VS Code utilisé comme éditeur.
- XAMPP installé pour exécuter PHP en local.
- Projet accessible via localhost.
- Git et GitHub utilisés pour le versionnement.
- Branche principale `main`.
- Branche de développement `develop`.
- Codex intégré à VS Code pour accompagner le développement.

### Structure commune du site

Des composants PHP réutilisables ont été créés afin d'éviter la duplication de code :

- `includes/header.php`
- `includes/footer.php`
- `includes/menu-card.php`

Le header et le footer peuvent ainsi être inclus dans plusieurs pages.

### Page d'accueil

Une première version de la page d'accueil existe dans `index.php`.

Elle utilise les composants communs du site et affiche une sélection de menus.

Cette page devra encore évoluer pour répondre à l'ensemble des exigences de l'énoncé.

### Page des menus

La page `menus.php` permet d'afficher les menus disponibles.

Les cartes de menus sont générées avec le composant :

`includes/menu-card.php`

Les données utilisées actuellement proviennent de :

`data/menus.php`

### Filtrage des menus

Un premier système de filtres dynamiques a été développé en JavaScript.

Le fichier :

`js/app.js`

permet de filtrer les cartes de menus côté navigateur sans recharger la page.

### Vue détaillée d'un menu

La page :

`menu-details.php`

permet d'afficher les informations détaillées d'un menu à partir de son identifiant.

Elle utilise actuellement les données temporaires contenues dans `data/menus.php`.

Une gestion simple du cas où le menu demandé n'existe pas est également présente.

### Formulaire de contact

Une première version de la page :

`contact.php`

permet d'afficher un formulaire de contact avec les champs demandés :

- adresse e-mail ;
- titre ;
- description.

Le formulaire utilise la méthode `POST`.

La validation HTML native est en place avec `required` et `type="email"`.

Une validation PHP côté serveur vérifie également que les champs ne sont pas vides et que l'adresse e-mail est valide.

L'envoi réel de l'e-mail n'est pas encore développé.

---

## Éléments actuellement provisoires

Certaines parties du projet servent uniquement à construire et tester l'interface avant la mise en place du back-end définitif.

Notamment :

- les menus sont stockés dans `data/menus.php` ;
- les données ne proviennent pas encore d'une base de données ;
- certaines images et ressources sont encore des placeholders ;
- les fonctionnalités liées aux comptes et aux commandes ne sont pas encore développées.

Ces éléments devront évoluer progressivement sans supprimer inutilement ce qui fonctionne déjà.

---

## Éléments restant à développer

Le projet devra notamment intégrer progressivement :

- finalisation de la page d'accueil ;
- finalisation de la vue globale des menus ;
- vue détaillée complète des menus ;
- création de compte utilisateur ;
- authentification ;
- réinitialisation du mot de passe ;
- système de commande ;
- espace utilisateur ;
- espace employé ;
- espace administrateur ;
- gestion des avis clients ;
- envoi de l'e-mail du formulaire de contact ;
- gestion des horaires ;
- base de données relationnelle ;
- base de données non relationnelle ;
- envoi des différents mails demandés ;
- règles de gestion liées aux commandes et aux tarifs ;
- sécurité et gestion des rôles ;
- accessibilité ;
- mentions légales et conditions générales de vente ;
- déploiement de l'application ;
- documentation finale du projet.

Cette liste correspond aux grandes fonctionnalités attendues et ne constitue pas l'ordre définitif de développement.

---

## Méthode de développement actuelle

Le développement est volontairement réalisé progressivement.

Pour chaque fonctionnalité :

1. comprendre le besoin ;
2. expliquer la solution envisagée ;
3. développer une petite partie ;
4. tester son fonctionnement ;
5. corriger si nécessaire ;
6. valider avant de poursuivre.

Les solutions simples, lisibles et faciles à expliquer sont privilégiées.

L'objectif n'est pas uniquement d'obtenir une application fonctionnelle, mais également de comprendre le code afin de pouvoir justifier les choix réalisés lors de l'évaluation.
