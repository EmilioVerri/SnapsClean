<?php



include("../funzioni/funzioneControlloLogin.php");
require_once "../funzioneConnessione.php";
class Registrazione
{


    public $nome;
    public $cognome;
    public $email;
    public $password;
    public $parametroControlloEmail;


    public function __construct($nome,$cognome,$email,$password,$parametroControlloEmail) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email=$email;
        $this->password = $password;
        $this->parametroControlloEmail=$parametroControlloEmail;
    }




    public function registrati() {
        $risultatoPassword = validaPassword($this->password);
        $controllaEmail = controlloEmail($this->email);
        
        if($controllaEmail == "ok") {
            if($risultatoPassword == "ok") {
                // La query di inserimento
                $query = "INSERT INTO utenti (nome, cognome, email, password, verificaEmail) VALUES (?, ?, ?, ?, ?)";
                
                // Associa i parametri nella sequenza corretta
                $parametri = [
                    $this->nome,  // Nome
                    $this->cognome,  // Cognome
                    $this->email,  // Email
                    password_hash($this->password, PASSWORD_DEFAULT),  // Password
                    $this->parametroControlloEmail  // verificaEmail
                ];
                
                // Tipo dei parametri per bind_param: s=string, b=blob, i=integer, d=double
                $tipi = "sssss";
                
                // Chiama la funzione queryDB
                queryDB($query, $parametri, $tipi);
            } else {
                echo "<script>
                    document.addEventListener('DOMContentLoaded', function() {
                        showAlert();
                    });
                </script>";
            }
        } else {
            echo "Email già in uso.";
        }
    }
    
}

?>