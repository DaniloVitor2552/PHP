<?php
    //Configura o padrão de regionalidade para o sistema
    setlocale(LC_ALL, "pt-BR");
/*
    Variaveis
        Tipos de dados
            int/integer - inteiro
            float - real
            double - numerico (inteiro e real) com capacidade maior que o int e o float 
            string - caracter
            bool/boolean - true ou false
            array - matriz de dados
            objetxt - objeto


    //Declaracao das variaveis do projeto
    //Ex: $valor = (string) "";

    //gettype() - retorna o tipo de dados de uma variavel
      settype() - converte o tipo de dados de uma variavel
      
      /*retorna o tipo de dados das variaveis
      
      ex:
        echo(gettype($valor1));

        settype($valor1, "int");
        echo(gettype($valor1));
    
    */
    
    // Declaração das variaveis do sistema

    $valor1 = (float) 0;
    $valor2 = (float) 0;
    $resultado = (double) 0;
    $operacao = (string) "";

    $chkSomar = (string) "";
    $chkSubtrair = (string) "";
    $chkMultiplicar = (string) "";
    $chkDividir = (string) "";

    //Declaração das constantes do sistema
        
        //define() ou const
        // EX: const "ERR_EMPTY", "Por favor digite todos os valores para realizar o calculo!"
        
        define("ERR_EMPTY", "Por favor digite todos os valores para realizar o calculo!");
        define("ERR_NOT_NUMERIC", "Por favor digite somente números nas caixas!");
        define("ERR_DIV_ZERO", "NÃO É POSSIVEL REALIZAR A DIVISÃO POR ZERO (0)!");



    if(isset($_POST['btcalcular']))
    {
        //Resgatando dados fornecidos pelo usuario
        $valor1 = str_replace(",",".",$_POST['txtvalor1']);
        $valor2 = str_replace(",",".",$_POST['txtvalor2']);


        echo($operacao);
        
        //str_replace() - localiza um caracter e substitui por outro
        //strtoupper() - converte o conteudo em MAIUSCULO 
        //strtolower() - converte o conteudo em minusculo


        
        //Tratamento para campos vazios
        if($valor1 == "" || $valor2 == ""  || isset($_POST['rdooperacao'])==false)
            echo(ERR_EMPTY);
        
        //Tratamento para entrada de dados, somente numeros
        elseif(!is_numeric($valor1) || !is_numeric($valor2))
            echo(ERR_NOT_NUMERIC);
        
        else
        {
            $operacao = strtoupper($_POST['rdooperacao']);
            
        //Realiza os calculos da operacao
            
        
            switch($operacao)
            {
                case "SOMAR":
                    $resultado = $valor1 + $valor2;
                    $chkSomar = "checked";
                    break;
                    
                case "SUBTRAIR":
                    $resultado = $valor1 - $valor2;
                    $chkSubtrair = "checked";
                    break;
                    
                case "MULTIPLICAR":
                    $resultado = $valor1 * $valor2;
                    $chkMultiplicar = "checked";
                    break;
                    
                case "DIVIDIR":
                    if($valor2 == 0)
                        echo(ERR_DIV_ZERO);
                    else
                        $resultado = $valor1 / $valor2;
                    
                    $chkDividir = "checked";
                    break;
                    
                default:
                    echo(ERR_EMPTY);


            }
            
//        if($operacao == "SOMAR")
//            $resultado = $valor1 + $valor2;
//        elseif ($operacao == "SUBTRAIR")
//        
//            $resultado = $valor1 - $valor2;
//        elseif ($operacao == "MULTIPLICAR")
//        
//            $resultado = $valor1 * $valor2;
//        elseif ($operacao == "DIVIDIR")
//        {
//            if($valor2 == 0)
//                echo(ERR_DIV_ZERO);
//            else
//             $resultado = $valor1 / $valor2;
//        }
           
        
        }
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
                font-size: 20px;
                  
            }
           
            
             #resultado{
                width: 298px;
                height: 209px;;
                background-color: yellow;
                border: solid 1px;
                float: left;
                font-size: 150px;
                padding-top: 35px;
                
                
            }
            #operacoes{
                width: 298px;
                height: 244px;;
/*                background-color: dodgerblue;*/
                border: solid 1px;
                float: left;
                font-size: 20px;
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
            
            <form name="frmexercicio3" method="post" action="exercicio3.php">
                <div id="valores">

                        Valor 1: 
                    <input type="text" name="txtvalor1" value="<?php echo($valor1) ?>" size="12" maxlength="12">
                        <br>
                        Valor 2:
                    <input type="text" name="txtvalor2" value="<?php echo($valor2) ?>" size="12" maxlength="12">
                        <br>


                     
                </div>
                <div id="operacoes">
                    <input type="radio" name="rdooperacao" value="somar"<?=$chkSomar?> >  Somar
                    <br>
                    
                    <input type="radio" name="rdooperacao" value="subtrair" <?=$chkSubtrair?> >Subtrair
                    <br>
                    
                    <input type="radio" name="rdooperacao" value="multiplicar" <?=$chkMultiplicar?> 
                    >Multiplicar 
                    <br>
                    
                    <input type="radio" name="rdooperacao" value="dividir" <?=$chkDividir?> 
                    >Dividir
                    <br>
                    
                    <input type="submit" name="btcalcular" value="Calcular">
                </div>


                <div id="resultado">
                             
                    <?=round($resultado, "2") ?>
                    <!-- round() permite configurar a quantidade de casas decimais depois da virgula-->
                </div>
            </form>
        </div>
    </body>
</html>
    