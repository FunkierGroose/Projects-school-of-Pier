<html>
    <head>
        <title>Media voto</title>
        <link rel="stylesheet" href="stile.css">
        <script src="https://kit.fontawesome.com/b40db53f8d.js" crossorigin="anonymous"></script>
    </head>
    <body>
<?php  
  $AZIONE="";
    
  if(isset($_POST['AZIONE'])) $AZIONE=$_POST['AZIONE'];
  print"<img src='https://img.icons8.com/wired/64/000000/console.png'>";
  print"<div class='background-wrap'>";
  print"<video id='video-bg-elem' preload='auto' autoplay='true' loop='loop' muted='muted'>";
  print"<source src='Pencil - 8256.mp4' type='video/mp4'>";
  print"</video>";
  print"</div>";    
  print"<h1>School.io</h1>";
        print"<h2>Calcolo delle medie scolastiche</h2>";
        print"<form action='default.php' method='POST'>";
                print"<table>";
                print"<tr><td><label>Italiano</label></td>";
                print"<br>";
                print"<td><select name='ita' id='tendine'>";
                print"<option value='2'>2</option>";
                print"<option value='3'>3</option>";
                print"<option value='4'>4</option>";
                print"<option value='5'>5</option>";
                print"<option value='6'>6</option>";
                print"<option value='7'>7</option>";
                print"<option value='8'>8</option>";
                print"<option value='9'>9</option>";
                print"<option value='10'>10</option>";
                print"</select></td></tr>";
                print"<br>";
                print"<tr><td><label>Storia</label></td>";
                print"<br>";
                print"<td><select name='sto' id='tendine' >";
                print"<option value='2'>2</option>";
                print"<option value='3'>3</option>";
                print"<option value='4'>4</option>";
                print"<option value='5'>5</option>";
                print"<option value='6'>6</option>";
                print"<option value='7'>7</option>";
                print"<option value='8'>8</option>";
                print"<option value='9'>9</option>";
                print"<option value='10'>10</option>";
                print"</select></td></tr>";
                print"<br>";
                print"<tr><td><label>Matematica</label></td>";
                print"<br>";
                print"<td><select name='mat'  id='tendine'>";
                print"<option value='2'>2</option>";
                print"<option value='3'>3</option>";
                print"<option value='4'>4</option>";
                print"<option value='5'>5</option>";
                print"<option value='6'>6</option>";
                print"<option value='7'>7</option>";
                print"<option value='8'>8</option>";
                print"<option value='9'>9</option>";
                print"<option value='10'>10</option>";
                print"</select></td></tr>";
                print"<br>";
                print"<tr><td><label>Inglese</label></td>";
                print"<br>";
                print"<td><select name='ing'  id='tendine'>";
                print"<option value='2'>2</option>";
                print"<option value='3'>3</option>";
                print"<option value='4'>4</option>";
                print"<option value='5'>5</option>";
                print"<option value='6'>6</option>";
                print"<option value='7'>7</option>";
                print"<option value='8'>8</option>";
                print"<option value='9'>9</option>";
                print"<option value='10'>10</option>";
                print"</select></td></tr>";
                print"<br>";
                print"<tr><td><label>Tecnologie e progettazione</label></td>";
                print"<br>";
                print"<td><select name='Tps'  id='tendine'>";
                print"<option value='2'>2</option>";
                print"<option value='3'>3</option>";
                print"<option value='4'>4</option>";
                print"<option value='5'>5</option>";
                print"<option value='6'>6</option>";
                print"<option value='7'>7</option>";
                print"<option value='8'>8</option>";
                print"<option value='9'>9</option>";
                print"<option value='10'>10</option>";
                print"</select></td></tr>";
                print"<br>";
                print"<tr><td><label>Sistemi e reti</label></td>";
                print"<br>";
                print"<td><select name='sis'  id='tendine'>";
                print"<option value='2'>2</option>";
                print"<option value='3'>3</option>";
                print"<option value='4'>4</option>";
                print"<option value='5'>5</option>";
                print"<option value='6'>6</option>";
                print"<option value='7'>7</option>";
                print"<option value='8'>8</option>";
                print"<option value='9'>9</option>";
                print"<option value='10'>10</option>";
                print"</select></td></tr>";
                print"<br>";
                print"<tr><td><label>Gestione progetto</label></td>";
                print"<br>";
                print"<td><select name='gpo'  id='tendine'>";
                print"<option value='2'>2</option>";
                print"<option value='3'>3</option>";
                print"<option value='4'>4</option>";
                print"<option value='5'>5</option>";
                print"<option value='6'>6</option>";
                print"<option value='7'>7</option>";
                print"<option value='8'>8</option>";
                print"<option value='9'>9</option>";
                print"<option value='10'>10</option>";
                print"</select></td></tr>";
                print"<br>";
                print"<tr><td><label>Informatica</label></td>";
                print"<br>";
                print"<td><select name='info'  id='tendine'>";
                print"<option value='2'>2</option>";
                print"<option value='3'>3</option>";
                print"<option value='4'>4</option>";
                print"<option value='5'>5</option>";
                print"<option value='6'>6</option>";
                print"<option value='7'>7</option>";
                print"<option value='8'>8</option>";
                print"<option value='9'>9</option>";
                print"<option value='10'>10</option>";
                print"</select></td></tr>";
                print"<br><br>";
                print"<input type='submit' value='Click!'>";
                print "<input type=hidden name=AZIONE value=test><BR>";
                print"</form>";
                print"</table>";
   
  if($AZIONE=="test"){

    /* input variabili */

    $ita = $_POST["ita"];
    $sto = $_POST["sto"];
    $mat = $_POST["mat"];
    $ing = $_POST["ing"];
    $Tps = $_POST["Tps"];
    $sis = $_POST["sis"];
    $gpo = $_POST["gpo"];
    $info = $_POST["info"];
    $n = 8;
    
    /* inizio script */
    $media = ($ita + $sto + $mat + $ing + $Tps + $sis + $gpo + $info)/$n;
    
    print"<table class='ris'>";


    print"<tr><td><p>Italiano</p></td>";   
    print"<td><p class='";
    if($ita <6){
      print "insuff";
    }
    else print "suff";      
    print"'>$ita</p></td></tr>";
    
    print"<tr><td><p>Storia</p></td>";   
    print"<td><p class='";
    if($sto <6){
      print "insuff";
    }
    else print "suff";      
    print"'>$sto</p></td></tr>";
    
    print"<tr><td><p>Matematica</p></td>";   
    print"<td><p class='";
    if($mat <6){
      print "insuff";
    }
    else print "suff";      
    print"'>$mat</p></td></tr>";

    print"<tr><td><p>Inglese</p></td>";   
    print"<td><p class='";
    if($ing <6){
      print "insuff";
    }
    else print "suff";      
    print"'>$ing</p></td></tr>";

    print"<tr><td><p>Tecnologie e progettazione</p></td>";   
    print"<td><p class='";
    if($Tps <6){
      print "insuff";
    }
    else print "suff";      
    print"'>$Tps</p></td></tr>";

    print"<tr><td><p>Sistemi e reti</p></td>";   
    print"<td><p class='";
    if($sis <6){
      print "insuff";
    }
    else print "suff";      
    print"'>$sis</p></td></tr>";

    print"<tr><td><p>Gestione progetto</p></td>";   
    print"<td><p class='";
    if($gpo <6){
      print "insuff";
    }
    else print "suff";      
    print"'>$gpo</p></td></tr>";

    print"<tr><td><p>Informatica</p></td>";   
    print"<td><p class='";
    if($info <6){
      print "insuff";
    }
    else print "suff";      
    print"'>$info</p></td></tr>";

    print"</table>";
    print"<p class='tit'>Tabella risultati<p>";
    if($media < 6){
      print"<p class='media'>Media non sufficiente $media</p>";
    }
    else{
      print"<p class='media'>Media sufficiente $media</p>";
    }

  }       
?>
 </body>
</html>