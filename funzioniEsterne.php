<?php


//da cambiare perchè già dentro funzioneControlloLogin.php
function validaPasswordSecond($password) {
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
