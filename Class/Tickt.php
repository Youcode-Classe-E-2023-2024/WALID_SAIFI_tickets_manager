<?php
  require_once("dataBase.php");
       class Tickt extends Database{
             public   $titre ;
             public   $description;
             public   $date_creation;
             public   $priorite;
             public   $id_createur;
             public   $id_statut;

    public function __construct($titre,$description,$date_creation,$priorite,$id_createur,$id_statut){
        $this->titre=$titre;
        $this->description=$description;
        $this->date_creation=$date_creation;
        $this->priorite=$priorite;
        $this->id_createur=$id_createur;
        $this->id_statut=$id_statut;
       }

    }