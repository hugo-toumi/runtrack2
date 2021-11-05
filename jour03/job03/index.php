<?php
$str = 'Im sorry Dave I m afraid I cant do that.';

 
$voyelles = 'aeIiouy';

for($x = 0; isset($str[$x]); $x++){

for($a = 0; isset($voyelles[$a]); $a++)
    
if($str[$x] == $voyelles[$a])

echo $voyelles[$a];

}

