<?php

class Person
{
    private  $id;
    private  $name;
    private  $login;
    private  $password;

    function __construct($name, $login, $password)
    {
        $this->$name = $name;
        $this->$login = $login;
        $this->$password = $password;
    }

    function setId ($id) {
        $this->$id = $id;
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getLogin() {
        return $this->login;
    }

    function getPassword() {
        return $this->password;
    }

}