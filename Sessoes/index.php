<?php
    session_start();
    //require("header.php");

    if($_SESSION['mensagem_erro']){
        echo $_SESSION['mensagem_erro'];
    }
    $_SESSION['mensagem_erro'] = ''; // Para limpar ao atualizar a página.
    
    
?>

<form method="POST" action="home.php">
    <label> 
        Nome: <br/>
        <input type="text" name="nome"/>
    </label>
    <br/>
    <br/>
    
    <label> 
        Email: <br/>
        <input type="text" name="email"/>
    </label>
    <br/>
    <br/>

    <label> 
        Idade: <br/>
        <input type="text" name="idade"/>
    </label>
    <br/>
    <br/>

    <input type="submit" value="Iniciar sessão">


    <br/><br/><a href='../index.php'> Menu Principal</a>