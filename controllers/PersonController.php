<?php
include_once('../repositories/PersonRepository.php');
include_once("../models/Person.php");
include_once('../utils/ParamsUtils.php');

addPerson();

function addPerson()
    {
        $repository=  new PersonRepository();
        $isValidParams = parametrosValidos($_POST, array("name", "login", "password"));
        if(!$isValidParams) return false; 
        $name = $_POST["name"];
        $login = $_POST["login"];
        $password = $_POST["password"];
        $person = new Person($name, $login, $password);
        $repository->add($person);
    }
