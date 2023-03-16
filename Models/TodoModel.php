<?php
require_once __DIR__ . "/../Config/Database.php";
class TodoModel
{
    private \PDO $db;
    function __construct()
    {
        $database = new Database();
        $this->db = $database->connection();
    }

    public function save(String $action): void
    {
        $status     = 0;
        $datetime   = date('Y-m-d H:i:s');
        $sql        = $this->db->prepare("INSERT INTO todo (`action`,`status`,`created_at`) VALUES (:action,:status,:createdAt)");
        $sql->bindParam(':action', $action);
        $sql->bindParam(':status', $status);
        $sql->bindParam(':createdAt', $datetime);
        $sql->execute();
    }

    public function remove()
    {
        # code...
    }

    public function findAll()
    {
        # code...
    }
}
