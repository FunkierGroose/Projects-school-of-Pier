<html>
    <head>
        <title>ris somma</title>
        <link rel="stylesheet" href="risultati.css">
    </head>
    <body>
<div class="box-scelta">
<?php

$n1 = $_POST["n1"];     /* input numero da form */
$n2 = $_POST["n2"];     /* input numero da form */
$n3 = $_POST["n3"];     /* input numero da form */
$n4 = $_POST["n4"];     /* input numero da form */

$ris = $n1 + $n2 + $n3 + $n4;       /* operazione algebrica */

echo "il risultato e $ris";              /* stampa */

?>
</div>
    </body>
</html>
