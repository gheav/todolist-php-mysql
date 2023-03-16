<?php

class Database
{
    public function connection()
    {
        $servername = "localhost";
        $username   = "root";
        $password   = "";

        try {
            $conn = new \PDO("mysql:host=$servername;dbname=todolist", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
