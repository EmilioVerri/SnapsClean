<?php



require_once "../funzioni/funzioneControlloPassword.php";
require_once "../funzioneConnessione.php";
class Registrazione
{


    public $nome;
    public $cognome;
    public $password;
    public $email;


    public function __construct($nome,$cognome,$password,$email) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->password = $password;
        $this->email=$email;
    }


    public function registrati(){

        $risultatoPassword=validaPassword($this->password);




        if($risultatoPassword=="ok"){
            $query = "INSERT INTO utenti (nome, cognome, email, password) VALUES (?, ?, ?, ?)";
            $parametri = [$this->nome, $this->cognome, $this->email, password_hash($this->password, PASSWORD_DEFAULT)];
            $tipi = "ssss"; // s per stringa, i per intero, d per double, b per blob
            queryDB($query, $parametri, $tipi);
        }else{
            echo "La password non è valida.";
        }


    }




}

?>