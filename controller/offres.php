<?php
// Inclure le fichier de configuration
include '../racine/config.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $id_offre = 24;
    $id_rec = 12;
    $nom_entreprise = $_POST['entreprise'];
    $lieu = $_POST['Lieu'];
    $titrePoste = $_POST['poste'];
    $description = $_POST['descrip'];
    $responsabilites = $_POST['Responsabilites'];
    $exigences = $_POST['Exigences'];

    // Insérer les données dans la base de données
    $stmt = $pdo->prepare("INSERT INTO offres_emploi (id_offre, id_recruteur, nom_entreprise, lieu, titre_poste, descriptionn, Responsabilites, exigences) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$id_offre, $id_rec, $nom_entreprise, $lieu, $titrePoste, $description, $responsabilites, $exigences]);

    // Rediriger l'utilisateur vers une page de confirmation
    header("Location: ../frontend/profileRecruteur.html");
    exit();
}
?>
