<?php
// Inclure le fichier de récupération des informations du candidat
include 'getCandidat.php';

// Charger les informations du candidat
$candidat_info = getCandidatInfo(); // Supposons que getCandidatInfo() est une fonction définie dans get_candidat_info.php

// Charger la vue
include '../frontend/profileCandidat.php'; // Assurez-vous de mettre le chemin correct vers votre vue HTML
?>
