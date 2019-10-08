<?php
    setlocale(LC_ALL, "pt-BR");
    
    require_once('../Modulos/funcao.php');
    //Declaração de Variavel//
    $contador = "";
    $tabuada = "";
    $resultado = "";
    


    if(isset($_GET['btnCalcular'])){
       
        $contador = $_GET['contador'];
        
        $tabuada = $_GET['tabuada'];
        
        $resultado = tabuada($contador, $tabuada, $resultado);
        
    }
?>




<!DOCTYPE html>
<html>
    <head>
        <title>
           Tabuada
        </title>
        
    <link rel="stylesheet" type="text/css" href="css/tabuada.css">
        
    <link rel="stylesheet" type="text/css" href="../home/css/style.css">
        
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
                    
                <div id="caixa_tabuada">
                    <h1>Tabuada</h1>
                    <br>
                    <form name="frmtabuada" method="get" action="pg3.php">
                        <div id="caixa_calc">
                            Tabuada:<input type="text" name="tabuada" value="" size="12" maxlength="12">

                            <input class="botao" type="submit" name="btnCalcular" value="Calcular" size="10">
                            <br>
                            <br>

                            Contador:<input type="text" name="contador" value="" size="12" maxlength="12">



                        </div>
                        
                    </form>
                    
                    <div id="caixa_result">
                        <?=
                        
                        $resultado;
                        ?>
                        
                    </div>
                    
                </div> 
            </div>
        </div>
    </body>
</html>