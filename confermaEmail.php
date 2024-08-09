<?php

require_once "./funzioneConnessione.php";

if(isset($_GET['token'])){
    $token=$_GET['token'];
    $queryConferma="UPDATE utenti SET emailVerificata='si' WHERE verificaEmail='{$token}'";
    $tokenDaEstrarre=queryDBUpdate($queryConferma);


// Verifica se il token esiste
if (!empty($tokenDaEstrarre)) {
   ?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferma Account - SnapsClean</title>
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</head>

<body class="uk-background-muted uk-padding-remove">

    <!-- Header con Navigazione -->
    <header class="uk-background-default uk-box-shadow-small uk-padding-remove">

        <!-- Navigazione -->
        <nav class="uk-navbar-container uk-navbar-transparent uk-padding-small" uk-navbar>
            <div class="uk-navbar-left">
                <!-- Logo -->
                <a class="uk-navbar-item uk-logo" href="./index.php">
                    <img src="./images/SnapsCleanIcon.png" alt="Logo" style="height: 40px; width: auto; border-radius: 50%;">
                </a>
                <ul class="uk-navbar-nav">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./templatePages/regolamento.php">Regolamento</a></li>
                </ul>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li><a href="./templateDiAccesso/login.php">Login</a></li>
                    <li><a href="./templateDiAccesso/registrazione.php">Registrati</a></li>
                </ul>
            </div>
        </nav>
        <!-- Fine Navigazione -->

    </header>
    <!-- Fine Header -->

    <!-- Sezione di Conferma -->
    <div class="uk-section uk-flex uk-flex-center uk-flex-middle" style="background-color: #32d296; height: calc(100vh - 80px);">
        <div class="uk-text-center">
            <h2 class="uk-text-bold uk-text-white">Grazie per aver confermato il tuo account!</h2>
            <p class="uk-text-large uk-text-white">Ora puoi procedere a effettuare il login per accedere al tuo profilo.</p>
            <a href="./templateDiAccesso/login.php" class="uk-button uk-button-default uk-button-large">Vai alla pagina di login</a>
        </div>
    </div>
    <!-- Fine Sezione di Conferma -->

    <!-- Footer -->
    <footer class="uk-background-secondary uk-light uk-padding uk-text-center">
        <div class="uk-container">
            <!-- Logo -->
            <div class="uk-flex uk-flex-center uk-margin-bottom">
                <a class="uk-navbar-item uk-logo" href="./index.php">
                    <img src="./images/SnapsCleanIcon.png" alt="Logo" style="height: 60px; width: auto; border-radius: 50%;">
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
                    <img src="./images/SnapsCleanIcon.png" alt="Contattaci" style="max-width: 150px; height: auto;">
                </a>
                <p>Contattaci</p>
            </div>
            <p>&copy; 2024 SnapsClean. Tutti i diritti riservati.</p>
            <div class="uk-margin-top">
                <a href="#">Privacy Policy</a> | <a href="#">Termini di Servizio</a>
            </div>
        </div>
    </footer>
    <!-- Fine Footer -->

</body>

</html>
<?php
} else {
   ?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Errore Conferma Account - SnapsClean</title>
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</head>

<body class="uk-background-muted uk-padding-remove">

    <!-- Header con Navigazione -->
    <header class="uk-background-default uk-box-shadow-small uk-padding-remove">

        <!-- Navigazione -->
        <nav class="uk-navbar-container uk-navbar-transparent uk-padding-small" uk-navbar>
            <div class="uk-navbar-left">
                <!-- Logo -->
                <a class="uk-navbar-item uk-logo" href="./index.php">
                    <img src="./images/SnapsCleanIcon.png" alt="Logo" style="height: 40px; width: auto; border-radius: 50%;">
                </a>
                <ul class="uk-navbar-nav">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./templatePages/regolamento.php">Regolamento</a></li>
                </ul>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li><a href="./templateDiAccesso/login.php">Login</a></li>
                    <li><a href="./templateDiAccesso/registrazione.php">Registrati</a></li>
                </ul>
            </div>
        </nav>
        <!-- Fine Navigazione -->

    </header>
    <!-- Fine Header -->

    <!-- Sezione di Errore -->
    <div class="uk-section uk-flex uk-flex-center uk-flex-middle" style="background-color: #f0506e; height: calc(100vh - 80px);">
        <div class="uk-text-center">
            <h2 class="uk-text-bold uk-text-white">Errore nella conferma dell'account</h2>
            <p class="uk-text-large uk-text-white">Il token che hai fornito è già stato utilizzato o non è valido. Contatta il supporto per assistenza.</p>
            <a href="./index.php" class="uk-button uk-button-default uk-button-large">Torna alla Home</a>
        </div>
    </div>
    <!-- Fine Sezione di Errore -->

    <!-- Footer -->
    <footer class="uk-background-secondary uk-light uk-padding uk-text-center">
        <div class="uk-container">
            <!-- Logo -->
            <div class="uk-flex uk-flex-center uk-margin-bottom">
                <a class="uk-navbar-item uk-logo" href="./index.php">
                    <img src="./images/SnapsCleanIcon.png" alt="Logo" style="height: 60px; width: auto; border-radius: 50%;">
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
                    <img src="./images/SnapsCleanIcon.png" alt="Contattaci" style="max-width: 150px; height: auto;">
                </a>
                <p>Contattaci</p>
            </div>
            <p>&copy; 2024 SnapsClean. Tutti i diritti riservati.</p>
            <div class="uk-margin-top">
                <a href="#">Privacy Policy</a> | <a href="#">Termini di Servizio</a>
            </div>
        </div>
    </footer>
    <!-- Fine Footer -->

</body>

</html>



<?php
}




}else{

    // Effettua il redirect in modo sicuro
    header("Location: ./index.php");
    
    // Interrompe l'esecuzione dello script
    exit();


}
?>







