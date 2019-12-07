<html>
    <head>
        <title>Generatore</title>
        <link rel="stylesheet" type="text/css" href="stile.css">
    </head>
    <body>
        <?php

            $azione = "";
            $caratteri = array_merge(range('A','Z'), range('a','z'), range('@','#'));

            if(isset($_POST['azione']))
            $azione = $_POST['azione'];

            print"<h1>Generazione!</h1>";
            print"<h3>Generatore di password alfanumeriche semplici</h3>";
            print"<form action='default.php' method='post'>";
            print"<input type='text' name='lung' placeholder='inserire la lunghezza della pw'>";
            print"<input type='submit' value='Click!'>";
            print"<input type='hidden' name='azione' value='test'>";
            print"</form>";
            
            if($azione == "test"){
                /*echo implode($caratteri);*/
                $lung = $_POST['lung'];
                
                for($i = 1; $i <= $lung; $i++){
                        $ris = array_rand($caratteri, 1);
                        echo "<p class='ris'>$caratteri[$ris]</p>";
                }
            }


        ?>
    </body>
</html>