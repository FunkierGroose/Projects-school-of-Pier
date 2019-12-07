<html>
    <head>
        <title>Calcolatrice in php</title>
        <link rel="stylesheet" href="stile.css">
    </head>
    <body>
         <?php  
             $AZIONE="";
    
             if(isset($_POST['AZIONE'])) $AZIONE=$_POST['AZIONE'];
      
             
             $n1=0;
             $n2=0;                            /*Definizione delle variabili per la INNER HTML di default */
             $scelta="add";

             if($AZIONE=="test"){

                $n1 = $_POST["n1"];                         
                $n2 = $_POST["n2"];                          
                $scelta = $_POST["scelta"];
             } 

                print "<h1>Calcolatrice by Pier</h1>";
                print "<br>";
                print "<h3>Opzione a scelta per operatore</h3>";
                print "<form action='default.php' method='POST'>";
                print "<input type='text' name='n1' class=' boh' placeholder='inserisci' value=$n1>";
                print "<input type=hidden name=AZIONE value=test>";
                print "<br><br>";
                print "<input type='text' name='n2' class='boch' placeholder='inserisci' value=$n2>";
                print "<br><br>";
                print "<b>A te la scelta bomber</b>";
                print "<br><br>";
                print "<select name='scelta'>";  

                print "<option value='add' ";
                if ($scelta=='add' ) print "selected";                /* INNER HTML in php metodo 1 */
                print ">addizione</option>";

                print "<option value='diff' ";
                if($scelta == 'diff') print "selected";             /* INNER HTML in php metodo 1 */
                print ">differenza</option>";

                print "<option value='prod' ";
                if($scelta == 'prod') print "selected";          /* INNER HTML in php metodo 1 */
                print ">prodotto</option>";
                
                print "</select>";
                print "<br><br>";
                print "<input type='submit' value='Risultato'>";
                print "</form>";
                
            if($AZIONE=="test"){

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
  
                print "<p>il risultato e' $ris</p>";
            }     
     ?>
    </body>
</html>