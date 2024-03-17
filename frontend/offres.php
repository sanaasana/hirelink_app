<!DOCTYPE html>
<html lang="en">
<head>
    <title > OFFRES</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Offres.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<!----------header------------->   
<!--navbar-->
<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand me-auto" href="#">  <h1 class="logo">HireLink</h1> </a> <!-- Adjusted spacing with me-auto -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="corrige.html">HOME</a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" href="offres.html">OFFRES</a>
                  </li>
    
                  <li class="nav-item">
                    <a class="nav-link" href="about.html"> ABOUT</a>
                  </li>
    
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html"> CONTACT</a>
                  </li>
    
                  <li class="nav-item">
                    <a class="nav-link" href="corrige.html"> FEEDBACK</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link " href="connexion.html" >CONNEXION</a>
                  </li>
            </ul>
        </div>
    </nav>
    </section>

 <!---------------------------------------------------banner section ---------------->

 <section id="banner">
    <div class="container">                  
    </div>    
 </section>
 
</section>
    <div class="search-job text-center">
        <input type="text" class="form-control" placeholder="Titre de poste ou mot-clé">
        <input type="text" class="form-control" placeholder="Entreprise">
        <input type="text" class="form-control" placeholder="Location">
        <input type="button" class="btn btn-primary" value="Rechercher">
    </div>
<!----meilleur recruteurs---->
<section id="recruteurs">
    <div class="container text-center">
        <h3>Meilleur Recruteurs</h3>
        <div>
            <a href="https://eca-assurances.com/"><img src="images/ca-7l4w248q0u8xv16rc6wp9x6ylqnhb524102022040535.jpg"></a>
            <a href="https://asa-techno.com/"><img src="images/ca-7jb7l496lchbl51p91egkindvpcviw21062022024516.jpg"></a>
            <a href="https://www.inetum.com/"><img src="images/ca-9kfinw356rt5d1ymf8458vnvuq7vay24012022042241.jpg"></a>
            <a href="https://x-hub.io/"><img src="images/ca-1lukdu6b0j4mj3bbegyfbuacwv7gaj06062022041544.jpg"></a>
            <a href="https://atos.net/"><img src="images/ca-0ne4r6e78l69bxxx574m0e22uxgpsq20092019121140.jpg"></a>
            <a href="https://weedoit.digital/"><img src="images/téléchargement.png"></a>
        </div>
    </div>
</section>
<!----------recent jobs---------->
<?php
// Include the config.php file to establish the database connection
include '../racine/config.php';
// Récupérer toutes les offres depuis la base de données
$pdo = Database::connect(); // Call the connect() method to get the PDO instance
$stmt = $pdo->query("SELECT * FROM offres_emploi");
$offres = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
 <!-- Section des offres -->
 <section id="offres">
        <div class="container">
            <h5>Offres récentes</h5> 
            <div class="offres-container">
                <?php foreach ($offres as $offre): ?>
                    <div class="offre" data-titre-poste="<?php echo $offre['titre_poste']; ?>" data-nom-entreprise="<?php echo $offre['nom_entreprise']; ?>" data-lieu="<?php echo $offre['lieu']; ?>">
                        <div class="left-section">
                            <h3 class="job-title"><b><?php echo $offre['titre_poste']; ?></b></h3>
                            <h4 class="company"><?php echo $offre['nom_entreprise']; ?></h4>
                            <p class="location"><i class="fas fa-map-marker-alt"></i> <?php echo $offre['lieu']; ?></p>
                            
                        </div>
                        <div class="right-section">
                            <p class="description"><?php echo $offre['descriptionn']; ?></p>
                            <div class="details hidden">
                                <h5>Responsabilités :</h5>
                                <ul>
                                    <p><?php echo $offre['Responsabilites']; ?></p>
                                </ul>
                                <h5>Exigences :</h5>
                                <ul>
                                    <p><?php echo $offre['exigences']; ?></p>
                                </ul>
                            </div>
                            <button class="show-details">PLUS</button>
                            <button class="apply-button"><a href="connexion.html">Postuler</a></button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fonction de recherche
        document.querySelector('.search-job input[type="button"]').addEventListener('click', function() {
            // Récupérer les valeurs saisies dans les champs d'entrée
            var titrePoste = document.querySelector('.search-job input:nth-of-type(1)').value.toLowerCase();
            var entreprise = document.querySelector('.search-job input:nth-of-type(2)').value.toLowerCase();
            var location = document.querySelector('.search-job input:nth-of-type(3)').value.toLowerCase();

            // Filtrer les offres en fonction des critères de recherche
            var offres = document.querySelectorAll('.offre');
            offres.forEach(function(offre) {
                var titrePosteOffre = offre.getAttribute('data-titre-poste').toLowerCase();
                var nomEntrepriseOffre = offre.getAttribute('data-nom-entreprise').toLowerCase();
                var lieuOffre = offre.getAttribute('data-lieu').toLowerCase();

                if (titrePosteOffre.includes(titrePoste) && nomEntrepriseOffre.includes(entreprise) && lieuOffre.includes(location)) {
                    offre.style.display = 'block';
                } else {
                    offre.style.display = 'none';
                }
            });
        });
    });
</script>

</body>
</html>
