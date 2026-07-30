<?php require("partials/header.php") ?>


<!-- page content starts here -->

<div class="min-h-full">
    <?php require("partials/nav.php") ?>
    <?php require("partials/header-banner.php") ?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p class="mb-5">See all the notes you have</p>

            <?php foreach ($notes as $note): ?>
                <div class="mb-3">
                    <li><?= $note['body'] ?></li>
                    <a href="/note?id=<?= $note['id'] ?>" class="text-green-500 underline hover:no-underline">View
                        Deails</a>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

</div>

<!-- page content ends here -->

<?php require("partials/footer.php") ?>