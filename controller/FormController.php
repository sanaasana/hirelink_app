<?php
require_once '../model/FormModel.php'; // Inclusion du modèle

class FormController {
    public function traiterFormulaire() {
        $formModel=new FormModel();
        // Récupérer les données du formulaire
        $id_ct=$formModel->dernierIdContact();
        $email = $_POST['email'];
        $adresse = $_POST['Adresse'];
        $tele = $_POST['Num_téléphone'];
        $id_cv=1;

       // Récupérer les données du formulaire de formation
       $id_f = $formModel->dernierIdFormation();
       $nom = $_POST['nom'];
       $diplome = $_POST['diplomeObtenu'];        
       $dateDebut = $_POST['DateDebut'];
       $dateFin = $_POST['DateFin'];
       $etablissement = $_POST['Etablissement'];
       $pays = $_POST['pays'];
       $ville = $_POST['ville'];
       $id_cv=1;

       // Récupérer les données du formulaire de profil
       $id_f = $formModel->dernierIdProfil();
       $nom = $_POST['profil'];
       $id_cv=1;

       // Récupérer les données du formulaire de experience
       $id_exp = $formModel->dernierIdExp();
       $nom = $_POST['titre_poste'];        
       $dateDebut = $_POST['DateDebut'];
       $dateFin = $_POST['DateFin'];
       $etablissement = $_POST['description'];        
       $nom_entreprise = $_POST['Nom_Entreprise'];
       $id_cv=1;

       // Récupérer les données du formulaire de competence
       $id_comp = $formModel->dernierIdCompetences();
       $Competence = $_POST['Competence'];        
       $niveau = $_POST['niveau'];
       $id_cv=1;

       // Récupérer les données du formulaire de langues
       $id_langue = $formModel->dernierIdLangues();
       $nom = $_POST['Langue'];        
       $niveau = $_POST['niveau'];
       $id_cv=1;


       // Appeler la méthode du modèle pour enregistrer les données
       $resultContact = $formModel->enregistrerContact($id_ct, $email, $adresse, $tele,$id_cv);
       // Enregistrer les données de formations
       $resultFormation = $formModel->enregistrerFormation($id_f, $nom, $diplome, $dateDebut, $dateFin, $etablissement, $pays, $ville, $id_cv);
       // Appeler pour enregistrer le profil
       $resultProfil = $formModel->enregistrerProfil($id_P, $descrption, $id_cv);
       // Appeler pour enregistrer les Exp
       $resultExp = $formModel->enregistrerExp($id_exp, $nom, $dateDebut, $dateFin, $descrip, $nom_entreprise, $id_cv);        
       // Appeler pour enregistrer les competences
       $resultComp = $formModel->enregistrerCompetences($id_comp, $Competence, $niveau, $id_cv);
       // Appeler pour enregistrer les langues
       $resultLg = $formModel->enregistrerLangues($id_langue, $nom, $niveau, $id_cv);
       

       // Redirection ou affichage d'une vue de confirmation en fonction du résultat
       if ($resultContact && $resultFormation && $resultProfil && $resultExp && $resultComp && $resultLg) {
           header("Location: ../frontend/offres.php"); // Rediriger vers une page de confirmation
           exit();
       } else {
           echo "Une erreur s'est produite lors de l'enregistrement des données.";
           // Afficher une vue d'erreur ou rediriger vers une autre page
       }

    }
}

// Traiter le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new FormController();
    $controller->traiterFormulaire();
}

?>