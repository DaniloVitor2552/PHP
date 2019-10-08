<?php

/*
    int/integer - inteiro
    float - real
    double - numerico (inteiro e real) com capacidade maior que o int e o float 
    string - caracter
    bool/boolean - true ou false
    array - matriz de dados

*/
    //Declaracao das variaveis do projeto
    $valor1 = (double) 0;
    $valor2 = (double) 0;
    
    //retorna o tipo de dados das variaveis
    echo(gettype($valor1));

    


    if(isset($_GET['btcalcular']))
    {
        $valor1 = $_GET['txtvalor1'];
        $valor2 = $_GET['txtvalor2'];
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <title>
            Exercicio 3
        </title>
        
        <style>
            
            *{

             margin: 0px;
             padding: 0px;

             }
            
            #total{
                width:600px;
                height:523px;
/*              background-color:darkcyan;*/
                border: solid 1px;
                margin-right: auto;
                margin-left: auto;
                margin-top: 10px;
                
            }
            
            #cabecalho{
                width: 100%;
                height: 125px;
                background-color: yellowgreen;
                border: solid 1px;
                text-align: center;
                
            }
            
            #valores{
                width: 100%;
                height: 150px;
/*                background-color: forestgreen;*/
                border: solid 1px;
                padding-left: 150px;
                box-sizing: border-box;
                  
            }
           
            
             #resultado{
                width: 298px;
                height: 244px;;
                background-color: yellow;
                border: solid 1px;
                float: left;
                
            }
            #operacoes{
                width: 298px;
                height: 244px;;
/*                background-color: dodgerblue;*/
                border: solid 1px;
                float: left;
            }
            
            input{
                margin: 10px;
               
                
            }
            
        </style>
    </head>
    <body>
        <div id="total">
            <div id="cabecalho">
                <h1>
                    Calculadora Simples
                </h1>
            </div>
            
            <form name="frmexercicio3" method="get" action="exercicio3.php">
                <div id="valores">

                        Valor 1: 
                    <input type="text" name="txtvalor1" value="<?php echo($valor1) ?>" size="12" maxlength="12">
                        <br>
                        Valor 2:
                    <input type="text" name="txtvalor2" value="<?php echo($valor2) ?>" size="12" maxlength="12">
                        <br>


                     
                </div>
                <div id="operacoes">
                    <input type="radio" name="rdooperacao" value="adicao">Somar
                    <br>
                    
                    <input type="radio" name="rdooperacao" value="subtracao" >Subtrair
                    <br>
                    
                    <input type="radio" name="rdooperacao" value="multiplicacao"
                    >Multiplicar 
                    <br>
                    
                    <input type="radio" name="rdooperacao" value="dividir"
                    >Dividir
                    <br>
                    
                    <input type="submit" name="btcalcular" value="Calcular">
                </div>


                <div id="resultado">
                    <h1>0</h1>
                </div>
            </form>
        </div>
    </body>
</html>