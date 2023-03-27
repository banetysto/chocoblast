<?php

class Utilisateur{
    private $id;
    private $nom;
    private $prenom;
    private $mail;
    private $password;
    private $image;
    private $statut=false;
    private $role=1;

    function __construct($nom,$prenom,$mail,$password,$image)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->mail=$mail;
        $this->password=$password;
        $this->image=$image;
    }

    // Getters
    function getid(){
        return $this->id;
    }
    function getNom(){
        return $this->nom;
    }
    function getPrenom(){
        return $this->prenom;
    }
    function getMail(){
        return $this->mail;
    }
    function getPassword(){
        return $this->password;
    }
    function getImage(){
        return $this->image;
    }
    function getStatut(){
        return $this->statut;
    }
    function getRole(){
        return $this->role;
    }

    // Setters

    function setNom ($unNom){
        $this->nom=$unNom;
    }
    function setPrenom ($unPrenom){
        $this->prenom=$unPrenom;
    }
    function setMail ($unMail){
        $this->mail=$unMail;
    }
    function setPassword ($unMDP){
        $this->password=$unMDP;
    }
    function setImage($uneImage){
        $this->image=$uneImage;
    }
    function setStatut (){
        $this->statut=!$this->statut;
    }
    function setRole ($unRole){
        $this->role=$unRole;
    }

}


?>