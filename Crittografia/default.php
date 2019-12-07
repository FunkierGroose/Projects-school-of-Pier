<html>
    <head>
        <title>Touring!</title>
        <link rel="stylesheet" href="Stile.css">
    </head>
    <body>
        <?php

            $AZIONE="";
                
            if(isset($_POST['AZIONE'])) $AZIONE=$_POST['AZIONE'];

            print"<h1>Touring!</h1>";
            print"<br>";
            print"<h3>Programma con crittografia</h3>";
            print"<p>Crittografia con algoritmo sulla tabella Ascii</p>";
            print"<br>";
            print"<form action='default.php' method='post'>";
            print"<table>";
            print"<tr><td><input type='text' name='t' placeholder='inserisci la frase'></td><td><input type='submit' value='Click!'></td></tr>";
            print"</table>";
            print"<input type=hidden name=AZIONE value=test>";
            print"</form>";

            
            if($AZIONE == "test"){
                
                $parola = $_POST['t'];

                $cont = strlen($parola);     /* calcola la lunghezza della stringa */

                for($i = 0; $i < $cont; $i++){
                    $parziale = substr($parola, $i, 1);  /* preleva  una lettera dalla variabile partendo da zero */
                    $conv_num = ord($parziale);       /* converte la lettera in numero */
                    $conv_let = chr($conv_num + 1);   /* converte la lettera in formato ASCII */
                    print $conv_let;
                }
            }
        ?>
    </body>
</html>