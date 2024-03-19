<?php
require_once '../racine/config.php';
class FormModel {
    
    //_____________________________Contacts__________________________________________________________
    public static function enregistrerContact($id_ct,$email, $adresse, $tele,$id_cv) {
        try {
            // Obtention de la connexion à la base de données
            $bdd = Database::connect();            
            // Préparation de la requête SQL d'insertion
            $sql = "INSERT INTO contacts (id_contact, email, adresse, telephone, id_cv) VALUES (?,?,?, ?, ?)";
            // Préparation de la déclaration SQL
            $stmt = $bdd->prepare($sql);
            // Exécution de la requête avec les valeurs
            $result = $stmt->execute([$id_ct,$email, $adresse, $tele,$id_cv]);
            // Retourner true si l'insertion a réussi, sinon false
            return $result;
        } catch (PDOException $e) {
            // Gestion des erreurs de base de données
            echo "Erreur de base de données: " . $e->getMessage();
            return false;
        }
    }
    public function dernierIdContact() {
        $bdd = Database::connect();
        // Requête SQL pour obtenir le dernier ID
        $sql = "SELECT MAX(id_contact) AS last_id FROM contacts";
        $stmt = $bdd->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Retourne le dernier ID incrémenté de 1
        return ($result['last_id'] + 1);
    }


    //_____________________________Formation__________________________________________________________

    public function enregistrerFormation($id_f, $nom, $diplome, $dateDebut, $dateFin, $etablissement, $pays, $ville, $id_cv) {
        try{
            $bdd = Database::connect();
        // Requête SQL pour insérer les données de formation
        $sql = "INSERT INTO Formations (id_formation, nom, diplome, date_debut, date_fin, ecole, pays, ville, id_cv) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $bdd->prepare($sql);
        $result = $stmt->execute([$id_f, $nom, $diplome, $dateDebut, $dateFin, $etablissement, $pays, $ville, $id_cv]);

        return $result;
        } catch (PDOException $e) {
            echo "Erreur de base de données: " . $e->getMessage();
            return false;
        }
    }
    public function dernierIdFormation() {
        $bdd = Database::connect();
        // Requête SQL pour obtenir le dernier ID
        $sql = "SELECT MAX(id_formation) AS last_id FROM formations";
        $stmt = $bdd->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // Retourne le dernier ID incrémenté de 1
        return ($result['last_id'] + 1);
    }

    //_____________________________Profil__________________________________________________________

    public function enregistrerProfil($id_P, $descrption, $id_cv) {
        try{
            $bdd = Database::connect();
            // Requête SQL pour insérer les données de formation
            $sql = "INSERT INTO profils (id_profil, descrption, id_cv) VALUES (?, ?, ?)";
            $stmt = $bdd->prepare($sql);
            $result = $stmt->execute([$id_P, $descrption, $id_cv]);
            return $result;
            } catch (PDOException $e) {
                echo "Erreur de base de données: " . $e->getMessage();
                return false;
            }
    }
    public function dernierIdProfil() {
        $bdd = Database::connect();
        // Requête SQL pour obtenir le dernier ID
        $sql = "SELECT MAX(id_profil) AS last_id FROM profils";
        $stmt = $bdd->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // Retourne le dernier ID incrémenté de 1
        return ($result['last_id'] + 1);
    }

    
    //_____________________________Expériences Professionnelle__________________________________________________________

    public function enregistrerExp($id_exp, $nom, $dateDebut, $dateFin, $descrip, $nom_entreprise, $id_cv) {
        try{
            $bdd = Database::connect();
        // Requête SQL pour insérer les données de exp
        $sql = "INSERT INTO experiences (id_experience, nom, date_debut, date_fin, description, nom_entreprise, id_cv) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $bdd->prepare($sql);
        $result = $stmt->execute([$id_exp, $nom, $dateDebut, $dateFin, $descrip, $nom_entreprise, $id_cv]);

        return $result;
        } catch (PDOException $e) {
            echo "Erreur de base de données: " . $e->getMessage();
            return false;
        }
    }
    public function dernierIdExp() {
        $bdd = Database::connect();
        // Requête SQL pour obtenir le dernier ID
        $sql = "SELECT MAX(id_experience) AS last_id FROM experiences";
        $stmt = $bdd->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // Retourne le dernier ID incrémenté de 1
        return ($result['last_id'] + 1);
    }
 
    
    //_____________________________Compétences__________________________________________________________

    public function enregistrerCompetences($id_competence, $nom, $niveau, $id_cv) {
        try{
            $bdd = Database::connect();
        // Requête SQL pour insérer les données de Compétences
        $sql = "INSERT INTO competences (id_competence, nom, niveau, id_cv) VALUES (?, ?, ?, ?)";
        $stmt = $bdd->prepare($sql);
        $result = $stmt->execute([$id_competence, $nom, $niveau, $id_cv]);
        return $result;
        } catch (PDOException $e) {
            echo "Erreur de base de données: " . $e->getMessage();
            return false;
        }
    }
    public function dernierIdCompetences() {
        $bdd = Database::connect();
        // Requête SQL pour obtenir le dernier ID
        $sql = "SELECT MAX(id_competence) AS last_id FROM competences";
        $stmt = $bdd->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // Retourne le dernier ID incrémenté de 1
        return ($result['last_id'] + 1);
    }

    //_____________________________langues__________________________________________________________

    public function enregistrerLangues($id_langue, $nom, $niveau, $id_cv) {
        try{
            $bdd = Database::connect();
        // Requête SQL pour insérer les données de Compétences
        $sql = "INSERT INTO langues (id_langue, nom, niveau, id_cv) VALUES (?, ?, ?, ?)";
        $stmt = $bdd->prepare($sql);
        $result = $stmt->execute([$id_langue, $nom, $niveau, $id_cv]);
        return $result;
        } catch (PDOException $e) {
            echo "Erreur de base de données: " . $e->getMessage();
            return false;
        }
    }
    public function dernierIdLangues() {
        $bdd = Database::connect();
        // Requête SQL pour obtenir le dernier ID
        $sql = "SELECT MAX(id_langue) AS last_id FROM langues";
        $stmt = $bdd->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // Retourne le dernier ID incrémenté de 1
        return ($result['last_id'] + 1);
    }

}

?>