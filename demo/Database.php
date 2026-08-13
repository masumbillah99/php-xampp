<?php


// connect to the databse, and execute a query.

class Database
{

    public $connection;
    public $statement;

    public function __construct($config, $username = 'root', $password = '')
    {

        $dsn = 'mysql:' . http_build_query($config, '', ';');


        // $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};user={$config['user']};charset={$config['charset']}";

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }


    public function query($queryString, $params = [])
    {
        $this->statement = $this->connection->prepare($queryString);
        $this->statement->execute($params);

        return $this;
    }


    // get all results
    public function findAll()
    {
        return $this->statement->fetchAll();
    }

    // get one/single result
    public function find()
    {
        return $this->statement->fetch();
    }


    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort();
        }

        return $result;
    }
}