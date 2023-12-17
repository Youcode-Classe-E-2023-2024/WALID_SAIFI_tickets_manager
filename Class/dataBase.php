<?php

class Database
{
    private  $host = "localhost";
    private  $username = "root";
    private  $password = "";
    private  $db_name = "database_Tickt";
    private  $conn;
    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
    }
    public function getConnection()
    {
        return $this->conn;
    }
    private function createUtilisateurTable()
    {
        $sql = "CREATE TABLE IF NOT EXISTS Utilisateur (
            id_utilisateur INT PRIMARY KEY AUTO_INCREMENT,
            nom VARCHAR(255),
            prenom VARCHAR(255),
            email VARCHAR(255),
            mot_de_passe VARCHAR(255)
        )";
        $this->conn->query($sql);
    }


}

?>