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
                <form id="menu-filters">
                    <div class="row g-3">
                        <div class="col-12 col-md-6 col-lg-3">
                            <label for="theme-filter" class="form-label">
                                Thème
                            </label>

                            <select id="theme-filter" class="form-select">
                                <option value="">Tous les thèmes</option>
                                <option value="Classique">Classique</option>
                                <option value="Événement">Événement</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <label for="diet-filter" class="form-label">
                                Régime
                            </label>

                            <select id="diet-filter" class="form-select">
                                <option value="">Tous les régimes</option>
                                <option value="Classique">Classique</option>
                                <option value="Végétarien">Végétarien</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <label for="min-price-filter" class="form-label">
                                Prix minimum
                            </label>

                            <input
                                type="number"
                                id="min-price-filter"
                                class="form-control"
                                min="0"
                                step="1"
                                placeholder="Aucun minimum"
                            >
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <label for="max-price-filter" class="form-label">
                                Prix maximum
                            </label>

                            <input
                                type="number"
                                id="max-price-filter"
                                class="form-control"
                                min="0"
                                step="1"
                                placeholder="Aucun maximum"
                            >
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <label for="minimum-people-filter" class="form-label">
                                Nombre minimum de personnes
                            </label>

                            <input
                                type="number"
                                id="minimum-people-filter"
                                class="form-control"
                                min="1"
                                step="1"
                                placeholder="Indifférent"
                            >
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 d-flex align-items-end">
                            <button
                                type="button"
                                id="reset-filters"
                                class="btn btn-outline-dark w-100"
                            >
                                Réinitialiser les filtres
                            </button>
                        </div>
                    </div>
                </form>
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
            <p id="no-menu-message" class="d-none text-secondary text-center py-5">
                Aucun menu ne correspond à vos critères.
            </p>
        </div>
    </section>
    <!-- FIN DU CATALOGUE DES MENUS -->

</main>
<!-- FIN DU CONTENU PRINCIPAL -->

<?php

/* Charge le pied de page commun du site. */
require_once __DIR__ . '/includes/footer.php';

?>