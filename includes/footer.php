<!-- =========================
     PIED DE PAGE
========================== -->
<footer class="site-footer py-4">
    <div class="container">

        <!--
            Organisation responsive :
            - éléments empilés sur mobile ;
            - éléments alignés horizontalement sur écran plus large.
        -->
        <div
            class="d-flex flex-column flex-md-row
                   justify-content-between align-items-center gap-3"
        >

            <!-- Identité du site -->
            <div class="text-center text-md-start">
                <p class="footer-brand mb-1">
                    Vite & Gourmand
                </p>

                <p class="footer-description mb-0">
                    Traiteur et plats à emporter
                </p>
            </div>

            <!-- Navigation secondaire -->
            <nav aria-label="Navigation du pied de page">
                <ul class="footer-navigation list-unstyled d-flex gap-3 mb-0">
                    <li>
                        <a href="#">Mentions légales</a>
                    </li>

                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </nav>

            <!--
                PHP génère automatiquement l’année actuelle.
                Il ne sera donc pas nécessaire de la modifier chaque année.
            -->
            <p class="footer-copyright mb-0">
                &copy; <?= date('Y') ?> Vite & Gourmand
            </p>

        </div>
    </div>
</footer>
<!-- FIN DU PIED DE PAGE -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
    </script>

    <script src="js/app.js"></script>
</body>

</html>