<?php require("views/partials/header.php") ?>


<!-- page content starts here -->

<div class="min-h-full">
    <?php require("views/partials/nav.php") ?>
    <?php require("views/partials/header-banner.php") ?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p class="mb-4">
                <a href="/notes" class="text-indigo-500 underline">Go back...</a>
            </p>
            <p><?= htmlspecialchars($note['body']) ?></p>
        </div>
    </main>

</div>

<!-- page content ends here -->

<?php require("views/partials/footer.php") ?>