<?php

require "functions.php";


// connect to the databse, and execute a query.
class Database
{

    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=127.0.0.1;dbname=demo_php;user=root;charset=utf8mb4";

        $this->connection = new PDO($dsn);
    }

    public function query($queryString)
    {
        $statement = $this->connection->prepare($queryString);
        $statement->execute();

        return $statement;
    }
}

$db = new Database();
$users = $db->query("select * from users")->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {
    echo "<li>" . $user['email'] . "</li>";
}