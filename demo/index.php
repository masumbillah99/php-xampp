<?php

require "functions.php";
require "Database.php";
require "router.php";


// // connect to the databse, and execute a query.
// $config = require "config.php";
// $db = new Database($config['database']);



// parameter check > sql injection vulnerability

// $id = $_GET['id'];

// $query = "select * from managers where id = :id";

// $managers = $db->query($query, [':id' => $id])->fetchAll();

// dd($managers);

// foreach ($users as $user) {
//     echo "<li>" . $user['email'] . "</li>";
// }