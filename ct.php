<?php 
include ('./snoopy.class.php');

$snoopy = new Snoopy();

// $sourceURL = "http://www.3jy.com/tag/12/2.html";
$sourceURL = "http://www.3jy.com/youmo/00/348200.html";
// $snoopy->fetchlinks($sourceURL);
// $snoopy->fetchtext($sourceURL);
$snoopy->fetch($sourceURL);
    
$return = $snoopy->results;

$regex3="/<title>.*?<\/title>/ism";
if(preg_match_all($regex3, $return, $title)){  
   print_r($title);  
}else{  
   echo '0';  
}


// print_r($return);
$regex4="/<div class=\"content-nr\".*?>.*?<\/div>/ism";  
if(preg_match_all($regex4, $return, $matches)){  
   print_r($matches);  
}else{  
   echo '0';  
}





 ?>