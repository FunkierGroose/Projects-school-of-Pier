<html>
    <head>
        <title>Risultato</title>
        <link rel="stylesheet" href="stileScript.css">
    </head>
    <body>
        <div class="risultato">
        <?php
              
              $n1 = $_POST["n1"];                         /* fase */
              $n2 = $_POST["n2"];                          /*  input  */
              $scelta = $_POST["scelta"];

              if ($scelta== "add"){

                  $ris = $n1 + $n2;                     /* script per l'addizione */

              } 
              else if ($scelta == "prod"){

                   $ris = $n1 * $n2;                  /* script per il prodotto */

              } else{

                   $ris = $n1 - $n2;             /* script per la differenza */

              }

              echo "il risultato e' $ris";
        ?>
        </div>
    </body>
</html>