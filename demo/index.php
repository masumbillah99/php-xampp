<?php

require "functions.php";
// require 'router.php';


// connect to the databse, and execute a query
class Database
{
    public function query($queryString)
    {
        $dsn = "mysql:host=127.0.0.1;dbname=demo_php;charset=utf8mb4";

        $pdo = new PDO($dsn, "root");

        $statement = $pdo->prepare($queryString);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

$db = new Database();
$users = $db->query("select * from users where id = 1");

foreach ($users as $user) {
    echo "<li>" . $user['email'] . "</li>";
}

// dd($users);