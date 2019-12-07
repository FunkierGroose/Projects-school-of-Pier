<html>
    <head>
        <title>Risultato</title>
        <link rel="stylesheet" href="stilePhp.css">
    </head>
    <body>
        <div class="box_result">
             <?php
                    $nome = $_POST["nome"];
                    $cognome = $_POST["cognome"];
                    $tel = $_POST["tel"];
                

                   if(empty($nome) || empty($cognome) || empty($tel)){
                    echo "Compilare tutti i campi";
                   }

                   else{
                    echo"Registrazione con successo <br><br>";
                    echo "Nome: $nome <br><br>";
                    echo "Cognome: $cognome<br><br>";
                    echo "Numero di telefono: $tel<br><br>";
                   }
             ?>
        </div>
    </body>
</html>