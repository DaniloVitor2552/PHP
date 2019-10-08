<?php
    //Configura a regionalidade
    setlocale(LC_ALL, "pt-BR");

/*
        Tipos de dados:
    int / integer - inteiro
    float - numeros reais
    double - numerico(inteiro e real) com capacidade maior que o int e o float
    string - caracteres
    bool/boolean - true ou false
    array - matriz de dados
    object - objeto de dados
    
    Declarar uma vaiavel:
    Ex:$NomeDaVariavel = (TipoDeDado) "";
    
    gettype() - Retorna o tipo de dados de uma variavel
    settype() - Converte o tipo de dados de uma variavel
    
    Ex:
        //retorna o tipo de dados das variaveis
        echo(gettype($valor1));

        //Converte tipos de dados das variaveis
        settype($valor1,"int");
*/
    //declaração das variaveis do sistema
    $valor1 = (float) 0;
    $valor2 = (float) 0;
    $resultado = (double) 0;
    $operacao = (string) "";

//Declaração das constantes do sistema
    //define() ou const
    //Ex: const ERR_EMPTY = "Mensagem"
    define("ERR_EMPTY","Por favor preencha todos os valores para realizar o calculo!");
    define("ERR_NOT_NUMERIC","Por favor digite apenas numeros nas caixas!");
    define("ERR_DIV_ZERO","Não é possivel realizar a divisão por zero(0)!");

    //valida se o botão foi clicado
    if(isset($_POST['btncalc']))
    {
        //Resgatando dados fornecidos pelo usuario
        $valor1 = str_replace(",",".", $_POST['txtn1']);
        $valor2 = str_replace(",",".", $_POST['txtn2']);
        
        ///str_replace() - Localiza um caracter e substitui por outro   Ex: str_replace("o que vai ser substituido", "pelo que vai substituir" onde ele vai ser substituido)
        //strtoupper() - Converte todo o conteudo em MAIUSCULO
        //strtolower() - Converte todo o conteudo em minusculo
        
        
        //Tratamento para campo vazio
        if($valor1 == "" || $valor2 == "" || !isset($_POST['rdocalc']))
            echo(ERR_EMPTY);
        //Tratamento para entrada de dados apenas de numeros
        elseif(!is_numeric($valor1) || !is_numeric($valor2))
            echo(ERR_NOT_NUMERIC);
        else
        {
            $operacao = strtoupper($_POST['rdocalc']);
            
            //Realiza os calculos da operação
            if($operacao == "SOMAR")
                $resultado = $valor1 + $valor2;
            elseif ($operacao == "SUBTRAIR")
                $resultado = $valor1 - $valor2;
            elseif ($operacao == "MULTIPLICAR")
                $resultado = $valor1 * $valor2;
            elseif ($operacao == "DIVIDIR")
            {
                if($valor2 == 0)
                    echo(ERR_DIV_ZERO);
                else
                $resultado = $valor1 / $valor2;
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Calculadora simples
        </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div id="caixa_principal">
            <form name="frmformulario" method="post" action="exercicio.php">
                <div id="caixa_calculadora">
                    <h1>Calculadora Simples</h1>
                </div>

                <div id="caixa_valores">
                        Valor1:
                        <input type="text" name="txtn1" value="<?=$valor1?>" size="30" maxlength="40">
                        <br>
                        <br>
                        Valor2:
                        <input type="text" name="txtn2" value="<?=$valor2?>" size="30" maxlength="40">
                </div>

                <div id="caixa_contas">
                        <input type="radio" name="rdocalc" value="somar">Somar
                        <br>
                        <br>
                        <input type="radio" name="rdocalc" value="subtrair">Subtrair
                        <br>
                        <br>
                        <input type="radio" name="rdocalc" value="multiplicar">Multiplicar
                        <br>
                        <br>
                        <input type="radio" name="rdocalc" value="dividir">Dividir
                        <br>
                        <br>
                        <input type="submit" name="btncalc" value="Calcular">
                </div>

                <div id="caixa_resultado">
                    <h1>Resultado: <?=round($resultado, "2");
                        //round() permite configurar a quantidade de casas decimais
                        ?>
                    </h1>
                </div>
            </form>
        </div>
    </body>
</html>