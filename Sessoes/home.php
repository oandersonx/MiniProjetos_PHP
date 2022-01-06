<?php

    session_start();

    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS); // Evita códigos no input 
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $idade = filter_input(INPUT_POST, "idade", FILTER_VALIDATE_INT); 

    if ($nome && $email && $idade){
        echo 'Olá, '."<b>".$nome."</b>".', seu email é '."<b>".$email."</b>".' e sua idade é '."<b>".$idade."<b>";
        echo "<br/><i>"."Estes dados vieram através de sessões."."</i>";
    }else{
       $_SESSION['mensagem_erro'] = 'Digite os dados corretamente!';
       header("Location: sessoes.php");
    }

?>

<br/><a href='sessoes.php'> <- Retornar</a>

<br/><br/><a href='../index.php'> Menu Principal</a>