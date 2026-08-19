<?php

/*
 * Charge tous les menus temporaires depuis le fichier de données.
 *
 * Le tableau retourné par data/menus.php est stocké
 * dans la variable $menus.
 */
$menus = require __DIR__ . '/data/menus.php';

/*
 * Sélectionne les trois premiers menus pour la page d'accueil.
 *
 * array_slice permet d'extraire une partie d'un tableau :
 * - 0 : commencer au premier élément ;
 * - 3 : récupérer au maximum trois éléments.
 */
$featuredMenus = array_slice($menus, 0, 3);

/*
 * Informations transmises à header.php.
 */
$pageTitle = 'Accueil';
$activePage = 'home';

/* Charge l'en-tête commun du site. */
require_once __DIR__ . '/includes/header.php';

?>
<!-- =========================
     CONTENU PRINCIPAL
========================== -->
<main>

    <!-- =========================
         BANNIÈRE D'ACCUEIL
    ========================== -->
    <section class="hero bg-light py-5">
        <div class="container">

            <!--
                La grille Bootstrap divise la bannière en deux colonnes :
                - le texte à gauche ;
                - le visuel à droite.
                
                Les colonnes s'empilent automatiquement sur mobile.
            -->
            <div class="row align-items-center g-5">

                <!-- Colonne contenant le message principal -->
                <div class="col-lg-6">

                    <!-- Petit texte permettant d'identifier l'activité -->
                    <p class="text-uppercase fw-semibold text-primary mb-2">
                        Traiteur et plats à emporter
                    </p>

                    <!-- Titre principal de la page -->
                    <h1 class="display-4 fw-bold">
                        Des plats gourmands, prêts quand vous l’êtes
                    </h1>

                    <!-- Présentation courte de l'entreprise -->
                    <p class="lead text-secondary my-4">
                        Découvrez une cuisine généreuse préparée avec des
                        produits de qualité, à emporter ou à commander pour
                        vos événements.
                    </p>

                    <!-- Actions principales proposées aux visiteurs -->
                    <div class="d-flex flex-column flex-sm-row gap-3">

                        <!-- Bouton principal -->
                        <a class="btn btn-primary btn-lg" href="menus.php">
                            Découvrir nos menus
                        </a>

                        <!-- Bouton secondaire -->
                        <a class="btn btn-outline-dark btn-lg" href="#">
                            Nous contacter
                        </a>

                    </div>
                </div>

                <!-- Colonne réservée au futur visuel principal -->
                <div class="col-lg-6">

                    <!--
                        Ce bloc temporaire sera remplacé par une véritable
                        photographie lorsque les images seront choisies.
                    -->
                    <div
                        class="bg-secondary-subtle rounded-4 d-flex
                               align-items-center justify-content-center"
                        style="min-height: 350px;"
                    >
                        <p class="text-secondary mb-0">
                            Visuel du plat à ajouter
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- FIN DE LA BANNIÈRE D'ACCUEIL -->

        <!-- =========================
        MENUS MIS EN AVANT
    ========================== -->
    <section class="featured-menus py-5">
        <div class="container">

            <!-- Titre de la section -->
            <div class="section-heading mb-4">
                <p class="text-uppercase fw-semibold text-primary mb-2">
                    À découvrir
                </p>

                <h2 class="display-6 fw-bold">
                    Nos menus du moment
                </h2>
            </div>

            <!-- Grille contenant les menus -->
            <div class="row g-4">

                <?php foreach ($featuredMenus as $menu): ?>

                <?php
                /*
                * Charge le composant pour le menu actuellement
                * parcouru par la boucle.
                *
                * require est volontairement utilisé sans "once",
                * car le composant doit être chargé pour chaque menu.
                */
                require __DIR__ . '/includes/menu-card.php';
                ?>

            <?php endforeach; ?>

            </div>
        </div>
    </section>
    <!-- FIN DES MENUS MIS EN AVANT -->

</main>
<!-- FIN DU CONTENU PRINCIPAL -->
<?php

/*
 * Charge le pied de page commun et termine le document HTML.
 */
require_once __DIR__ . '/includes/footer.php';

?>