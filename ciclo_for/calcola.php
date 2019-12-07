<html><head><title>PING</title></head><BODY BGCOLOR=cyan>
<center><font size=10>Calcolo del PING </font><br><br>

<?php  
  $AZIONE="";
    
  if(isset($_POST['AZIONE'])) $AZIONE=$_POST['AZIONE'];
      
  if($AZIONE==""){
      print"<form name=inser method=post action='calcola.php'>";
      print "Indirizzo <input type=text name=url><BR>";
      print "<input type=hidden name=AZIONE value=test><BR>";
      print "<INPUT TYPE=SUBMIT VALUE='CALCOLA IL PING'><br>"; 
      print "</form>";
  }
   
  if($AZIONE=="test"){
      if(!isset($_POST['url']))   die("INSERISCI URL");
      $ch=curl_init($_POST['url']);
      curl_setopt ($ch,CURLOPT_RETURNTRANSFER,1);
      if(curl_exec($ch))
      {
          $info=curl_getinfo($ch);
          echo 'Sono necessari '.$info['total_time'].'  secondi per '.$info['url'];
      } else  echo 'errore';                           
      curl_close($ch);                           
  }       
?>
</center></body></html>