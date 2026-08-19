<?php

/*
 * Charge l'ensemble des menus temporaires.
 *
 * Plus tard, cette ligne sera remplacée par une
 * récupération depuis la base de données.
 */
$menus = require __DIR__ . '/data/menus.php';

/* Informations propres à la page des menus. */
$pageTitle = 'Nos menus';
$activePage = 'menus';

/* Charge l'en-tête commun du site. */
require_once __DIR__ . '/includes/header.php';

?>

<!-- =========================
     CONTENU PRINCIPAL
========================== -->
<main>

    <!-- =========================
         CATALOGUE DES MENUS
    ========================== -->
    <section class="menus-catalog py-5">
        <div class="container">

            <!-- Présentation de la page -->
            <div class="section-heading mb-5">
                <p class="text-uppercase fw-semibold text-primary mb-2">
                    Notre catalogue
                </p>

                <h1 class="display-5 fw-bold">
                    Nos menus
                </h1>

                <p class="lead text-secondary">
                    Découvrez les menus proposés par Vite & Gourmand
                    pour vos repas et vos événements.
                </p>
            </div>

            <!--
                Zone destinée aux futurs filtres dynamiques :
                prix, thème, régime et nombre de personnes.
            -->
            <div class="menus-filters mb-5">
                <p class="mb-0 text-secondary">
                    Les filtres seront ajoutés prochainement.
                </p>
            </div>

            <!-- Grille affichant tous les menus -->
            <div class="row g-4">

                <?php foreach ($menus as $menu): ?>

                    <?php
                    /*
                     * Utilise le même composant que la page d'accueil.
                     * Chaque passage de la boucle génère une carte.
                     */
                    require __DIR__ . '/includes/menu-card.php';
                    ?>

                <?php endforeach; ?>

            </div>
        </div>
    </section>
    <!-- FIN DU CATALOGUE DES MENUS -->

</main>
<!-- FIN DU CONTENU PRINCIPAL -->

<?php

/* Charge le pied de page commun du site. */
require_once __DIR__ . '/includes/footer.php';

?>