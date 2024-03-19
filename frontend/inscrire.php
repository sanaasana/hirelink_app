
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="S'inscrire.css">
  <link rel="icon" href="imglogo.jpeg" type="image/x-icon">
  <title>S'inscrire</title>
</head>

<body>

  <div class="container">
    <h4>&nbsp;&nbsp;Condidat</h4>
    <div class="signupCandidat-signupRecruteur">
      <form action="" class="sign-up-candidat-form" onsubmit="return validatePasswords()">

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" placeholder="Nom de famille">

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" placeholder="Prénom">

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" placeholder="xyz@exemple.com">

        <label for="motdepasse">Mot de passe :</label>
        <input type="password" id="motdepasse" name="mdp">

        <label for="motdepasseconf">Confirmation du mot de passe :</label>
        <input type="password" id="motdepasseconf" name="mdp_conf">

        <label for="tele">N° Téléphone :</label>
        <input type="tel" id="tele" name="tele">

        <label for="pays">Pays :</label>
        <input type="text" id="pays" name="pays">

        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville">

        <div class="form-outline mb-4">
          <label for="form-label date-input" style="color: rgb(30, 1, 84);"><strong>Date de naissance:</strong></label>
          <div class="input-group date" id="datepicker">
            <input type="date" class="form-control form-control-lg" id="date-input" name="date_naissance" pattern="\d{4}-\d{2}-\d{2}">
          </div>
        </div>

        <div class="radio-group">
          <div class="col">
            <label for="sexe1">sexe:
              <input type="radio" id="sexe1" name="sexe" value="M">
              Homme
            </label>

            <label for="sexe2">
              <input type="radio" id="sexe2" name="sexe" value="F">
              Femme
            </label><br>
            <label for="image">Sélectionnez une image</label>
            <input type="file" id="image" name="image" accept="image/*">
          </div>
        </div>

        <p> <a href="../frontend/profileCandidat.php" class="signin-link">S'inscrir</a></p><br>

        <p>Déjà inscrit(e)? <a href="../frontend/connexion.html" class="signin-link">S'identifier</a></p>
      </form>


      <form action="" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" placeholder="Nom de famille">

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" placeholder="Prénom">

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" placeholder="xyz@exemple.com">

        <label for="motdepasse">Mot de passe :</label>
        <input type="password" id="motdepasse" name="mdp">

        <label for="motdepasseconf">Confirmation du mot de passe :</label>
        <input type="password" id="motdepasseconf" name="mdp_conf">

        <label for="tele">N° Téléphone :</label>
        <input type="tel" id="tele" name="tele">

        <label for="pays">Pays :</label>
        <input type="text" id="pays" name="pays">

        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville">
        <div>
          <label for="nom_entreprise"><strong> Nom de l'entreprise :</strong></label>
          <input type="tel" id="nom_entreprise" name="nom_entreprise" />
        </div>


        <div class="radio-group">
          <div class="col">
            <label for="sexe1">sexe:
              <input type="radio" id="sexe1" name="sexe" value="M">
              Homme
            </label>

            <label for="sexe2">
              <input type="radio" id="sexe2" name="sexe" value="F">
              Femme
            </label>
          </div>
        </div>
        </label><br>
            <label for="image">Sélectionnez une image</label>
            <input type="file" id="image" name="image" accept="image/*">

        <p> <a href="../frontend/profileRecruteur.html" class="signin-link">S'inscrir</a></p><br>

        <p>Déjà inscrit(e)? <a href="../frontend/connexion.html" class="signin-link">S'identifier</a></p>
      </form>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Êtes-vous un candidat?</h3>
          <p>En tant que candidat, vous avez la possibilité de présenter vos compétences, vos expériences et votre
            potentiel à des employeurs potentiels.</p>
          <button class="btn btn-s" id="sign-up-candidat-btn">Candidat</button>
        </div>
        <img src="images1/undraw_join_re_w1lh.svg" alt="" class="image">
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Êtes-vous un recruteur?</h3>
          <p>En tant que recruteur, vous aurez la responsabilité de rechercher les candidats les plus qualifiés pour les
            postes vacants au sein de votre organisation.</p>
          <button class="btn btn-s" id="sign-up-recruteur-btn">Recruteur</button>
        </div>
        <img src="images1/undraw_sign_up_n6im.svg" alt="" class="image">
      </div>
    </div>
  </div>

  <script>
    const sign_up_candidat_btn = document.querySelector("#sign-up-candidat-btn");
    const sign_up_recruteur_btn = document.querySelector("#sign-up-recruteur-btn");
    const container = document.querySelector(".container");
    const sign_up_candidat_btn2 = document.querySelector("#sign-up-candidat-btn2");
    const sign_up_recruteur_btn2 = document.querySelector("#sign-up-recruteur-btn2");
    sign_up_recruteur_btn.addEventListener("click", () => {
      container.classList.add("sign-up-mode");
    });
    sign_up_candidat_btn.addEventListener("click", () => {
      container.classList.remove("sign-up-mode");
    });
    sign_up_recruteur_btn2.addEventListener("click", () => {
      container.classList.add("sign-up-mode2");
    });
    sign_up_candidat_btn2.addEventListener("click", () => {
      container.classList.remove("sign-up-mode2");
    });



    function validatePasswords() {
      var password = document.querySelector('.sign-up-candidat-form input[name="password"]');
      var confirmPassword = document.querySelector('.sign-up-candidat-form input[name="confirm_password"]');
      var password = document.querySelector('.sign-up-recruteur-form input[name="password"]');
      var confirmPassword = document.querySelector('.sign-up-recruteur-form input[name="confirm_password"]');


      if (password.value !== confirmPassword.value) {
        confirmPassword.classList.add('error'); // Ajoute la classe 'error' au champ de confirmation de mot de passe
        //alert("Les mots de passe ne correspondent pas !");
        return false;
      } else {
        confirmPassword.classList.remove('error'); // Supprime la classe 'error' du champ de confirmation de mot de passe
      }

      return true;
    }
  </script>

</body>

</html>