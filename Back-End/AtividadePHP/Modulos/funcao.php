<?php
    //Funcao Media//

    function media($nota1, $nota2, $nota3, $nota4){
        $media = ($nota1 + $nota2 + $nota3 + $nota4) /4;
        return $media;
    }

    // Funcao Calculadora//

    function calculadora($operacao, $valor1, $valor2){
        
        //Realiza os calculos da operacao
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
        
        return $resultado;
    }

    // Funcao Tabuada // 

    function tabuada($contador, $tabuada){
        $resultado = "";
        if( $contador != ""  && $tabuada != ""){
            if(is_numeric($contador) && is_numeric($tabuada)){
                for($i = 0; $i <= $contador; $i++){
                    
                    $resultado .= $tabuada . " x " . $i. " = ";
                    $resultado .= $tabuada * $i;
                    $resultado .= "<br>";      
                }
                    
                
            }else{
                echo("Digite apenas numeros!");
            }
            
            
        }else {
            echo("Precisa preencher os campos corretamente!");
        }
        
         return $resultado;
    }

   
    




?>

    