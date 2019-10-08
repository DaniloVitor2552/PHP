<?php 
    
//Configura o padrão de regionalidade para o sistema
    setlocale(LC_ALL, "pt-BR");

    /*  
        Alternativas para importar um arquivo em php
        
        include()
        
        include_once **Obs é o mais indicado pois, alem de incluir o arquivo, tambem realiza
        a validação para não incluir mais de uma vez
       
       require()
        
        require_once() **Obs é o mais indicado pois, alem de incluir o arquivo, tambem realiza
        a validação para não incluir mais de uma vez
    
    */
        /*     Import do arquivo de funcoes         */

        /*if(!file_exists(require_once('MODULOS/funcoes.php')));
            require_once('MODULOS/funcoes.php');*/

        
        //Declaração das constantes do sistema
        
        //define() ou const
        // EX: const "ERR_EMPTY", "Por favor digite todos os valores para realizar o calculo!"
        
        define("ERR_EMPTY", "Por favor digite todos os valores para realizar o calculo!");
        define("ERR_NOT_NUMERIC", "Por favor digite somente números nas caixas!");
        define("ERR_DIV_ZERO", "NÃO É POSSIVEL REALIZAR A DIVISÃO POR ZERO (0)!");

        
        
        
    //Função para realizar o calculo das 4 operações\\
    function calcular($numero1, $numero2, $opcao)
    {
        $valor1 = (float) $numero1;
        $valor2 = (float) $numero2;
        $operacao = (string) $opcao;
        
        
        global $chkSomar;
        global $chkSubtrair;
        global $chkDividir;
        global $chkMultiplicar;

        
        
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
                    break;

            }    
        if(isset($resultado))
            return round($resultado) ;
        else
            return false;
    }


?>