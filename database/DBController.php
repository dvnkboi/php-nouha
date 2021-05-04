<?php

namespace mobileshop;

use PDO;

class DBController
{
    // DB Connection Props
    private $host = 'localhost';
    private $user = 'root';
    private $password = '8576';
    private $database = 'projetphp';

    private $db_handler;
    private $statement;
    private $db_options;

    public function __construct()
    {
        $this->db_options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
          ];

        try {
            $this->db_handler = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password, $this->db_options);
        } catch (PDOException $e) {
            $this->db_handler = null;
            echo '<div class="alert alert-danger">' . get_class($e) .
            ' on line: ' . $e->getLine() . ' of ' . $e->getFile() . ': ' . $e->getMessage() . '</div>';
        }
    }

    public function __destruct()
    {
        if($this->db_handler != null)
        $this->db_handler = null;
    }

    public function query($query)
    {
        try {
            $this->statement = $this->db_handler->prepare($query);
        } catch (Error $e) {
            echo '<div class="alert alert-danger">' . get_class($e) .
            ' on line: ' . $e->getLine() . ' of ' . $e->getFile() . ': ' . $e->getMessage() . '</div>';
        }
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }
        $this->statement->bindValue($param, $value, $type);
    }

    public function execute()
    {
        try {
            $this->statement->execute();
        } catch (Error $e) {
            echo '<div class="alert alert-danger">' . get_class($e) .
            ' on line: ' . $e->getLine() . ' of ' . $e->getFile() . ': ' . $e->getMessage() . '</div>';
        }
    }

    public function single(): array
    {
        try {
            $this->statement->execute();
            return $this->statement->fetch(PDO::FETCH_ASSOC);
        } catch (Error $e) {
            echo '<div class="alert alert-danger">' . get_class($e) .
            ' on line: ' . $e->getLine() . ' of ' . $e->getFile() . ': ' . $e->getMessage() . '</div>';
        }
    }

    public function results(): array
    {
        try {
            $this->statement->execute();
            return $this->statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (Error $e) {
            echo '<div class="alert alert-danger">' . get_class($e) .
            ' on line: ' . $e->getLine() . ' of ' . $e->getFile() . ': ' . $e->getMessage() . '</div>';
        }
    }

    public function lastInsertId()
    {
        return $this->db_handler->lastInsertId();
    }
}
