<?php

if(!isset($_COOKIE['nbvisites'])){
    setcookie('nbvisites',1,time()+ 3600);
}
else{
    setcookie('nbvisites',$_COOKIE['nbvisites']+1,time()+ 3600);
    echo $_COOKIE['nbvisites'];
}
if(isset($_POST['reset'])){
    setcookie('nbvisites');
    
}

?>
<form action= "index.php" method= "POST"> 
    <input type= "submit" name= "reset" value= "reset">
</form> 