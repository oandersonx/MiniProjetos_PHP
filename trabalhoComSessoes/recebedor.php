<?php
    
    session_start();
    
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS); // Evita códigos no input 
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $idade = filter_input(INPUT_POST, "idade", FILTER_VALIDATE_INT); 
    //echo 'Seu nome é: '.$nome;

    if ($nome && $email && $idade){
        $_SESSION['usuario'] = $nome;
        echo 'Passou!';
        echo $nome;
    }else{
        $_SESSION['mensagem'] = 'Digite os dados corretamente';
        header("Location: index.php"); //Retorna a index.php
        exit;

        
    }
    
?>
<br/>
<input type="submit" name="sobre" value='Sobre' id="btn_sobre" onClick="location.href='sobre.php'">
<br/>
<a href="PHPSession2/login.php">Link Aqui</a>
<a href="https://www.w3schools.com/">Visit W3Schools.com!</a>