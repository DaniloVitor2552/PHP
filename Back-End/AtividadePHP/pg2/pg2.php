<?php
    //Configura o padrão de regionalidade para o sistema
    setlocale(LC_ALL, "pt-BR");

    require_once('../Modulos/funcao.php');
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
        
            
        
            
        $resultado = calculadora($operacao, $valor1, $valor2);  
          
        
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
           Calculadora
        </title>
        
    <link rel="stylesheet" type="text/css" href="../home/css/style.css">
        
    <link rel="stylesheet" type="text/css" href="css/calculadora.css">
    </head>
    
    <body>
        <div id="total">
            <div id="caixa_menu">
                
                <div id="icone">
                    <div id="menuzin">
                        
                        <ul id="menu_vertical">
                            <li class="itens_menu">
                                <a href="../home/home.php" >HOME</a>
                            </li>

                            <li class="itens_menu">
                               <a href="../pg1/pg1.php" >MÉDIA</a>
                            </li>

                            <li class="itens_menu">
                               <a href="../pg2/pg2.php" >CALCULADORA</a> 
                            </li>

                            <li class="itens_menu">
                               <a href="../pg3/pg3.php" >TABUADA</a> 
                            </li>

                            <li class="itens_menu">
                               <a href="../pg4/pg4.php" >ÍMPAR OU PAR</a>
                            </li>

                        </ul>  
                        

                    </div>  
                </div>   
            
            </div>
            
            <div id="conteudo">
                
                
                
     <div id="total1">
            <div id="cabecalho">
                <h1>
                    Calculadora Simples
                </h1>
            </div>
            
            <form name="frmexercicio3" method="post" action="pg2.php">
                <div id="valores">

                        Valor 1: 
                    <input type="text" name="txtvalor1" value="<?php echo($valor1) ?>" size="12" maxlength="12">
                        <br>
                        Valor 2:
                    <input type="text" name="txtvalor2" value="<?php echo($valor2) ?>" size="12" maxlength="12">
                        <br>


                     
                </div>
                <div id="operacoes">
                    <input type="radio" name="rdooperacao" value="somar">Somar
                    <br>
                    
                    <input type="radio" name="rdooperacao" value="subtrair" >Subtrair
                    <br>
                    
                    <input type="radio" name="rdooperacao" value="multiplicar"
                    >Multiplicar 
                    <br>
                    
                    <input type="radio" name="rdooperacao" value="dividir"
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
                
                
                
            </div>
        </div>
    </body>
</html>