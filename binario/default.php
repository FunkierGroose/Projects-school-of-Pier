<html>
    <head>
        <title>Convertitore!</title>
        <link rel="stylesheet" href="Stile_rifatto.css">
    </head>
    <body>
        <?php

            $azione = "";

            if(isset($_POST['azione']))
            $azione = $_POST['azione'];

            print"<h1>Binary</h1>";
            print"<h3>Convertitore di numeri binari e decimali<h3>";
            print"<form action='default.php' method='post'>";
            print"<input type='text' name='numero' placeholder='inserire il valore'>";
            print"<input type='hidden' name='azione' value='test'>";
            print"<select class='scelta' name='scelta'>";
            print"<option value='binario'>Binario</option>";
            print"<option value='decimale'>Decimale</option>";
            print"</select>";
            print"<input type='submit'>";
            print"</form>";
            
            if($azione == "test"){

                $n = $_POST['numero'];
                $scelta = $_POST['scelta'];

                if($scelta == "binario"){
                        $ris = decbin($n);
                        print"<p>$ris</p>";
                }
                else{
                        $ris = bindec($n);
                        print"<p>$ris</p>";
                }
            }

        ?>
    </body>
</html>