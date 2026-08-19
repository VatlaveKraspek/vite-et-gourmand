<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vite & Gourmand</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous"
    >
<!-- Polices utilisées par la charte graphique -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
    href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600;700&family=Nunito+Sans:wght@400;600;700&display=swap"
    rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- =========================
     EN-TÊTE DU SITE
========================== -->
<header>

    <!-- Barre de navigation responsive Bootstrap -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">

            <!-- Nom ou futur logo du site -->
            <a class="navbar-brand" href="index.php">
                Vite & Gourmand
            </a>

            <!--
                Bouton affiché uniquement sur les petits écrans.
                Il permet d'ouvrir et de fermer le menu mobile.
            -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavigation"
                aria-controls="mainNavigation"
                aria-expanded="false"
                aria-label="Afficher la navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Contenu repliable de la navigation -->
            <div class="collapse navbar-collapse" id="mainNavigation">

                <!--
                    ms-auto pousse les liens vers la droite.
                    align-items-lg-center les aligne verticalement
                    sur les écrans de grande taille.
                -->
                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <!-- Lien vers la page d'accueil -->
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">
                            Accueil
                        </a>
                    </li>

                    <!-- Lien vers la future page des menus -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Nos menus
                        </a>
                    </li>

                    <!-- Lien vers la future page de contact -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Contact
                        </a>
                    </li>

                    <!-- Bouton de connexion -->
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-outline-dark" href="#">
                            Connexion
                        </a>
                    </li>

                    <!-- Bouton principal de commande -->
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a class="btn btn-primary" href="#">
                            Commander
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

</header>
<!-- FIN DE L'EN-TÊTE -->
</header>