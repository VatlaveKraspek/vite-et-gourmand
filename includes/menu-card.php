<div
    class="menu-item col-md-6 col-lg-4"
    data-theme="<?= htmlspecialchars($menu['theme']) ?>"
    data-diet="<?= htmlspecialchars($menu['diet']) ?>"
    data-price="<?= (float) $menu['price'] ?>"
    data-minimum-people="<?= (int) $menu['minimum_people'] ?>"
>
    <article class="menu-card h-100 p-4">

        <!-- Titre du menu -->
        <h3 class="h4">
            <?= htmlspecialchars($menu['title']) ?>
        </h3>

        <!-- Présentation courte du menu -->
        <p class="text-secondary">
            <?= htmlspecialchars($menu['description']) ?>
        </p>

        <!-- Nombre minimal de personnes -->
        <p class="menu-minimum">
            À partir de
            <strong>
                <?= (int) $menu['minimum_people'] ?> personnes
            </strong>
        </p>

        <!-- Prix correspondant au nombre minimal de personnes -->
        <p class="menu-price">
            <?= number_format($menu['price'], 2, ',', ' ') ?> €
        </p>

        <!-- Accès à la future page détaillée -->
        <a
            class="btn btn-outline-dark"
            href="menu-details.php?id=<?= (int) $menu['id'] ?>"
        >
            Voir le menu
        </a>

    </article>
</div>