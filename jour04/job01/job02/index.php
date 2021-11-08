<?php

$str = "";

foreach($_GET as $argument => $valeur ){
    $str = $str. "<tr>
            <td> $argument </td>
            <td> $valeur </td>
        <tr>";
}

?>

<!DOCTYPE html>
<html>
    
    <form action="./index.php" method="get">

            <label for="first-name">nom </label>
            <input type="text" id="nom" name="first-name">
            <label for="last-name">prénom </label>
            <input type="text" id="prénom" name="last-name">
            <label for="mail">email</label>
        	<input type="email" id="mail" name="mail">
	        <label for="age">âge</label>
	        <input type="number" id="age" name="age">
            <input type="submit" value="envoyer">
    </form>

<table>
        <thead>

            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
         </thead>

    <tbody>
        
<?php 

            echo $str;  ?>
        
    </tbody>

</table>