<?php

require "functions.php";
require "Database.php";
$config = require "config.php";


// connect to the databse, and execute a query.

$db = new Database($config['database']);



// parameter check > sql injection vulnerability

$id = $_GET['id'];

$query = "select * from managers where id = :id";

$managers = $db->query($query, [':id' => $id])->fetchAll();

dd($managers);

foreach ($users as $user) {
    echo "<li>" . $user['email'] . "</li>";
}