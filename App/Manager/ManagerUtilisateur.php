<?php
include('../Model/utilisateur.php');

class ManagerUtilisateur extends Utilisateur{

    public function getUserbyMail(){
        try {
            $bdd=BDD::connexion();
            $mail=$this->getMail();
            $req=$bdd->prepare("SELECT * INTO utilisateur WHERE ?==mail_utilisateur");
            $req->bindParam(1, $mail, PDO::PARAM_STR);
            $req->execute();
            $data = $req->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }
    public function insertUser(){
        try{
            $bdd=BDD::connexion();
            $nom=$this->getNom();
            $prenom=$this->getPrenom();
            $mail=$this->getMail();
            $password=$this->getPassword();
            $image=$this->getImage();
            $statut=$this->getStatut();
            $role=$this->getRole();
            $req=$bdd->prepare("INSERT INTO utilisateur(nom_utilisateur,prenom_utilisateur,mail_utilisateur,password_utilisateur,image_utilisateur,statut_utilisateur,id_roles)Values(?,?,?,?,?,?,?)");
            $req->bindParam(1,$nom,PDO::PARAM_STR);
            $req->bindParam(2,$prenom,PDO::PARAM_STR);
            $req->bindParam(3,$mail,PDO::PARAM_STR);
            $req->bindParam(4,$password,PDO::PARAM_STR);
            $req->bindParam(5,$image,PDO::PARAM_STR);
            $req->bindParam(6,$statut,PDO::PARAM_BOOL);
            $req->bindParam(7,$role,PDO::PARAM_INT);
            $req->execute();
        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }  
    }
    public function activeUser(){
        try{
            $bdd=BDD::connexion();
            $this->setStatut();
            $statut=$this->getStatut();
            $req=$bdd->prepare("UPDATE INTO utilisateur(statut_utilisateur)VALUES(?)");
            $req->bindParam(6,$statut,PDO::PARAM_BOOL);
            $req->execute();
        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }
}
?>