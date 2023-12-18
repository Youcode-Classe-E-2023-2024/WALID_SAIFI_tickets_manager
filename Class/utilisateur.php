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
    
    /**
     * Getter pour le nom de l'utilisateur.
     *
     * @return string Le nom de l'utilisateur.
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Setter pour le nom de l'utilisateur.
     *
     * @param string $nom Le nouveau nom de l'utilisateur.
     */
    public function setNom($nom) {
        $this->nom = $nom;
    }

    /**
     * Getter pour le prénom de l'utilisateur.
     *
     * @return string Le prénom de l'utilisateur.
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Setter pour le prénom de l'utilisateur.
     *
     * @param string $prenom Le nouveau prénom de l'utilisateur.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    /**
     * Getter pour l'adresse e-mail de l'utilisateur.
     *
     * @return string L'adresse e-mail de l'utilisateur.
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Setter pour l'adresse e-mail de l'utilisateur.
     *
     * @param string $email La nouvelle adresse e-mail de l'utilisateur.
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * Getter pour le mot de passe de l'utilisateur.
     *
     * @return string Le mot de passe de l'utilisateur.
     */
    public function getMotDePasse() {
        return $this->mot_de_passe;
    }

    /**
     * Setter pour le mot de passe de l'utilisateur.
     *
     * @param string $mot_de_passe Le nouveau mot de passe de l'utilisateur.
     */
    public function setMotDePasse($mot_de_passe) {
        $this->mot_de_passe = $mot_de_passe;
    }
     

}