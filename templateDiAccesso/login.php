<?php

include("../classi/registerCL.php");
require_once "../funzioni/funzioneControlloLogin.php";

if(isset($_POST['submitLogin'])){
   $checkEmail= controlloEmailVerificata($_POST['email']);
   if($checkEmail=="ok"){
    $loggati= new Registrazione("","",$_POST['email'],$_POST['password'],"","","","");
    $loggati->login();
   }else{
    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        showAlertUtente();
    });
</script>";
   }


}





?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnapsClean - Login</title>
    <link rel="stylesheet" href="../css/uikit.min.css" />
    <script src="../js/uikit.min.js"></script>
    <script src="../js/uikit-icons.min.js"></script>
</head>

<body class="uk-background-muted uk-padding-remove">

    <!-- Header con Slider e Navigazione -->
    <header class="uk-background-default uk-box-shadow-small uk-padding-remove">

        <!-- Navigazione -->
        <nav class="uk-navbar-container uk-navbar-transparent uk-padding-small" uk-navbar>
            <div class="uk-navbar-left">
                <!-- Logo -->
                <a class="uk-navbar-item uk-logo" href="../index.php">
                    <img src="../images/SnapsCleanIcon.png" alt="Logo" style="height: 40px; width: auto; border-radius: 50%;">
                </a>
                <ul class="uk-navbar-nav">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../templatePages/regolamento.php">Regolamento</a></li>
                </ul>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="../templateDiAccesso/login.php">Login</a></li>
                    <li><a href="../templateDiAccesso/registrazione.php">Registrati</a></li>
                </ul>
            </div>
        </nav>
        <!-- Fine Navigazione -->
    </header>
    <!-- Fine Header -->




      <!-- Alert Box (Initially Hidden) Password non corretta --> 
      <div id="password-alert" class="uk-alert-danger uk-hidden" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p class="uk-text-danger">La password che hai inserito è errata. Per favore, riprova e assicurati di inserire la password corretta. Se hai dimenticato la password, puoi utilizzare la funzione di recupero password.</p>
    </div>

    <!--SCRIPT ALERT password non corretta-->
    <script>
        // Function to show the alert
        function showAlert() {
            var alertBox = document.getElementById('password-alert');
            alertBox.classList.remove('uk-hidden');
        }
    </script>
    <!--FINE SCRIPT ALERT password non corretta-->



  <!-- Alert Box (Initially Hidden) Utente non trovato --> 
  <div id="utente-alert" class="uk-alert-danger uk-hidden" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p class="uk-text-danger">Non è stato trovato alcun account associato a questa email. Verifica di aver inserito correttamente l'indirizzo email oppure se hai completato la conferma del tuo account. Se non hai ancora un account, registrati per crearne uno.</p>

    </div>

    <!--SCRIPT ALERT utente non trovato-->
    <script>
        // Function to show the alert
        function showAlertUtente() {
            var alertBox = document.getElementById('utente-alert');
            alertBox.classList.remove('uk-hidden');
        }
    </script>
    <!--FINE SCRIPT ALERT utente non trovato-->







    <hr class="uk-divider-icon">

    <!-- Form di Login -->
    <div class="uk-section uk-flex uk-flex-center uk-flex-middle" uk-height-viewport="expand: true">
        <div class="uk-card uk-card-default uk-card-body uk-width-1-3@m uk-padding">
            <h3 class="uk-card-title uk-text-center">Login</h3>
            <form method="post">
                <div class="uk-margin">
                    <label for="email">Email</label>
                    <input class="uk-input" type="email" name="email" id="email" required>
                </div>
                <div class="uk-margin">
                    <label for="password">Password</label>
                    <input class="uk-input" type="password" name="password" id="password" required>
                </div>
                <div class="uk-margin">
                    <button class="uk-button uk-button-primary uk-width-1-1" name="submitLogin" type="submit">Accedi</button>
                </div>
            </form>
            <p class="uk-text-center uk-text-small">Non hai un account? <a href="../templateDiAccesso/registrazione.php">Registrati</a></p>
            <p class="uk-text-center uk-text-small">Hai dimenticato la password? <a href="../templateDiAccesso/passwordDimenticata.php">Password Dimenticata</a></p>
        </div>
    </div>
    <!-- Fine Form di Login -->

    <hr class="uk-divider-icon">

    <!-- Footer -->
    <footer class="uk-background-secondary uk-light uk-padding uk-text-center">
        <div class="uk-container">
            <!-- Logo -->
            <div class="uk-flex uk-flex-center uk-margin-bottom">
                <a class="uk-navbar-item uk-logo" href="../index.php">
                    <img src="../images/SnapsCleanIcon.png" alt="Logo" style="height: 60px; width: auto; border-radius: 50%;">
                </a>
            </div>
            <!-- Social Media -->
            <div class="uk-margin-bottom">
                <a href="#" class="uk-icon-button" uk-icon="facebook"></a>
                <a href="#" class="uk-icon-button" uk-icon="twitter"></a>
                <a href="#" class="uk-icon-button" uk-icon="instagram"></a>
                <a href="#" class="uk-icon-button" uk-icon="linkedin"></a>
            </div>
            <!-- Contattaci -->
            <div class="uk-margin-bottom">
                <a href="#">
                    <img src="../images/SnapsCleanIcon.png" alt="Contattaci" style="max-width: 150px; height: auto;">
                </a>
                <p>Contattaci</p>
            </div>
            <p>&copy; 2024 SnapsClean. All rights reserved.</p>
            <div class="uk-margin-top">
                <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
            </div>
        </div>
    </footer>
    <!-- Fine Footer -->

</body>

</html>
