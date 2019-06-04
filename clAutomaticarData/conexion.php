<?php

class Conexion {

    private static $servername = "localhost:3306";
    private static $username = "root";
    private static $database = "automaticar";
    private static $password = "";

    static function conn() {
        $conn = new mysqli(self::$servername, self::$username, self::$password, self::$database);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
 
    
}
