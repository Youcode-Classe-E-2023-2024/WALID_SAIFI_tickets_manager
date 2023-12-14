<?php
class user{
    public $nom;
    public $prenom; 
    public $email;
    public $numbre_phone;
    public function __construct($nom,$prenom,$email,$numbre_phone){
         $this->nom=$nom;
         $this->prenom=$prenom;
         $this->email=$email;
         $this->numbre_phone=$numbre_phone;
    }
    
        
    
}