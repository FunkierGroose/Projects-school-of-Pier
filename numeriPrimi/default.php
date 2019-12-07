<html>
    <head>
        <title>Numeri Primi</title>
        <link rel="stylesheet" href="stile.css">
    </head>
    <body>
          <?php
              $AZIONE="";
    
              if(isset($_POST['AZIONE'])) $AZIONE=$_POST['AZIONE'];
                  
              
                print "<div class='titoli'>";
                print "<h1>Numeri Primi by Pier</h1>";
                print "<h3>Calcolo dei numeri primi in un range definito</h3>";
                print "</div>";
                print "<h3 class='titoletto'>Tabella di confronto</h3><br>";
                print "<img class='image' src='numeriprimi.jpg'>";
                print "<form action='default.php' method='POST'>";
                print "<p>Inizio Range</p>";
                print "<br>";
                print "<input type='text' name='range' placeholder='inserisci'>";
                print "<br><br>";
                print "<p>Fine Range</p>";
                print "<br>";
                print "<input type='text' name='fine' placeholder='inserisci'>";
                print "<br><br>";
                print "<input type='submit' value='Clicca!'>";
                print "<input type=hidden name=AZIONE value=test>";
                print "</form>";
                
                
              
               
              if($AZIONE=="test"){
                print "<h3 class='tit-ris'>Risultato<h3><table cellpadding=10><tr>";
                $stampato=0;


                  $n1 = $_POST["range"];
                  $n2 = $_POST["fine"];
                  $const = 2;
                  for($i = $n1; $i <= $n2; $i++){
                      $primo = 1;
                      for($j = $const; $j <= intval($i/2); $j++){
                          if($i/$j == intval($i/$j)){
                              $primo = 0;

                              break;
                          }
        
                      }
                      if($primo){
                         
                          if ($stampato>10) {
                              $stampato=0;
                              print "</tr><tr>";
                          }
                          $stampato++;
                        
                        
                                print "<td><div class='RIS'>$i</div></td>";
                            
                             
                        
                      }
                      

                  }
                  for(;$stampato<=10;print"<td></td>",$stampato++);


                  print "</tr></table>";
                  
              }       
             
          ?>
    </body>
</html>