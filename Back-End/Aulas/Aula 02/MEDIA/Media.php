<?php
    
    //Inicia a variavel media para nao trazer o erro de variavel indefinida, poderiamos fazer o iset na variavel ou utilizar o @(omitir a mensagem de erro)
    $media = 0;
    
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
        $media = ($nota1+$nota2+$nota3+$nota4)/4;
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
            Aula 2
        </title>
        
        <style>
            #total{
                width:600px;
                height: 530px;
                background-color: aqua;
                 margin-right: auto;
                margin-left: auto;
                text-align: center;
                border:solid 1px;
                
            }
            
            #cabecalho{
                width: 100%;
                height: 125px;
                background-color: chartreuse;
                border:solid 1px;
                
            }
            
            #notas{
                width: 100%;
                height: 300px;
                background-color: white;
                border:solid 1px;
                
                
            }
            
            #media{
                width: 100%;
                height: 100px;
                background-color: chartreuse;
                border:solid 1px;
                
            }
            
           *{

             margin: 0px;
             padding: 0px;

             }
            
            input{
                margin: 10px;
                padding-top: 5px;
            }
            

        </style>
    </head>
    
    <body>
        <div id="total">
            <div id="cabecalho">
                <h1>
                    Cálculo de Médias
                </h1>
            </div>
             
            
            <div id="notas">
                <form name="frmmedia" method="get" action="media.php">
                
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
                    <a href="Media.php">
                        Novo Cálculo
                    </a>
                </span>
            </div>
          
            <div id="media">
               <h1>A media é: <?php echo($media); ?></h1>
            
            </div>
        </div>
    </body>
</html>