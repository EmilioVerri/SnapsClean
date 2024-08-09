<?php


include("../funzioneConnessione.php");


function validaPassword($password) {
    // Verifica che la password abbia almeno 7 caratteri
    if (strlen($password) < 7) {
        return "La password deve avere almeno 7 caratteri.";
    }
    
    // Verifica che la password contenga almeno un numero
    if (!preg_match('/\d/', $password)) {
        return "La password deve contenere almeno un numero.";
    }
    
    // Verifica che la password contenga almeno un carattere speciale
    if (!preg_match('/[\W_]/', $password)) {
        return "La password deve contenere almeno un carattere speciale.";
    }
    
    // Se tutte le verifiche passano, la password è valida
    $info="ok";
    return $info;
}




function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    
    // Use random_bytes to generate a secure random number
    $bytes = random_bytes($length);
    
    for ($i = 0; $i < $length; $i++) {
        // Use ord to get the ASCII value of each byte, mod with characters length to get a valid index
        $index = ord($bytes[$i]) % $charactersLength;
        $randomString .= $characters[$index];
    }
    
    return $randomString;
}




function controlloEmail($email) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "snapsclean";

    // Connessione al database
    $connection = mysqli_connect($server, $username, $password, $database);
    
    // Controllo della connessione
    if (!$connection) {
        die("Connessione al database fallita: " . mysqli_connect_error());
    }

    // Prepara la query SQL
    $query = "SELECT * FROM utenti WHERE email = ?";
    $stmt = $connection->prepare($query);
    
    // Controllo della preparazione della query
    if (!$stmt) {
        die("Preparazione della query fallita: " . $connection->error);
    }

    // Associa il parametro e esegui la query
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Controlla se la query ha restituito righe
    if ($result->num_rows > 0) {
        $info = "notOK";
    } else {
        $info = "ok";
    }

    // Chiudi lo statement e la connessione
    $stmt->close();
    $connection->close();

    return $info;
}




function controlloEmailVerificata($email) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "snapsclean";

    // Connessione al database
    $connection = mysqli_connect($server, $username, $password, $database);
    
    // Controllo della connessione
    if (!$connection) {
        die("Connessione al database fallita: " . mysqli_connect_error());
    }

    // Prepara la query SQL
    $query = "SELECT * FROM utenti WHERE email = ? AND emailVerificata = 'si'";
    $stmt = $connection->prepare($query);
    
    // Controllo della preparazione della query
    if (!$stmt) {
        die("Preparazione della query fallita: " . $connection->error);
    }

    // Associa il parametro e esegui la query
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Controlla se la query ha restituito righe
    if ($result->num_rows > 0) {
        $info = "ok";  // Email verificata
    } else {
        $info = "notOK";  // Email non verificata o non presente
    }

    // Chiudi lo statement e la connessione
    $stmt->close();
    $connection->close();

    return $info;
}

?>