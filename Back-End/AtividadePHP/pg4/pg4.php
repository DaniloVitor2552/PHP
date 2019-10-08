<?php
	setlocale(LC_ALL, "pt-BR");

	//Declarando variaveis//
	

	$inicial = "";
	$final = "";
	$pares = "";
	$impares = "";
	   

	if(isset($_GET['btncalcular'])){
		
		//Resgata os dados das variaveis//
		
		$inicial = $_GET['inicial'];
        settype($inicial, "int" );
		
		$final = $_GET['final'];
        settype($final, "int");
		
		if($inicial != "" && $final != ""){
			if(is_numeric($inicial) && is_numeric($final)){
            
				for($teste = $inicial; $teste<=$final;$teste++){
					if($teste % 2 ==0){
						$pares .= $teste;
						$pares .= "<br>";
					}else if($teste % 2 > 0){
						$impares .= $teste;
						$impares .= "<br>";
						
					}else if($inicial == $final){
                        echo("Número inicial não pode ser igual ao final!");
                    }
				}
			}else{
				echo("Preencha os campos somente com números!!");
			}
			
			
		}else{
			echo("Favor preencher os campos corretamente!!");
		}
	}
	
     
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
           Impar ou par
        </title>
        
    <link rel="stylesheet" type="text/css" href="css/parimpar.css">
        
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
            
            <div id="conteudo1">
                <div id="parte_cima">
                    <h1>Par ou Ímpar</h1>
                </div>
                
                <form method="get" action="pg4.php">
                <div id="area_calculos">
					<br>
                   	N° Inicial:
                    <select name="inicial">
						<option value="" selected>Selecione um numero inicial.</option>
                        <?php
						  for($a = 1; $a <= 500; $a++){ 
                        ?> <option name="" value="<?php echo($a); ?> "> <?php echo($a); ?></option>
                              
                          <?php } ?>
						
						
						
					</select>
					<br>
                     N° Final:
					<select name="final">
						<option value="" selected>Selecione um numero final.</option>
						<?php
						  for($a = 100; $a <= 1000; $a++){ ?>
                            <option name="" value="<?php echo($a);  ?>"> <?php echo($a); ?> </option>      
                          <?php } ?>
						?>
					</select>
					
					
                    
                    <input class="botao" type="submit" name="btncalcular" value="Calcular" size="15">
                    
                </div>
                </form>
                
                <div id="area_numeros">
                   
                    <div id="resultado_par">
                        <h1>Números Pares</h1>
						<br>
						<?php
						  echo($pares);	
						?>
                    </div>
                    
                    <div id="resultado_impar">
                        <h1>Números Ímpares</h1>
						<br>
						<?php
				            echo($impares);
						?>
						<br>
						<br>
						<?php?>
                    </div>
                    
                </div>
                   
                
            </div>
        </div>
    </body>
</html>