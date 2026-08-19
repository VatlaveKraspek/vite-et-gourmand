<?php

/*
 * Données temporaires utilisées pour construire la page.
 *
 * Plus tard, ces menus seront récupérés depuis la base
 * de données. Pour le moment, ce tableau permet déjà
 * de développer et de tester l'affichage dynamique.
 */
$featuredMenus = [
    [
        'name' => 'Formule Express',
        'description' => 'Un plat du jour accompagné de son dessert.',
        'price' => 14.90,
    ],
    [
        'name' => 'Menu Tradition',
        'description' => 'Une entrée, un plat généreux et un dessert maison.',
        'price' => 18.90,
    ],
    [
        'name' => 'Menu Végétarien',
        'description' => 'Une formule complète, colorée et sans viande.',
        'price' => 16.90,
    ],
];

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
                        <a class="btn btn-primary btn-lg" href="#">
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

                <?php
                /*
                * La boucle parcourt le tableau $featuredMenus.
                *
                * À chaque passage, $menu contient les informations
                * d'un menu et génère automatiquement une colonne.
                */
                foreach ($featuredMenus as $menu):
                ?>

                    <div class="col-md-6 col-lg-4">
                        <article class="menu-card h-100 p-4">

                            <!-- Nom du menu -->
                            <h3 class="h4">
                                <?= htmlspecialchars($menu['name']) ?>
                            </h3>

                            <!-- Description du menu -->
                            <p class="text-secondary">
                                <?= htmlspecialchars($menu['description']) ?>
                            </p>

                            <!-- Prix formaté avec deux chiffres après la virgule -->
                            <p class="menu-price mb-0">
                                <?= number_format($menu['price'], 2, ',', ' ') ?> €
                            </p>

                        </article>
                    </div>

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