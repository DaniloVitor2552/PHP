<?php
    
    //Verifica se houve a ação do POST pelo formulário//
    if(isset($_POST['btnsalvar'])){
        
        require_once('conexao.php');
        
        //Chama a função que abre a conexao com o BD
        $conexao = conexaoMysql();
        
      // Resgatando os dados enviados pelo formulario//
        $nome = $_POST['txtnome'];
        $telefone = $_POST['txttelefone'];
        $celular = $_POST['txtcelular'];
        $email = $_POST['txtemail'];
        //explode() - percorre uma string de dados, localiza um caracter coringa e quebra em array com indices para cada conteudo// 
		
		$homePage = $_POST['txthomePage'];
		$facebook = $_POST['txtlink'];
		$sugestao = $_POST['sltsugestao'];
        $sexo = $_POST['rdosexo'];
        $mensagem = $_POST['txtobs'];
		$profissao = $_POST['txtprofissao'];
        
        $sql = "insert into tblfaleconosco (nome, telefone, celular, 
                            email, homePage, facebook, sugestao, mensagem , sexo, profissao)
                            
                            values ('".$nome."', '".$telefone."', '".$celular."', '".$email."', '".$homePage."', '".$facebook."', '".$sugestao."','".$mensagem."', '".$sexo."','".$profissao."')     
        ";
        
        
        
        //Executa um script no banco de dados (se o script der certo iremos redirecionar para a pagina de cadastro, senao mostrar msg de erro)//
        if(mysqli_query($conexao, $sql)){
           
            //Redireciona para uma determinada página
            header('location: ../pagina6.php');   
        }
		else{
            echo("erro ao executar o script");
        }
           
        
    }

?>