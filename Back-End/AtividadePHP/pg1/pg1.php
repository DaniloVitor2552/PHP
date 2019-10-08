<?php
    
    //Inicia a variavel media para nao trazer o erro de variavel indefinida, poderiamos fazer o iset na variavel ou utilizar o @(omitir a mensagem de erro)
    $media = 0;


    //Recebendo função

    require_once('../Modulos/funcao.php');

    
    #Comentário
    //Comentario
    /*
    
    Comentario
    
    */

    /*$_GET[] - RESGATA OS dados enviados pelo formulario via GET
    
    $_POST[] - resgata os dados enviados pelo formulario via POST 
    
    isset() - verifica a existencia de um elemento, uma variavel ou um objeto
    */

    if(isset($_GET['btncalcular']))
    {
        //Resgata os dados digitados no formulario
        $nota1 = $_GET['txtnota1'];
        $nota2 = $_GET['txtnota2'];
        $nota3 = $_GET['txtnota3'];
        $nota4 = $_GET['txtnota4'];
        
        //Tratamento caixa vazia
        if($nota1=="" || $nota2=="" || $nota3=="" || $nota4=="")
        {
            echo("Erro: Favor digitar todos os valores!");
        }else{
            if(is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4))
            {
        
        
        //Calcula a media
                
        
        $media = media($nota1,$nota2, $nota3, $nota4);
                
                
       /* 
        echo() - exibe um dado na tela
        print_r() - exibe um dado na tela
        var_dump() - exibe um dado na tela, porem exibe dados tecnicos da variavel, do objeto
        */
                
        }else
        {
            /*echo("
                <font color='red'>
                    Erro: Favor digitar somente numeros!
                    ");
                    */
                
                /*echo("
                <span style='color:blue;'>
                    Erro: Favor digitar somente numeros!
                    </span>");
                    */
                
                echo("
                <script>
                    alert('Erro: Favor digitar somenete numeros!');
                    </script>
                    ");
                    
         }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
           Página 1
        </title>
        
    <link rel="stylesheet" type="text/css" href="../home/css/style.css">
        
    
            <!--   CSS Media     -->
    <link rel="stylesheet" type="text/css" href="css/Style_Media.css">
    
  
   
        
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
                <div id="caixa_media">
                    <div id="cabecalho">
                <h1>
                    Cálculo de Médias
                </h1>
            </div>
             
            
            <div id="notas">
                <form name="frmmedia" method="get" action="pg1.php">
                
                 Nota 1:
            
            <input type="text" name="txtnota1" value="<?php echo(@$nota1) ?>" size="5" maxlength="3">
            <br>
                 Nota 2:
            <input type="text" name="txtnota2" value="<?php echo(@$nota2) ?>" size="5" maxlength="3">
                <br>
                 Nota 3:
            <input type="text" name="txtnota3" value="<?=@$nota3 ?>" size="5" maxlength="3">
                <br>
                 Nota 4:
            <input type="text" name="txtnota4" value="<?=@$nota4 ?>" size="5" maxlength="3">
                <br>
                    
                 <input type="submit" name="btncalcular" value="Calcular">
                 </form>
                
                <span>
                    <a href="pg1.php">
                        Novo Cálculo
                    </a>
                </span>
            </div>
          
            <div id="media">
               <h1>A media é: <?php echo($media); ?></h1>
            
            </div>
                </div>
            </div>
        </div>
    </body>
</html>