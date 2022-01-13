
<h2>Lista de Nomes</h2>
<form method='post'>
      <input type='text' name="nome"/>
      <input type='submit' value="Adicionar" name="Adicionar"/>
      <input type='submit' value="Limpar" name="Limpar"/>
      
</form>





<?php
    
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $adicionar = filter_input(INPUT_POST, "Adicionar");
    $limpar = filter_input(INPUT_POST, "Limpar");
    
    
    
    if($nome && $adicionar){
        $string_add = file_get_contents("listaDeNomes.txt");
        $string_add .= $nome;
        file_put_contents("listaDeNomes.txt", $string_add."\n");
        $lista_quebrada = explode("\n", $string_add);

        echo "<ul>";
        foreach($lista_quebrada as $i){
            echo "<li>".$i."</li><br/>";
        }

        echo "</ul>";

        //$_SESSION['qtd_nome'] = count($lista_quebrada);      
       
        echo count($lista_quebrada);
      
        
    }

    if ($limpar){
        //echo "<h1>"."Mostrei aqui!"."</h1>";
        file_put_contents("listaDeNomes.txt", '');
        //$_SESSION['qtd_nome'] = 0;
    }
   

    




    

?>
