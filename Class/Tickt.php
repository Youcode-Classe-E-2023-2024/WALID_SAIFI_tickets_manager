<?php
require_once("dataBase.php");

class Ticket extends Database
{
    public $titre;
    public $description;
    public $date_creation;
    public $priorite;
    public $id_createur;
    public $id_statut;

    public function __construct($titre, $description, $priorite, $id_createur, $id_statut)
    {
        $this->titre = $titre;
        $this->description = $description;
        $this->priorite = $priorite;
        $this->id_createur = $id_createur;
        $this->id_statut = $id_statut;
    }


    public function createTicket()
    {
        $conn = new Database();
        $query = "INSERT INTO Ticket (titre, description, priorite, id_createur, id_statut) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->getConnection()->prepare($query);
        $stmt->bind_param("ssiii", $this->titre, $this->description, $this->priorite, $this->id_createur, $this->id_statut);
    
        if ($stmt->execute()) {
            return $conn->getConnection()->insert_id;
        } else {
            // Handle the error
            echo "Error creating ticket: " . $stmt->error;
            return false;
        }
    }
    

 

}