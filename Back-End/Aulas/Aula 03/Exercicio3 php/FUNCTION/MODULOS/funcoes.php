<?php
    //Configura o padrão de regionalidade para o sistema
    setlocale(LC_ALL, "pt-BR");
    
    //Declaração das constantes do sistema
    //define() ou const
    //Ex: const ERR_EMPTY = "Mensagem"
    define("ERR_EMPTY","Por favor preencha todos os valores para realizar o calculo!");
    define("ERR_NOT_NUMERIC","Por favor digite apenas numeros nas caixas!");
    define("ERR_DIV_ZERO","Não é possivel realizar a divisão por zero(0)!");
    
    //Função para realizar os calculos das 4 operações
    function calcular($numero1, $numero2, $opcao)
    {
        $valor1 = (float) $numero1;
        $valor2 = (float) $numero2;
        $operacao = (string) $opcao;
        
        global $chkSomar;
        global $chkSubtrair;
        global $chkMultiplicar;
        global $chkDividir;
        
            switch ($operacao)
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
        if(isset($resultado))
            return round($resultado,2);
        else
            return false;
    }
?>