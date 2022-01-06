<?php 
session_start();

echo "<h1>".'Qual o seu nome?'."</h1><br/>";


?>
<form action="index.php" method='post'>
    <input type="text" name='usuario'/>
<input type="submit" value="Entrar">

</form>