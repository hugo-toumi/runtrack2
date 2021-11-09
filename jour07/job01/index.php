<?php

  
  session_start();

  
        echo $_SESSION ['nbvisites'] = $_SESSION ['nbvisites']+1 ; 

        if(isset($_POST['reset'])){session_unset() ;

        }

?>

<form action="" method="post">
<input type="submit" name="reset" value="reset" >
</form>
