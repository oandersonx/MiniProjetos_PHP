<?php
    session_start();
    
    
    if ($_SESSION['usuario']){
        echo 'Olá,'.$_SESSION['usuario']; 
    }
    else{
        $_SESSION['mensagem'] = 'Sessão Expirada';
        header("Location: index.php");
    }

?>