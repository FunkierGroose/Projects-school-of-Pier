<html>
    <head>
        <title>Calcolo Equazioni</title>
        <link rel="stylesheet" href="stile.css">
    </head>
    <body>
    <?php  

     $a = 0; 
     $b = 0;
     $c = 0;


  $AZIONE="";
    
  if(isset($_POST['AZIONE'])) $AZIONE=$_POST['AZIONE'];
      
    print"<div class='background-wrap'>";
    print"<video id='video-bg-elem' preload='auto' autoplay='true' loop='loop' muted='muted'>";
    print"<source src='Cpu - 27593.mp4' type='video/mp4'>";
    print"</video>";
    print"</div>";
    print"<h1>Math.io by Pier</h1>";
    print"<br><br>";
    print"<h3>Calcolo di equazioni di 1^ grado e 2^ grado</h3>";
    print"<h3 class='tit'>Possibili Soluzioni</h3>";
    print"<div class='box'>";
    print"<form action='default.php' method='POST'>";
        print"<p>Inserire il termine a</p>";
        print"<br><br>";
        print"<input type='text' name='a' class='a' placeholder='inserisci'>";
        print"<br><br>";
        print"<p>Inserire il termine b</p>";
        print"<br><br>";
        print"<input type='text' name='b' class='b' placeholder='inserisci'>";
        print"<br><br>";
        print"<p>Inserire il termine c</p>";
        print"<br><br>";
        print"<input type='text' name='c' class='c' placeholder='inserisci'>";
        print"<br><br>";
        print"<input type='submit' value='Click! :-)'>";
        print "<input type=hidden name=AZIONE value=test>";
    print"</form>";
    print"</div>";
  
   
  if($AZIONE=="test"){

        $a = $_POST["a"];
        $b = $_POST["b"];  
        $c = $_POST["c"];  
        
        if($a != 0 && $b != 0 && $c !=0){
            $delta = $b * $b - 4 * $a * $c;
            if($delta > 0){
                $x1 = -$b + sqrt($delta) /2 * $a;
                $x2 = -$b - sqrt($delta) /2 * $a;
                print"<p class='ris'>I risultati dell'equazione $a x^2 $b x x $c = 0 sono $x1 e $x2 con delta maggiore di zero</p>";
            }
            else if($delta == 0){
                $x = -$b / 2 * $a;
                print"<p class='ris'>I risultati dell'equzione $a x^2 $b x $c = 0 sono $x con delta uguale a zero</p>";
            }
            else{
                print"<p class='ris'>l'equazione $a x^2 $b x $c = 0 non ammette soluzioni perche' il delta e' minore di zero</p>";
            }
        }
        else if($a != 0 && $b != 0){
            $x1 = 0;
            $x2 = -($b / $a);
            print"<p class='ris'>Le soluzioni dell'equazione $a x^2 $b x  = 0 sono $x1 e $x2</p>";
        }
        else if($a != 0 && $c != 0){
            $x1 = +sqrt($c / $a);
            $x2 = -sqrt($c / $a);
            print"<p class='ris'>Le soluzioni dell'equazione $a x^2 $c = 0 sono $x1 e $x2</p>";
        }
        else if($a != 0){
            print"<p class='ris'>Il risultato dell'equazione $a x^2 = 0 e' 0</p>";
        }
        else{
            $x = -($c / $b);
            print"<p class='ris'>La soluzione dell'equazione $b x $c = 0 e' $x</p>";
        }
  }       
?>
    </body>
</html>