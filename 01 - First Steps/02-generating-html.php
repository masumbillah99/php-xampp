<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate HTML</title>
    <style>
        .body-1 {
            background-color: cyan;
        }

        .body-2 {
            background-color: lightskyblue;
        }

        .body-3 {
            background-color: red;
        }

        .body-4 {
            background-color: green;
        }

        .body-5 {
            background-color: orange;
        }
    </style>
</head>

<body class="body-<?php echo rand(1, 5); ?>">
    <?php echo "<h1>Hello HTML from pHp</h1>"; ?>
</body>

</html>