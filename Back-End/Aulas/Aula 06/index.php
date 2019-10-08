<?php  

    if(isset($_POST['btncalcular']))
    {
        $valor = (integer) 0;
        $cont = (integer) 0;
        $valor = $_POST['txtvalor'];
        
        echo("-------WHILE-----------<br>");
        while($cont <= $valor)
        {
            echo($cont . "<br>");
            // $cont++;
            // $cont = $cont + 1;
            $cont +=1;
        }
        
        echo("===========FOR===============<br>");
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
            Aula 06
        </title>
    </head>
    
    <body>
        <form name="frmrepeticao" method="post" action="index.php"><br>
            Digite um valor:<input type="text" name="txtvalor" value=""><br>
            <input type="submit" name="btncalcular" value="Calcular"><br>

        
        </form> 
    </body>
</html>

