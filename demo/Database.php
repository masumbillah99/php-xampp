<?php


// connect to the databse, and execute a query.

class Database
{

    public $connection;

    public function __construct($config, $username = 'root', $password = '')
    {

        $dsn = 'mysql:' . http_build_query($config, '', ';');


        // $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};user={$config['user']};charset={$config['charset']}";

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($queryString)
    {
        $statement = $this->connection->prepare($queryString);
        $statement->execute();

        return $statement;
    }
}