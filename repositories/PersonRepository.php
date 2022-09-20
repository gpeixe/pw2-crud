<?php

require_once("../utils/Connection.php");

class PersonRepository
{

    public function __construct() {}

    public function add ($person) {
        try {
            $connection = MySqlConnection::getConnection();
            $query = "INSERT INTO pessoas (nome, login, password) VALUES (?, ?, ?)";
            $statement = $connection->prepare($query);
            $statement->execute([$person->getName(), $person->getLogin(), $person->getPassword()]);
            if ($statement->rowCount() > 0) return true;
            else return false;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

}