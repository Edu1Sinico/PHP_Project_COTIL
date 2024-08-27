<?php
namespace Sisfin\Util;

use \PDO;
use \PDOException;

class Connection
{
    public static function make()
    {
        $host="143.106.241.3";
        $dbname="cl201115";
        $user="cl201115";
        $password="cl*21112005";

        $dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";
        try {
            $options = [PDO::ATTR_ERRMODE =>
                PDO::ERRMODE_EXCEPTION];
            return new PDO($dsn, $user, $password,$options);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}



/*
function connect($host, $db, $user, $password)
{
    $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

        return new PDO($dsn, $user, $password, $options);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

return connect($host, $db, $user, $password);
*/
