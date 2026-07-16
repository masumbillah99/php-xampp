<?php

require "functions.php";
require "Database.php";
$config = require "config.php";


// connect to the databse, and execute a query.

$db = new Database($config);
$users = $db->query("select * from users")->fetchAll(PDO::FETCH_ASSOC);

dd($users);

foreach ($users as $user) {
    echo "<li>" . $user['email'] . "</li>";
}