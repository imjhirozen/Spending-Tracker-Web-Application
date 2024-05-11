<?php

class Database {
    public $conn;
    public $statement;

    public function __construct( $config, $username = "root", $password = "password")
    {
        $dns = 'mysql:' . http_build_query( $config, '', ';' );

        $this->conn = new PDO( $dns, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query( $statement, $param = [])
    {
        $this->statement = $this->conn->prepare( $statement );

        $this->statement->execute( $param );

        return $this;
    }

    public function fetchAll()
    {
        return $this->statement->fetchAll();
    }

    public function fetch()
    {
        return $this->statement->fetch();
    }

}