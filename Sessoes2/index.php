<?php
    session_start();

    $_SESSION['usuario'] = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_SPECIAL_CHARS);

    if($_SESSION['usuario']){
        echo "<h2>"."Olá, ".$_SESSION['usuario']." - ";
    } else{
        header("Location: login.php");
    }

?>

<a href='login.php'>Sair</a></h2>

<br/><br/><a href='../index.php'> Menu Principal</a>
