<?php
include_once('../repositories/CarRepository.php');
include_once('../models/Car.php');
include_once('../utils/ParamsUtils.php');




addCar($_POST);

function addCar()
    {
        $repository=  new CarRepository();
        $isValidParams = parametrosValidos($_POST, array("name", "brand", "year", "personId"));
        if(!$isValidParams) return false; 
        $name = $_POST["name"];
        $brand = $_POST["brand"];
        $year = $_POST["year"];
        $personId = $_POST["personId"];
        $car = new Car($name, $brand, $year, $personId);
        $repository->add($car);
    }