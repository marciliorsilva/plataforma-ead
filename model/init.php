<?php

define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB_NAME', 'berlim_ead');

try {

    function db_connect()
    {
        $PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);

        return $PDO;
    }

} catch (PDOException $e) {
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}
 

require_once 'functions.php';
