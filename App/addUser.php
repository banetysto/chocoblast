Ajouter la logique à la page App/addUser.php :
1 Vérifier si le formulaire est submit,
2 Tester si les champs sont bien remplis,
3 Importer l'image de profil,
en BDD ajouter 2 enregistrements dans la table roles ( id_roles : 1 , name_roles : user et  id_roles : 2 , name_roles : admin)
Affecter à l'attribut id_roles de utilisateur la valeur 1 dans la fonction (requête insert)
4 ajouter en BDD le nouveau compte. 
Bonus :
5 Vérifier si le compte n'existe pas déja, 
6 hasher le mot de passe avec la méthode
password_hash 
password_hash("mot de passe du formulaire", PASSWORD_DEFAULT);
https://www.php.net/manual/en/function.password-hash,
7 Si l'utilisateur n'importe pas d'image, lui affecter une image par défaut.
--------------------
<?php
    include('Manager/ManagerUtilisateur.php');

    if (isset($_REQUEST['nom'])){
        $nom=$_REQUEST['nom'];
    }
    if (isset($_REQUEST['prenom'])){
        $prenom=$_REQUEST['prenom'];
    }
    if (isset($_REQUEST['mail'])){
        $mail=$_REQUEST['mail'];
    }
    if (isset($_REQUEST['mdp'])){
        $mdp=$_REQUEST['mdp'];
    }
    if (isset($_REQUEST['image'])){
        $image=$_REQUEST['image'];
    }else{
        $mdp='../Public/asset/image/empty.png';
    }

    primptemps($nom);
    primptemps($prenom);
    primptemps($mail);
    primptemps($mdp);

    function primptemps($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=strip_tags($data);
        $data=htmlentities($data);
    }

    echo($nom.'-'.$prenom.'-'.$mail.'-'.$mdp.'-'.$image);

    $user=new ManagerUtilisateur($nom,$prenom,$mail,$mdp,$image);







?>