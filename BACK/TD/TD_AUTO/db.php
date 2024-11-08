<?php

class DB {
    private static $instance = null;
    
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new PDO("mysql:host=localhost;dbname=nom_bdd", "utilisateur", "mot_de_passe");
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}

?>