<?php

class ConnectionDatabase {
    static protected $_connexion;

    static public function setConnexion()
    {
        if (empty(self::$_connexion)) {
            try {
                self::$_connexion = new PDO('mysql:host=localhost;dbname=BILSKIRNIR_LOCATION;charset=utf8', 'root', 'root');
                self::$_connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return self::$_connexion;
            }
                catch (PDOException $e){
                    die("ERROR : ". $e->getMessage());
                }
            
            
        }
    }
}
?>