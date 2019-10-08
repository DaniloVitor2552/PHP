<?php

$nome = $_GET['txtnome'];
echo($nome);


?>




<!DOCTYPE html>
<html>
    <head>
        <title>
            Aula 01 -PHP
        </title>
    </head>
    
    <body>
        
        <!-- NAME - NOME DO ELEMENTO NO HTML.
        method - existe apenas 2 metodos, get e post.
        Get - envia os dados digitados no formulario para a url da pagina.
        
        Post - envia os dados digitados no formulario em cache no navegador.

        action - para onde serão enviados os dados !-->
        
        <form name="frmexercicio1" method="get" action="Exercicio1.php">
            Nome:
            <input type="text" name="txtnome" value="" size="50">
            <input type="submit" name="btnok" value="Ok">
        </form>
    </body>
</html>