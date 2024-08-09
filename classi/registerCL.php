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
    public $emailVerificata;
    public $livello;
    public $data_oggi;


    public function __construct($nome, $cognome, $email, $password, $parametroControlloEmail, $emailVerificata, $livello, $data_oggi)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->password = $password;
        $this->parametroControlloEmail = $parametroControlloEmail;
        $this->emailVerificata = $emailVerificata;
        $this->livello = $livello;
        $this->data_oggi = $data_oggi;
    }

    public function passwordDimenticata(){
        
        $queryConferma = "SELECT verificaEmail FROM utenti WHERE email='{$this->email}'";
        $tokenDaEstrarre = queryDBSelect($queryConferma);


        $token = $tokenDaEstrarre[0]['verificaEmail'];
        //invioEmail
        // Invio dell'email con il link di conferma
        $to = $this->email;
        $subject = "Resetta la tua password";
        $confirm_url = "http://192.168.188.74/resetPassword.php?token=" . $token; // Sostituisci con il tuo dominio
        $message = "
Ciao,

Clicca sul link che ti è stato inviato via email per reimpostare la tua password. Se non ricevi l'email, verifica la tua cartella spam o prova a richiederla di nuovo.

$confirm_url
";

        $headers = "From: noreply@192.168.188.74\r\n";

        if (mail($to, $subject, $message, $headers)) {
            // echo "Controlla la tua email. Una volta confermata, potrai accedere al sito. Mi raccomando, guarda anche nella cartella spam.";
        } else {
            // echo "Errore nell'invio dell'email.";
        }
        //fine invio email

    }






    public function login()
    {
        verificaUtenteLogin($this->email, $this->password);
    }


    public function registrati()
    {
        $risultatoPassword = validaPassword($this->password);
        $controllaEmail = controlloEmail($this->email);

        if ($controllaEmail == "ok") {
            if ($risultatoPassword == "ok") {
                // La query di inserimento
                $query = "INSERT INTO utenti (nome, cognome, email, password, verificaEmail,emailVerificata, livelloUtente, dataCreazioneAccount) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

                // Associa i parametri nella sequenza corretta
                $parametri = [
                    $this->nome,  // Nome
                    $this->cognome,  // Cognome
                    $this->email,  // Email
                    password_hash($this->password, PASSWORD_DEFAULT),  // Password
                    $this->parametroControlloEmail,  // verificaEmail
                    $this->emailVerificata,
                    $this->livello, //livello utente
                    $this->data_oggi
                ];

                // Tipo dei parametri per bind_param: s=string, b=blob, i=integer, d=double
                $tipi = "ssssssss";

                // Chiama la funzione queryDB
                queryDB($query, $parametri, $tipi);



                $queryConferma = "SELECT verificaEmail FROM utenti WHERE verificaEmail='{$this->parametroControlloEmail}'";
                $tokenDaEstrarre = queryDBSelect($queryConferma);


                $token = $tokenDaEstrarre[0]['verificaEmail'];
                //invioEmail
                // Invio dell'email con il link di conferma
                $to = $this->email;
                $subject = "Conferma la tua email";
                $confirm_url = "http://192.168.188.74/confermaEmail.php?token=" . $token; // Sostituisci con il tuo dominio
                $message = "
        Ciao,

        Grazie per esserti registrato. Per confermare la tua email, clicca sul link sottostante:

        $confirm_url
        ";

                $headers = "From: noreply@192.168.188.74\r\n";

                if (mail($to, $subject, $message, $headers)) {
                    // echo "Controlla la tua email. Una volta confermata, potrai accedere al sito. Mi raccomando, guarda anche nella cartella spam.";
                } else {
                    // echo "Errore nell'invio dell'email.";
                }
                //fine invio email

            } else {
                echo "<script>
                    document.addEventListener('DOMContentLoaded', function() {
                        showAlert();
                    });
                </script>";
            }
        } else {
            echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                showAlertEmail();
            });
        </script>";
        }
    }
}
