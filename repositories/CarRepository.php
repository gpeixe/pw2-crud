<?php
require_once("../utils/Connection.php");
class CarRepository
{

    public function __construct()
    {
    }

    public function add ($car) {
        try {
            $connection = MySqlConnection::getConnection();
            $query = "INSERT INTO carros (nome, marca, ano, idPessoa) VALUES (?, ?, ?, ?)";
            $statement = $connection->prepare($query);
            $statement->execute([$car->getName(), $car->getBrand(), $car->getYear(), $car->getPersonId()]);
            if ($statement->rowCount() > 0) return true;
            else return false;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

}