<?php
define("DB_HOST", 'host');
define("DB_USER", 'username');
define("DB_PASS", 'password');
define("DB_NAME", 'php-form');


function getSqlDatabase()
{
    $db = new PDO(
        'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=utf8',
        DB_USER,
        DB_PASS
    );
    return $db;
}
