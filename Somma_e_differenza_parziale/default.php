<html>
    <head>
        <title>Partial!</title>
        <link rel="stylesheet" href="stile.css">
        <meta name="viewport" content="width=device-width, user-scalable=no,
        initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    </head>
    <body>
        <?php

            /*dichiarazione variabili globali*/
            $parziale = 0;
            $num = 0;
            $AZIONE = "";

            /* si verifica se il programma e stato chiamato in precedenza */
            if(isset($_POST['AZIONE'])){

                $AZIONE = $_POST['AZIONE'];
                $num = $_POST['num'];
                $scelta = $_POST['scelta'];

                if($scelta == 'add'){
                    $parziale = $_POST['parziale'] + $num;
                    if(isset($_POST['AZIONE'])){
                        /* Stampa con form non cancellabile */
                        print"<p class='ris1'>Valore parziale somma = $parziale</p>";
                    }
                }
                else{
                    $parziale = $_POST['parziale'] - $num;
                    if(isset($_POST['AZIONE'])){
                        /* Stampa con form non cancellabile */
                        print"<p class='ris2'>Valore parziale differenza = $parziale</p>";
                    }
                }
            }
            else{
                /* valori preimpostati nel caso in cui il programma non venga chiamato */
                $parziale = 0;
                $num = 0;
            }
            

            /*
            print"<div class='form'><img src='Group1.png'></img></div>";
            */
            print"<h1>Partial!</h1>";
            print"<br>";
            print"<h3>Calcolo parziale di un numero</h3>";
            print"<p class='te'>inserire il numero</p>";
            print"<p class='testo1'>per effettuare </p>";
            print"<p class='testo2'>la somma parziale</p>";
            print"<div class='form'>";
            print"<form action='default.php' method='post'>";
            print"<input type='text' name='num' placeholder='Inserire il numero'>";
            print"<select name='scelta'>";
            print"<option value='add'>Somma parziale</option>";
            print"<option value='diff'>Differenza parziale</option>";
            print"<input type='submit' value='Click!'>";
            print"</p>";
            print"<input type='hidden' name='parziale' value= ";
            print"$parziale";
            print">";
            print"<input type='hidden' name='AZIONE' value='test'>";
            print"</form>";










        ?>
    </body>
</html>