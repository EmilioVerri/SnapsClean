<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnapsClean</title>
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</head>

<body class="uk-background-muted uk-padding-remove">

    <!-- Header con Slider e Navigazione -->
    <header class="uk-background-default uk-box-shadow-small uk-padding-remove">

        <!-- Navigazione -->
        <nav class="uk-navbar-container uk-navbar-transparent uk-padding-small" uk-navbar>
            <div class="uk-navbar-left">
                <!-- Logo -->
                <a class="uk-navbar-item uk-logo" href="./index.php">
                    <img src="./images/SnapsCleanIcon.png" alt="Logo" style="height: 40px; width: auto; border-radius: 50%;">
                </a>
                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="./index.php">Home</a></li>
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

        <!-- Slider -->
        <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="animation: fade; autoplay: true; autoplay-interval: 3000;">

            <ul class="uk-slideshow-items" style="max-height: 400px;">
                <li>
                    <div class="uk-position-center uk-transform-center">
                        <img src="./images/SnapsClean.png" alt="SnapsClean Image 1" style="max-width: 100%; height: auto;">
                    </div>
                </li>
                <li>
                    <div class="uk-position-center uk-transform-center">
                        <img src="./images/SnapsClean.png" alt="SnapsClean Image 2" style="max-width: 100%; height: auto;">
                    </div>
                </li>
                <li>
                    <div class="uk-position-center uk-transform-center">
                        <img src="./images/SnapsClean.png" alt="SnapsClean Image 3" style="max-width: 100%; height: auto;">
                    </div>
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

        </div>
        <!-- Fine Slider -->

    </header>
    <!-- Fine Header -->


    <hr class="uk-divider-icon">


    <div class="uk-child-width-1-2@m" uk-grid>
        <div>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top uk-flex uk-flex-center uk-flex-middle">
                    <img src="./images/SnapsClean.png" alt="Media Top" style="max-width: 100%; height: 300px;">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Perchè scegliere SnapsClean?</h3>
                    <p>SnapsClean offre un modo divertente e coinvolgente per mantenere l'ambiente pulito, con la possibilità di vincere premi. Con un'ampia varietà di materiali da pulire e la chance di partecipare a una lotteria, ogni contributo viene riconosciuto e premiato. Unisciti a noi per rendere la pulizia un'attività gratificante e comunitaria!</p>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default">
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Diventa "CleanShot Champion"</h3>
                    <p>Per diventare CleanShot Champion, carica ogni giorno una foto di un materiale che stai pulendo, scelto dall'elenco nella sezione dedicata. Ogni foto ti farà guadagnare punti, e alla fine del mese, chi ne avrà accumulati di più vincerà un premio in denaro. Inoltre, anche se non vinci, parteciperai alla lotteria finale con tanti biglietti quanti sono i tuoi punti.</p>
                </div>
                <div class="uk-card-media-bottom uk-flex uk-flex-center uk-flex-middle">
                    <img src="./images/SnapsClean.png" alt="Media Bottom" style="max-width: 100%; height: 300px">
                </div>
            </div>
        </div>
    </div>

    <hr class="uk-divider-icon">

    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title">Trova lo sporco</h3>
                <p>Metti alla prova la tua abilità con SnapsClean! Cerca attentamente nel tuo ambiente per trovare i segni di sporco nascosti.</p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-primary uk-card-body">
                <h3 class="uk-card-title">Raccoglilo</h3>
                <p>Scopri la tua abilità con SnapsClean! Trova e raccogli i materiali da pulire indicati, poi scatta una foto del tuo lavoro.</p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-secondary uk-card-body">
                <h3 class="uk-card-title">Scatta una foto</h3>
                <p>Con SnapsClean, ogni scatto conta! Scatta una foto chiara e ben definita del materiale che stai pulendo o del disordine che hai trovato.</p>
            </div>
        </div>
    </div>
    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
        <div>
            <div class="uk-card uk-card-secondary uk-card-body">
                <h3 class="uk-card-title">Caricala la foto sul sito</h3>
                <p>Carica la tua foto sul sito per partecipare a SnapsClean! Assicurati che l'immagine sia ben visibile e rappresentativa del tuo lavoro. Ogni foto caricata ti avvicina a guadagnare punti e a vincere fantastici premi!</p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-primary uk-card-body">
                <h3 class="uk-card-title">Vinci punti</h3>
                <p>Con SnapsClean, ogni giorno è un'opportunità per vincere punti! Carica una foto al giorno e ricevi il tuo punteggio entro 24 ore, dopo la valutazione da parte dell'admin. Accumula punti con ogni foto e avvicinati ai premi in palio!</p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title">Diventa "CleanShot Champion"</h3>
                <p>Diventa 'CleanShot Champion' con SnapsClean! Carica una foto ogni giorno e accumula punti per il tuo impegno nella pulizia. Alla fine del mese, il partecipante con il punteggio più alto sarà premiato, mentre tutti i partecipanti avranno la possibilità di vincere nella lotteria finale!</p>
            </div>
        </div>
    </div>

    <hr class="uk-divider-icon">

    <div class="uk-child-width-1-2@s" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-large uk-card-body">
            <h3 class="uk-card-title">Un solo scatto?</h3>
            <p>
            Attualmente, SnapsClean consente agli utenti di caricare una sola fotografia al giorno. Questa limitazione aiuta a garantire una valutazione accurata e equa da parte degli amministratori. Ricorda di scegliere attentamente il tuo scatto migliore per massimizzare le possibilità di guadagnare punti!</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-large uk-card-body">
            <h3 class="uk-card-title">Miglioramenti futuri</h3>
            <p>In futuro, con l'aumento degli utenti, SnapsClean offrirà la possibilità di caricare più foto al giorno, ampliando le opportunità di partecipazione. Questo permetterà agli utenti di condividere più contributi e di accumulare punti più rapidamente. Inoltre, l'incremento delle partecipazioni porterà anche a un aumento dei premi da vincere, rendendo l'esperienza ancora più entusiasmante e gratificante.</p>
        </div>
    </div>
</div>

<hr class="uk-divider-icon">
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
            <p>&copy; 2024 SnapsClean. All rights reserved.</p>
            <div class="uk-margin-top">
                <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
            </div>
        </div>
    </footer>
    <!-- Fine Footer -->

</body>

</html>
