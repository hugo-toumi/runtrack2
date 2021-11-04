<?php 

$chiffre =[200, 204, 173, 98, 171, 404, 459];

 
 for($x = 0; isset($chiffre[$x]); $x++){

if ($chiffre[$x]%2 == 0){
    echo $chiffre[$x]. ' est paire ' . '<br/>';
}
elseif ($chiffre[$x]%2 != 0){
    echo $chiffre[$x]. ' est impaire ' . '<br/>';
 }   


}    

?> 

