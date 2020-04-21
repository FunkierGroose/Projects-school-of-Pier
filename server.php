<?php

#new $_SESSION['UTENTE]
$host = "127.0.0.1";
$port = 12296;

set_time_limit(0); //esecuzione all'infinito

$sock = socket_create(AF_INET, SOCK_STREAM, 0) or die("Server: Non posso creare il socket!\n"); //Creazione socket
$result = socket_bind($sock, $host, $port) or die ("Server: Non posso legare il socket al indirizzo\n"); //creazione legame socket con l'indirizzo del url su cui agisce

$result = socket_listen($sock, 3) or die("Server: Non posso settare il server sull'ascolto del socket\n");//Creare il canale d'ascolto e mettere in attessa il server da eventuali risp

class chat{

    function readline(){

        return rtrim(fgets(STDIN)); //formatto la stringa da spazi vuoti verso destra
    }
}

do{
    $accept = socket_accept($sock) or die("Server: Non posso accettare la richiesta di connessione del socket"); //apre la connessione con il client
    $msg = socket_read($accept, 1024)or die("Server: Non posso leggere l'input dato\n");  //legge il pacchetto inviato dal client
     
    $msg = trim($msg); //eilimina gli spazi bianchi
    print"Client:\t".$msg."\n\n"; //stampo il mex del client

    $line = new chat(); //richiamo l'oggetto chat per una nuova risposta
    print"Server risposta:\t";
    $reply = $line->readline(); //input server

    socket_write($accept, $reply, strlen($reply)) or die("Server: Non posso scrivere l'output\n"); //scrivo l'output

}while(true); //esegui tutto cio fino a quando la connessione rimane aperta

socket_close($accept, $sock); //chiudo

?>