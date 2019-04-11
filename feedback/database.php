<?php


class database
{
    //properties
    private static $user = 'root';
    private static $pass = '';
    private static $db = 'feedbck';
    private static $dsn = 'mysql:host=localhost;dbname=feedbck';
    private static $dbcon;

    private function __construct()
    {
    }

    //get pdo connection
    public static function getDb(){
        if(!isset(self::$dbcon)) {
            try {
                self::$dbcon = new PDO(self::$dsn, self::$user, self::$pass);
                self::$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                $msg = $e->getMessage();
                include 'customerror.php';
                exit();
            }
        }

        return self::$dbcon;
    }
}