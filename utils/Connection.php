<?php

/*
    Classe PHP que contémm um singleton que gera a conexão para um banco de dados usando PDO.
    Atenção que os valores de hostname, database, username e password dependendem do ambiente sendo utilizado.
    Lembre-se de colocar esse arquivo preferencialmente, em algum local com acesso restrito (.htaccess?)
*/

class MySqlConnection
{
    private static $instance;

    private function __construct()
    {
        $hostname = "localhost";
        $database = "pw2";
        $username = "root";
        $password = "";

        $dsn = "mysql:host=$hostname;dbname=$database";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ];

        try {
            self::$instance = new PDO($dsn, $username, $password, $options);
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public static function getConnection()
    {
        if (!isset(self::$instance)) {
            new MySqlConnection();
        }
        return self::$instance;
    }
}