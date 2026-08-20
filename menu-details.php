<?php

/*
 * Charge l'ensemble des menus temporaires.
 *
 * Plus tard, cette récupération sera remplacée
 * par une recherche dans la base de données.
 */
$menus = require __DIR__ . '/data/menus.php';

/*
 * Récupère et valide l'identifiant présent dans l'URL.
 *
 * Exemple : menu-details.php?id=2
 */
$menuId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

/* Menu correspondant à l'identifiant demandé. */
$selectedMenu = null;

/* Recherche le menu dans le tableau temporaire. */
foreach ($menus as $menu) {
    if ($menu['id'] === $menuId) {
        $selectedMenu = $menu;
        break;
    }
}

/* Indique au navigateur que la ressource demandée n'existe pas. */
if ($selectedMenu === null) {
    http_response_code(404);
}

/* Informations propres à la page. */
$pageTitle = $selectedMenu
    ? $selectedMenu['title']
    : 'Menu introuvable';

$activePage = 'menus';

/* Charge l'en-tête commun du site. */
require_once __DIR__ . '/includes/header.php';

?>

<main>
    <section class="menu-details py-5">
        <div class="container">

            <?php if ($selectedMenu): ?>

                <p class="text-uppercase fw-semibold text-primary mb-2">
                    Détail du menu
                </p>

                <h1 class="display-5 fw-bold">
                    <?= htmlspecialchars($selectedMenu['title']) ?>
                </h1>

                <p class="lead text-secondary">
                    <?= htmlspecialchars($selectedMenu['description']) ?>
                </p>
            <div class="row g-4 mt-3">
                <div class="col-12 col-sm-6 col-lg-3">
                    <p class="text-secondary mb-1">Thème</p>
                    <p class="fw-bold mb-0">
                        <?= htmlspecialchars($selectedMenu['theme']) ?>
                    </p>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <p class="text-secondary mb-1">Régime</p>
                    <p class="fw-bold mb-0">
                        <?= htmlspecialchars($selectedMenu['diet']) ?>
                    </p>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <p class="text-secondary mb-1">Nombre minimum</p>
                    <p class="fw-bold mb-0">
                        <?= (int) $selectedMenu['minimum_people'] ?> personnes
                    </p>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <p class="text-secondary mb-1">Prix</p>
                    <p class="fw-bold text-primary mb-0">
                        <?= number_format($selectedMenu['price'], 2, ',', ' ') ?> €
                    </p>
                </div>
            </div>

            <div class="alert alert-warning mt-5" role="alert">
                <h2 class="h5 fw-bold">
                    Conditions de commande
                </h2>

                <p class="mb-0">
                    <?= htmlspecialchars($selectedMenu['conditions']) ?>
                </p>
            </div>

            <p class="mt-4 mb-0">
                Stock disponible :
                <strong>
                    <?= (int) $selectedMenu['available_stock'] ?> commandes
                </strong>
            </p>
            <div class="mt-5">
                <h2 class="h3 fw-bold mb-4">
                    Composition du menu
                </h2>

                <div class="list-group">
                    <?php foreach ($selectedMenu['dishes'] as $dish): ?>

                        <div class="list-group-item py-3">
                            <p class="text-primary fw-semibold mb-1">
                                <?= htmlspecialchars($dish['type']) ?>
                            </p>

                            <h3 class="h5 mb-2">
                                <?= htmlspecialchars($dish['name']) ?>
                            </h3>

                            <?php if (!empty($dish['allergens'])): ?>

                                <p class="small text-secondary mb-0">
                                    Allergènes :
                                    <?= htmlspecialchars(
                                        implode(', ', $dish['allergens'])
                                    ) ?>
                                </p>

                            <?php else: ?>

                                <p class="small text-secondary mb-0">
                                    Aucun allergène renseigné
                                </p>

                            <?php endif; ?>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>

            <a href="#" class="btn btn-primary mt-5">
                Commander ce menu
            </a>    
            <?php else: ?>

                <div class="alert alert-warning">
                    Le menu demandé est introuvable.
                </div>

            <?php endif; ?>

            <a href="menus.php" class="btn btn-outline-dark mt-4">
                Retour aux menus
            </a>

        </div>
    </section>
</main>

<?php

/* Charge le pied de page commun du site. */
require_once __DIR__ . '/includes/footer.php';

?>