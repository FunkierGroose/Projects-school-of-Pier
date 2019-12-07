<html>
    <head>
        <title>Risultato</title>
        <link rel="stylesheet" href="stilePhp.css">
    </head>
    <body>
        <div class="box-result">
            <?php
                 
                 $val1 = $_POST["val1"];
                 $val2 = $_POST["val2"];
                 $val3 = $_POST["val3"];

                 echo "Questa e' la sequenza seguente <br><br>";

                 for($i = $val1; $i <= $val2; $i+=$val3){

                    echo "$i<br>";
                    
                 }
                 
            ?>

        </div>
    </body>
</html>