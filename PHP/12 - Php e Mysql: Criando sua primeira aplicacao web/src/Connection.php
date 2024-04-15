<?php

class Connection
{
    public static $connection;

    public static function getConnection()
    {
        if (!self::$connection) {
            try {
                self::$connection = new PDO("mysql:host=mysql;dbname=serenatto;charset=utf8", 'root', 'root');
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch (PDOException $e) {
                echo $e;
            }
        }

        return self::$connection;
    }
}