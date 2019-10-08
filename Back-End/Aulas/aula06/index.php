<?php
    
    if(isset($_POST['btncalcular']))
    {
        $valor = (integer) 0;
        $cont = (integer) 0;        
        
        $valor = $_POST['txtvalor'];
        
        echo("--------WHILE--------<br>");
        while($cont <= $valor)
        {
            echo($cont . "<br>");
//            $cont++;
//            $cont = $cont+1;
            $cont +=1;
        }
        
        echo("--------FOR--------<br>");
        for($cont=0; $cont <= $valor; $cont++)
        {
            echo($cont . "<br>");
        }
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>
            Aula de Estrutura de repetição
        </title>
    </head>
    <body>
        <form name="frmrepeticao" method="post" action="index.php">
            Digite um valor:
            <input type="text" name="txtvalor" value="">
            <br>
            <input type="submit" name="btncalcular" value="Calcular">
        </form>
    </body>
    
</html>