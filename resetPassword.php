<?php

require_once "./funzioneConnessione.php";

include_once("./funzioniEsterne.php");



if(isset($_POST['submitResetPassword'])){
    if($_POST['new-password']===$_POST['confirm-password']){
        $passwordControlla=$_POST['new-password'];
        $risultatoPassword = validaPasswordSecond($passwordControlla);
        if($risultatoPassword=="ok"){
        $emailControllo=$_GET['token'];
        updatePasswordByEmail($emailControllo,$passwordControlla);
          // Effettua il redirect in modo sicuro
          header("Location: ./index.php"."?resetPassword=ok");
    
          // Interrompe l'esecuzione dello script
          exit();


        }else{
            $queryString = $_SERVER['QUERY_STRING'];
        $error="si";
    
        // Reindirizza alla stessa pagina mantenendo i parametri GET
        header("Location: " . $_SERVER['PHP_SELF'] . "?" . $queryString . "&error=" . $error);
        // Termina l'esecuzione dello script per evitare ulteriori output
        exit();
        }
    }else{
        $queryString = $_SERVER['QUERY_STRING'];
        $error="si";
    
        // Reindirizza alla stessa pagina mantenendo i parametri GET
        header("Location: " . $_SERVER['PHP_SELF'] . "?" . $queryString . "&error=" . $error);
        // Termina l'esecuzione dello script per evitare ulteriori output
        exit();
    }
}


if(isset($_GET['token'])){


    if(isset($_GET['error'])){
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            showAlertPassword();
        });
    </script>";
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnapsClean - Reimposta Password</title>
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
                    <li><a href="../templateDiAccesso/registrazione.php">Registrati</a></li>
                </ul>
            </div>
        </nav>
        <!-- Fine Navigazione -->
    </header>
    <!-- Fine Header -->

    <!-- Alert Box (Initially Hidden) Password Non Coincidente --> 
    <div id="password-alert" class="uk-alert-danger uk-hidden" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p class="uk-text-danger">Le password inserite non corrispondono o non soddisfano i requisiti di sicurezza (7 caratteri, 1 munero e 1 carattere speciale).<br> Assicurati che entrambe le password siano identiche e riprova.</p>
    </div>

    <!--SCRIPT ALERT password non coincidente-->
    <script>
        // Function to show the alert
        function showAlertPassword() {
            var alertBox = document.getElementById('password-alert');
            alertBox.classList.remove('uk-hidden');
        }
    </script>
    <!--FINE SCRIPT ALERT password non coincidente-->

    <!-- Form di Reimpostazione Password -->
    <div class="uk-section uk-flex uk-flex-center uk-flex-middle" uk-height-viewport="expand: true">
        <div class="uk-card uk-card-default uk-card-body uk-width-1-3@m uk-padding">
            <h3 class="uk-card-title uk-text-center">Reimposta Password</h3>
            <p class="uk-text-center">Inserisci la tua nuova password e confermala per completare il processo di reimpostazione.</p>
            <form method="post">
                <div class="uk-margin">
                    <label for="new-password">Nuova Password</label>
                    <input class="uk-input" type="password" name="new-password" id="new-password" required>
                </div>
                <div class="uk-margin">
                    <label for="confirm-password">Conferma Password</label>
                    <input class="uk-input" type="password" name="confirm-password" id="confirm-password" required>
                </div>
                <div class="uk-margin">
                    <button class="uk-button uk-button-primary uk-width-1-1" name="submitResetPassword" type="submit">Reimposta Password</button>
                </div>
            </form>
            <p class="uk-text-center uk-text-small">Ricordi la tua password? <a href="../templateDiAccesso/login.php">Torna al Login</a></p>
        </div>
    </div>
    <!-- Fine Form di Reimpostazione Password -->

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
    <?php
}
else{
        // Effettua il redirect in modo sicuro
        header("Location: ./index.php");
    
        // Interrompe l'esecuzione dello script
        exit();
    
}