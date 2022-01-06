<?php

    session_start();

    $_SESSION['nome'] = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS); // Evita códigos no input 
    $_SESSION['email'] = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $_SESSION['idade'] = filter_input(INPUT_POST, "idade", FILTER_VALIDATE_INT); 

    if ($_SESSION['nome'] && $_SESSION['email'] && $_SESSION['idade']){
        echo 'Olá, '."<b>".$_SESSION['nome']."</b>".', seu email é '."<b>".$_SESSION['email']."</b>".' e sua idade é '."<b>".$_SESSION['idade']."<b>";
        echo "<br/><i>"."Estes dados foram armazenados em uma sessão e exibidos aqui."."</i>";
    }else{
       $_SESSION['mensagem_erro'] = 'Digite os dados corretamente!';
       header("Location: index.php");
    }

?>

<br/><a href='index.php'> <- Retornar</a>

<br/><br/><a href='../index.php'> Menu Principal</a>