<?php

class BDD{
    function __construct()
    {
        
    }
    static function connexion(){
        return new PDO('mysql:host=localhost;dbname=chocoblast', 'root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
}


?>