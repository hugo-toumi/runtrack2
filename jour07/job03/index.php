<?php
session_start();
var_dump($_SESSION);
if(isset($_POST['prenom'])){
    $_SESSION['prenom'].= ' '.$_POST['prenom'];
    var_dump('_SESSION');
}
if(isset($_POST['reset'])){

    echo '0';

    session_unset() ;


}






    


?>
<form action="action.php" method="post">
 <p>Prenom: <input type="text" name="prenom" /></p>
 <p><input type="submit" name="send" value="reset"></p>
 <p><input type="submit" name="reset" value="send"></p>
</form>