<html>
    <head>
        <title>Indovina!</title>
        <link rel="stylesheet" href="stile.css">
    </head>
    <body>

<?php

            $AZIONE = ""; // deve essere vuota per elaborare lo script
            $VINTO = false; // il programma sa che siamo sconfitti
    
            if(isset($_POST['AZIONE'])) {
                // prelevo le variabili già inviate
                $AZIONE = $_POST['AZIONE'];
                $NUMIND = $_POST['NUMIND'];
                $tentativo = $_POST["tentativo"];
                $val_utente = $_POST["num"];

                // verifico se utente ha indovinato
                // se si, creo un collegamento a una pagina html
                if($NUMIND == $val_utente) {    // verifico se il numero generato e uguale a quello inserito dall'utente
                    header("location: http://127.0.0.1/server/Indovina/vinto.html");  /* hai vinto */
                    $VINTO = true;

                } else {
             
                    if($NUMIND > $val_utente) {
                       print"<p class='testo'>Riprovaci! il numero che hai messo e' maggiore</p>";

                   } else {
                    print"<p class='testo'>Riprovaci! il numero che hai messo e' minore</p>";

                   }
                    $tentativo+=1; // intato incremento la variabile tentativo 
                }

            } 
            else {
                // creo i valori corretti poichè il programma non è mai stato eseguito
                $NUMIND =  rand(1 , 10); // creamo a priori il numero generato, che poi verra salvato in un aria di memoria
                $tentativo = 1;  // il numero dei tentativi parte da 1 sino ad arrivare a 10
            }

            if (!$VINTO) {
                    if($tentativo<10){

                        print"<p class='regola'>Regolamento</p>";
                        print"<p class='regola1'>I numeri casuali vengono generati da 1 a 10</p>";
                        print"<div class='background-wrap'>";
                        print"<video id='video-bg-elem' preload='auto' autoplay='true' loop='loop' muted='muted'>";
                        print"<source src='Runner - 10809.mp4' type='video/mp4'>";
                        print"</video>";
                        print"</div>";
                        print"<h1>Indovina il numero!</h1>";
                        print"<br>";
                        print"<h3>Prova a indovinare!</h3>";
                        print"<form action='default.php' method='POST'>";
                        print"<table>";
                        print"<tr><td><p class='cel'>Tentativo numero</p> ";
                        print "<p class='cell'>$tentativo";
                        print"</p></td><td><input type='text' placeholder='Vai! provaci!' name='num'></td><td><input type='submit' value='Prova!'></td></tr>";
                        print"</table>";
                        print"<input type=hidden name=AZIONE value=test>";
                        print"<input type=hidden name=tentativo value=";
                        print $tentativo; /* risultato che serve per capire a quanti tentativi siamo, viene visualizzato dall intero programma */
                        print">";
                        print"<input type=hidden name=NUMIND value=";
                        print $NUMIND;  /* il numero generato !fisso! per lintero programma e visualizzato */
                        print">";
                        print"</form>";

                    } else {
                        header("location: http://127.0.0.1/server/Indovina/chiudi.html"); // echo"<p>Peccato! hai perso</p>";
                    }
            }
              
?>
</body>
</html>

