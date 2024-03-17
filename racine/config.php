<?php
class Database {
    private static $serveur = "localhost";
    private static $utilisateur = "root";
    private static $motdepasse = "";
    private static $base = "db_hirelink";
    private static $bdd = null;

    public static function connect() {
        if (self::$bdd === null) {
            try {
                self::$bdd = new PDO("mysql:host=" . self::$serveur . ";dbname=" . self::$base, self::$utilisateur, self::$motdepasse);
            } catch(PDOException $e) {
                echo "Erreur : " . $e->getMessage();
                exit(); // Arrêter le script en cas d'erreur de connexion
            }
        }
        return self::$bdd;
    }
}
?>