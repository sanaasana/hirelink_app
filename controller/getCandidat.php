<?php
// Démarrer la session
session_start();
include '../racine/config.php'; // Inclure le fichier de configuration
// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['id_utilisateur'])) {
    // Rediriger l'utilisateur vers la page de connexion s'il n'est pas connecté
    header("Location: ../frontend/connexion.html"); // Remplacez "login.php" par l'URL de votre page de connexion
    //echo "La session n'est pas connectée";
    exit(); // Arrêter l'exécution du script
}

// Supposons que vous ayez récupéré l'ID de l'utilisateur connecté depuis la session
$id_utilisateur = $_SESSION['id_utilisateur']; // Assurez-vous de stocker l'ID de l'utilisateur dans la session lors de la connexion

// Connexion à la base de données
$conn = Database::connect();

// Requête pour récupérer les informations du candidat à partir de la base de données
$sql = "SELECT * FROM candidats WHERE id_candidat = :id_candidat";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id_candidat', $id_utilisateur);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    // Afficher les informations du candidat
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Vous pouvez accéder aux informations du candidat ici
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $ville = $row['ville'];
        $email = $row['email'];
        $date_naissance = $row['date_naissance'];
        $sexe = $row['sexe'];
        // Et ainsi de suite pour les autres champs de la table
    }
} else {
    echo "Aucune information trouvée pour cet utilisateur.";
}

// Fermer la connexion
$conn = null;
?>
