<?php

class  utilisateur{
    public $nom;
    public $prenom;
    public $email;
    public $mot_de_passe;
 /** 
 * Constructeur de la classe Utilisateur.
 *
 * @param string $nom Le nom de l'utilisateur.
 * @param string $prenom Le prénom de l'utilisateur.
 * @param string $email L'adresse e-mail de l'utilisateur.
 * @param string $mot_de_passe Le mot de passe de l'utilisateur.
 */

    function __construct($nom,$prenom,$email,$mot_de_passe)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->mot_de_passe=$mot_de_passe;  
    }

     

}