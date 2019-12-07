<html>
    <head>
        <title>Tabelle</title>
        <link rel="stylesheet" href="stile.css">
    </head>
    <body>

         <?php

            $AZIONE="";
    
            if(isset($_POST['AZIONE'])) $AZIONE=$_POST['AZIONE'];
                
                print"<div class='titoli'>";
                print"<h1>Tabelle by Pier</h1>";
                print"<br><br>";
                print"<h3>Creazione tabelle dinamicamente</h3>";
                print"</div>";
                print"<form action='default.php' method='POST'>";
                print"<p class='riga'>Numero righe</p>";
                print"<input type='text' placeholder='inserire' name='riga'>";
                print"<p class='colonna'>Numero colonne</p>";
                print"<input type='text' placeholder='inserire' name='colonna'>";
                print"<p class='elemento'>Elemento da inserire</p>";
                print"<input type='text' placeholder='inserire' name='elemento'>";
                print"<br><br>";
                print"<input type='submit' value='Invia!'>";
                print "<input type=hidden name=AZIONE value=test>";
                print"</form>";

            
             
            if($AZIONE=="test"){
                
                $n = $_POST["riga"];
                $m = $_POST["colonna"];      /*input*/
                $el = $_POST["elemento"];
                print"<p class='ris'>Risultato<p>";
                if(!empty($n) || !empty($m) || !empty($el)){
                    print"<p class='ris'>Risultato<p>";
                    print"<table>";
                    for($i = 0; $i < $n; $i++){

                    print"<tr></tr>";

                    for($j = 0; $j < $m; $j++){

                        print"<td>$el</td>";
                        /*
                        print $el;
                        */
                    }
                }
                print"</table>";
                }
                else{
                    print"<p class='ris1'>Inserire i valori e riprovare</p>";
                }

                
            }       

         ?>

    </body>
</html>