<?php

class Car
{
    private  $id;
    private  $name;
    private  $brand;
    private  $year;
    private  $personId;

    function __construct($name, $brand, $year, $personId)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->year = $year;
        $this->personId = $personId;
    }

    function setId ($id) {
        $this->id = $id;
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getBrand() {
        return $this->brand;
    }

    function getYear() {
        return $this->year;
    }

    function getPersonId() {
        return $this->personId;
    }
}