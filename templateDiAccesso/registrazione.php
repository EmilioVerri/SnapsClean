<?php


include("../classi/registerCL.php");
require_once "../funzioni/funzioneControlloLogin.php";

if(isset($_POST['registrati'])){
    $emailVerificata="no";
    $livello="utente";
    $data_oggi = date('d/m/Y');

    $generazione=generateRandomString();
    $registrati= new Registrazione($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['password'],$generazione,$emailVerificata,$livello,$data_oggi);
    $registrati->registrati();
}



 //$storico = new Storico($_POST['data'], $_POST['esito'], $_POST['note'], $_POST['identificativoPerStorico']);
                //$storico->aggiungiStorico();

?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnapsClean - Registrazione</title>
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
                    <li><a href="../templateDiAccesso/login.php">Login</a></li>
                    <li class="uk-active"><a href="../templateDiAccesso/registrazione.php">Registrati</a></li>
                </ul>
            </div>
        </nav>
        <!-- Fine Navigazione -->
    </header>
    <!-- Fine Header -->

        <!-- Alert Box (Initially Hidden) PASSWORD --> 
        <div id="password-alert" class="uk-alert-danger uk-hidden" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>La password deve contenere almeno 7 caratteri, un numero e un carattere speciale.</p>
    </div>

    <!--SCRIPT ALERT PASSOWRD-->
    <script>
        // Function to show the alert
        function showAlert() {
            var alertBox = document.getElementById('password-alert');
            alertBox.classList.remove('uk-hidden');
        }
    </script>
    <!--FINE SCRIPT ALERT PASSWORD-->



           <!-- Alert Box (Initially Hidden) EMAIL --> 
           <div id="emaild-alert" class="uk-alert-danger uk-hidden" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>Email già presente! Riprova</p>
    </div>

    <!--SCRIPT ALERT EMAIL-->
    <script>
        // Function to show the alert
        function showAlertEmail() {
            var alertBox = document.getElementById('emaild-alert');
            alertBox.classList.remove('uk-hidden');
        }
    </script>
    <!--FINE SCRIPT ALERT EMAIL-->





    
           <!-- Alert Box (Initially Hidden) controlla EMAIL --> 
           <div id="emailControllo-alert" class="uk-alert-primary uk-hidden" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>Per completare la registrazione, per favore conferma il tuo indirizzo email cliccando sul link che ti abbiamo inviato.

Se non trovi l'email nella tua casella di posta, ricordati di controllare anche nella cartella spam.

Una volta confermata, potrai accedere al sito.</p>
    </div>

    <!--SCRIPT ALERT EMAIL-->
    <script>
        // Function to show the alert
        function showAlertEmailemailControllo() {
            var alertBox = document.getElementById('emailControllo-alert');
            alertBox.classList.remove('uk-hidden');
        }
    </script>
    <!--FINE SCRIPT ALERT EMAIL-->


    <hr class="uk-divider-icon">

    <!-- Form di Registrazione -->
    <div class="uk-section uk-flex uk-flex-center uk-flex-middle" uk-height-viewport="expand: true">
        <div class="uk-card uk-card-default uk-card-body uk-width-1-3@m uk-padding">
            <h3 class="uk-card-title uk-text-center">Registrazione</h3>
            <form method="post">
                <div class="uk-margin">
                    <label for="first-name">Nome</label>
                    <input class="uk-input" type="text" name="first_name" id="first-name" required>
                </div>
                <div class="uk-margin">
                    <label for="last-name">Cognome</label>
                    <input class="uk-input" type="text" name="last_name" id="last-name" required>
                </div>
                <div class="uk-margin">
                    <label for="email">Email</label>
                    <input class="uk-input" type="email" name="email" id="email" required>
                    <small>Nota: l'email inserita sarà utilizzata per l'invio dei premi in caso di vincita tramite PayPal.</small>
                </div>
                <div class="uk-margin">
                    <label for="password">Password</label>
                    <input class="uk-input" type="password" name="password" id="password" required>
                </div>
                <div class="uk-margin">
                    <button class="uk-button uk-button-primary uk-width-1-1" type="submit" name="registrati">Registrati</button>
                </div>
            </form>
            <p class="uk-text-center uk-text-small">Hai già un account? <a href="../templateDiAccesso/login.php">Accedi</a></p>
        </div>
    </div>
    <!-- Fine Form di Registrazione -->

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
