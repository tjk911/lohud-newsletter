<?php 
function wwwcopy($link,$file) 
{ 
   $fp = @fopen($link,"r"); 
   while(!feof($fp)) 
   { 
       $cont.= fread($fp,1024); 
   } 
   fclose($fp); 

   $fp2 = @fopen($file,"w"); 
   fwrite($fp2,$cont); 
   fclose($fp2); 
} 

//Example on using this function 
wwwcopy("http://data.lohud.com/kaitest/rocklandangle/index3.php", "index2.html"); 
//Another example 

?>