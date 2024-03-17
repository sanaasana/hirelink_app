<?php

// Connexion à la base de données MySQL
include '../racine/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validation des données du formulaire
    $erreur = validateFormData($_POST);
    if ($erreur === '') {
        // Insertion des données dans la base de données
        $insertion = insertData($_POST);
        if ($insertion) {
            session_start();
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['nom'] = $_POST['nom'];
            $_SESSION['prenom'] = $_POST['prenom'];
            $_SESSION['ville'] = $_POST['ville'];
            $_SESSION['pays'] = $_POST['pays'];
            $_SESSION['date_naissance'] = $_POST['date_naissance'];
            $_SESSION['telephone'] = $_POST['tele'];
            $_SESSION['sexe'] = $_POST['sexe'];
            $_SESSION['type_utilisateur'] = getUserType($_POST['email']);
            header("Location: ../frontend/profileCandidat.html");
            exit();
        } else {
            $erreur = "Erreur : l'insertion dans la base de données a échoué !";
        }
    }
}

function validateFormData($formData) {
    $erreur = '';

    if (!isset($formData['email']) || !filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
        $erreur = 'L\'adresse email est invalide !';
    } elseif (strlen($formData['mdp']) < 6) {
        $erreur = 'Le mot de passe doit contenir au moins 6 caractères !';
    } elseif (empty($formData['nom']) || empty($formData['prenom'])) {
        $erreur = 'Le nom et le prénom sont obligatoires !';
    } elseif (empty($formData['ville']) || empty($formData['pays'])) {
        $erreur = 'La ville et le pays sont obligatoires !';
    } elseif (!isset($formData['tele']) || !preg_match("/^[0-9]{10}$/", $formData['tele'])) {
        $erreur = 'Le numéro de téléphone est invalide (format attendu : 10 chiffres) !';
    } elseif (!isset($formData['sexe']) || ($formData['sexe'] !== 'M' && $formData['sexe'] !== 'F')) {
        $erreur = 'Le sexe doit être spécifié (M ou F) !';
    }

    return $erreur;
}

function insertData($formData) {
    $bdd = Database::connect();
    $req = $bdd->prepare('INSERT INTO candidats (email, mot_de_passe, nom, prenom, ville, pays, telephone, date_naissance, sexe) VALUES (:email, MD5(:mot_de_passe), :nom, :prenom, :ville, :pays, :telephone, :date_naissance, :sexe)');
    return $req->execute(array(
        'email' => $formData['email'],
        'mot_de_passe' => $formData['mdp'],
        'nom' => $formData['nom'],
        'prenom' => $formData['prenom'],
        'ville' => $formData['ville'],
        'pays' => $formData['pays'],
        'telephone' => $formData['tele'],
        'date_naissance' => $formData['date_naissance'],
        'sexe' => $formData['sexe']
    ));
}

function getUserType($email) {
    $bdd = Database::connect();
    $req_type_utilisateur = $bdd->prepare('SELECT type_utilisateur FROM candidats WHERE email = :email');
    $req_type_utilisateur->execute(array('email' => $email));
    $resultat_req_type_utilisateur = $req_type_utilisateur->fetch(PDO::FETCH_ASSOC);
    return $resultat_req_type_utilisateur['type_utilisateur'];
}
?>
