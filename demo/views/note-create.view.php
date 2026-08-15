<?php require("partials/header.php") ?>

<div class="min-h-full">
    <?php require("partials/nav.php") ?>
    <?php require("partials/header-banner.php") ?>


    <!-- page content starts here -->

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

            <div class="max-w-xl my-8 bg-white rounded-xl border border-gray-200 shadow-md p-6">
                <form method="post" class="space-y-4">

                    <div>
                        <label for="body" class="block text-sm font-semibold text-gray-800 mb-4">
                            Post A Note
                        </label>

                        <textarea name="body" id="body" rows="5"
                            class="w-full rounded-md border border-gray-300 p-3 shadow-sm focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none"
                            placeholder="Here's an idea for a note..."></textarea>

                        <?php if (isset($errors['body'])): ?>
                            <p class="text-red-500 text-xs"><?= $errors['body'] ?></p>
                        <?php endif ?>

                    </div>

                    <div class="flex justify-end gap-3 pt-2">
                        <button type="button"
                            class="px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-md">
                            Cancel
                        </button>

                        <button type="submit"
                            class="px-4 py-2 text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 rounded-md shadow">
                            Submit
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </main>

</div>


<!-- page content ends here -->


<?php require("partials/footer.php") ?>