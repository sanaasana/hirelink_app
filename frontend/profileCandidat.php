
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width , initial-scale=1.0">
<!-- icons-->
<script src="https://unpkg.com/@phosphor-icons/web"></script>
<!-- STYLESHEET-->
<link rel="stylesheet" href="profileCandidat.css">
<title> HireLink-Candidat</title>
    </head>


   
    <div class="containerg">
        <div class="section1">
            <div class="sidebar active">
                <!--ajouter un bouton de glissement-->
                <div class="menu-btn">
                    <i class="ph-bold ph-caret-left"></i>

                </div>
                <div class="head" >
                <!-- image -->
                    <div class="user-img">
                        <img src="img1profil.jpg" alt="">
                    </div>
                <!-- les infos de candidat-->
                    <div class="user-details">
                        
                        <p class="name">
                            Sanaa SSADAOUI
                        </p>
                    </div>
                    
                </div>
                <!--navbar-->
                <div class="nav">
                    <div class="menu">
                        <p class="title">Main</p>
                            <ul>


                                <li class="active"> 
                                    <a href="#">
                                        <i  class="icon ph-bold ph-user"></i>
                                     <span class="text">PROFIL</span>
                                    </a>
                                </li>

                                  <li > 
                                    <a href="offres.php">
                                        <i  class="icon ph-bold ph-file-text"></i>
                                     <span class="text"> Offres</span>
                                    </a>
                                </li>


                                <li > 
                                    <a href="BoiteMessageC.html" >
                                        <i  class="icon ph-bold ph-chat-circle"></i>
                                     <span class="text"> Boite Message </span>

                                    </a>
                                </li>

                                <li > 
                                    <a href="Formulaire.html" target="_blank">
                                        <i  class="icon ph-bold ph-address-book"></i>
                                     <span class="text">Postuler</span>
                                    </a>
                                </li>

                            </ul>

                    

                    </div>

                    <div class="menu">
                        <p class="title">Settings</p>
                            <ul>


                                <li > 
                                    <a href="corrige.html" target="_blank">
                                        <i  class="icon ph-bold ph-house-simple"></i>
                                     <span class="text"><a href="../racine/corrigeTest.html">Home</a></span>
                                    </a>
                                </li> 
                            </ul>
                    </div>
                </div>
        <!-- pour accconts section -->        
                <div class="menu">
                    <p class="title">Account</p>
                        <ul>
                            <li > 
                                <a href="#">
                                    <i  class="icon ph-bold ph-info"></i>
                                 <span class="text">Help</span>
                                </a>
                            </li> 
                            <li > 
                                <a href="#">
                                    <i  class="icon ph-bold ph-sign-out"></i>
                                 <span class="text">Logout</span>
                                </a>
                            </li> 
                        </ul>
                </div>
            </div>
        </div>
       
     <!------------------------------------------------------------------- body-------------------------------------->   


     <div class="container2 container">
    <div class="profile">
        <h1 class="titre1">Informations Personnelles</h1>
        <div class="sous_infos">
            <h2> Full Name</h2>
            <p class="infos_per"><?php echo $nom . " " . $prenom; ?> <button class="btn">update</button></p>
            <h2>Naissance</h2>
            <p class="infos_per"><?php echo $date_naissance; ?></p>
            <h2>Gender</h2>
            <p class="infos_per"><?php echo $sexe; ?></p>
            <!-- Ajoutez d'autres informations du candidat ici -->
        </div>
    </div>
</div>   
            
            

    </div>   
    </body>
    </html>

<!--------------------------------------------------------------script---------------------------------------------------------->
<!--Jquery-->
<script
src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
crossorigin="anonymous"
></script>
        <script src="profileCandidat.js"></script>
        <!--  -->
    </body>

</html>