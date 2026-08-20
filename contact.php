<?php

/* Valeurs affichees dans le formulaire. */
$email = '';
$title = '';
$description = '';

/* Messages d'erreur associes a chaque champ. */
$errors = [
    'email' => '',
    'title' => '',
    'description' => '',
];

$successMessage = '';

/*
 * Validation du formulaire uniquement lorsque la page
 * est appelee avec la methode POST.
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $title = trim($_POST['title'] ?? '');
    $description = trim($_POST['description'] ?? '');

    if ($email === '') {
        $errors['email'] = "L'adresse e-mail est obligatoire.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "L'adresse e-mail n'est pas valide.";
    }

    if ($title === '') {
        $errors['title'] = 'Le titre est obligatoire.';
    }

    if ($description === '') {
        $errors['description'] = 'La description est obligatoire.';
    }

    $formIsValid = !array_filter($errors);

    if ($formIsValid) {
        $successMessage = "Le formulaire est valide. Aucun e-mail n'est encore envoye a cette etape.";

        $email = '';
        $title = '';
        $description = '';
    }
}

/* Informations propres a la page de contact. */
$pageTitle = 'Contact';
$activePage = 'contact';

/* Charge l'en-tete commun du site. */
require_once __DIR__ . '/includes/header.php';

?>

<!-- =========================
     CONTENU PRINCIPAL
========================== -->
<main>

    <!-- =========================
         FORMULAIRE DE CONTACT
    ========================== -->
    <section class="contact-page py-5">
        <div class="container">

            <div class="section-heading mb-5">
                <p class="text-uppercase fw-semibold text-primary mb-2">
                    Nous contacter
                </p>

                <h1 class="display-5 fw-bold">
                    Contact
                </h1>

                <p class="lead text-secondary">
                    Envoyez-nous votre demande, nous vous repondrons dans les
                    meilleurs delais.
                </p>
            </div>

            <div class="row">
                <div class="col-12 col-lg-8">
                    <?php if ($successMessage !== ''): ?>

                        <div class="alert alert-success" role="alert">
                            <?= htmlspecialchars($successMessage) ?>
                        </div>

                    <?php endif; ?>

                    <form method="post" action="contact.php">

                        <div class="mb-3">
                            <label for="email" class="form-label">
                                Adresse e-mail
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="form-control <?= $errors['email'] !== '' ? 'is-invalid' : '' ?>"
                                value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>"
                                required
                            >

                            <?php if ($errors['email'] !== ''): ?>

                                <div class="invalid-feedback">
                                    <?= htmlspecialchars($errors['email']) ?>
                                </div>

                            <?php endif; ?>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">
                                Titre
                            </label>

                            <input
                                type="text"
                                id="title"
                                name="title"
                                class="form-control <?= $errors['title'] !== '' ? 'is-invalid' : '' ?>"
                                value="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>"
                                required
                            >

                            <?php if ($errors['title'] !== ''): ?>

                                <div class="invalid-feedback">
                                    <?= htmlspecialchars($errors['title']) ?>
                                </div>

                            <?php endif; ?>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="form-label">
                                Description
                            </label>

                            <textarea
                                id="description"
                                name="description"
                                class="form-control <?= $errors['description'] !== '' ? 'is-invalid' : '' ?>"
                                rows="6"
                                required
                            ><?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?></textarea>

                            <?php if ($errors['description'] !== ''): ?>

                                <div class="invalid-feedback">
                                    <?= htmlspecialchars($errors['description']) ?>
                                </div>

                            <?php endif; ?>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Envoyer
                        </button>

                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- FIN DU FORMULAIRE DE CONTACT -->

</main>
<!-- FIN DU CONTENU PRINCIPAL -->

<?php

/* Charge le pied de page commun du site. */
require_once __DIR__ . '/includes/footer.php';

?>
