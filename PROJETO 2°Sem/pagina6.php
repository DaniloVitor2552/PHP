<?php
    //Import no arquivo de conexão
    require_once('bd/conexao.php');
    
    //Chamada para estabelecer a conexão com o Banco de Dados
    $conexao = conexaoMysql ();
    
//    var_dump($conexao);
    
    
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>
           Frajola´s
        </title>
        <link rel="stylesheet" type="text/css" href="css/style6.css">
		<script src="jsmascara/js/modulo.js"></script>
    </head>
    
    <body>
        <!--  AREA DO MENU          -->
        <header id="caixa_menu">
     
            <nav id="area_menu">
                <div id="logo">

                </div>

                <ul id="menu" class="center">
                       <li class="menu_itens">
                           <a href="projeto.php"> <h3>Home</h3></a> 
                       </li>
                       <li class="menu_itens">
                           <a href="pagina2.php"> <h3>Sobre</h3></a>
                       </li>   

                       <li class="menu_itens">
                           <a href="pagina3.php"> <h3>Curiosidades</h3></a>
                       </li>   
                       <li class="menu_itens">
                           <a href="pagina4.php"> <h3>Produto do Mês</h3></a>
                       </li>   
                       <li class="menu_itens">
                           <a href="pagina5.php"><h3>Promoções</h3></a>
                       </li>
                    
                       <li class="menu_itens">
                           <a href="pagina6.php"><h3>Contatos</h3></a>
                       </li>
                    
                       <li class="menu_itens">
                           <a href="pagina7.php"><h3>Lojas</h3></a>
                       </li>
                </ul>  
                
                <div id="area_input">
                    <form name="formulario">
                        <div id="area_usuario">
                             Usuario:<br><input type="text" name="txtusuario" maxlength="20" id="usuario">
                        </div>
                        
                        <div id="area_senha">
                            Senha: <br> <input type="text" name="txtsenha" maxlength="20" id="senha">
                        </div> 
                        
                        <div id="botao_cadastro">
                            <input type="submit" name="btnok" value="OK" size="5">
                        </div>
                    </form>
                </div>
            </nav>    
        </header>
        
        <section class="conteudo center">
            <div id="area_contatos">
                <form name="frmformulario" method="post" action="bd/inserir.php">
        
                    <!-- Área do cadastro -->
        <div id="caixa_cadastro" class="center">
            <div id="titulo_cadastro">
                <h1>Entre em Contato Conosco</h1>
            </div>
            <div class="caixa_informacoes">
                <div class="subtitulo_informacoes">
                    <h2>Nome: </h2>                    
                </div>
                <div class="caixa_input">
                    <input placeholder="Digite seu nome..." type="text" name="txtnome" value="<?= @$nome?>" maxlength="20" onkeypress="return validarEntrada(event,'numeric');" required/>
                </div>
            </div>
            <div class="caixa_informacoes">
                <div class="subtitulo_informacoes">
                    <h2>Telefone: </h2>
                </div>
                <div class="caixa_input">
                    <input placeholder="(000)0000-0000..." id="telefone" type="text" name="txttelefone" value=""
                    onkeypress="return mascaraFone(this,event);" required maxlength="13">
                </div>
            </div>
            <div class="caixa_informacoes">
                <div class="subtitulo_informacoes">
                    <h2>Celular: </h2>
                </div>
                <div class="caixa_input">
                    <input placeholder="Infome seu número de celular..." type="text" name="txtcelular" value="" onkeypress="return validarEntrada(event, 'string');" required maxlength="12">
                </div>
            </div>
            
            <div class="caixa_informacoes">
                <div class="subtitulo_informacoes">
                    <h2>Sexo: </h2>
                </div>
                <div class="caixa_input" id="input_radio">
                    <input type="radio" name="rdosexo" value="F" required>Feminino
                    <input type="radio" name="rdosexo" value="M">Masculino
                </div>
            </div>
            
            <div class="caixa_informacoes">
                <div class="subtitulo_informacoes">
                    <h2>Email: </h2>
                </div>
                <div class="caixa_input">
                    <input placeholder="Digite seu Email..." type="email" name="txtemail" value="" required maxlength="20">
                </div>
            </div>
            <div class="caixa_informacoes">
                <div class="subtitulo_informacoes">
                    <h2>Home Page: </h2>
                </div>
                <div class="caixa_input">
                    <input placeholder="Digite sua Home Page..." type="text" name="txthomePage" value=""  maxlength="20">
                </div>
            </div>
            
            <div class="caixa_informacoes">
                <div id="link_face" class="subtitulo_informacoes">
                    <h2>Link Facebook: </h2>
                </div>
                <div class="caixa_input">
                    <input placeholder="Digite seu link do Facebook..." type="text" name="txtlink" value="" maxlength="20">
                    
                </div>
            </div>
            
            <div class="caixa_informacoes">
                <div id="sugestao" class="subtitulo_informacoes">
                    <h2>Sugestão  /Crítica </h2>
                </div>
                <div class="caixa_input">
                    <select name="sltsugestao">
                        <option value="S" >
                            Sugestão
                        </option>
                        
                        <option value="C" >
                            Crítica
                        </option>
                    </select>
                    
                </div>
            </div>
            
            <div id="caixa_obs" class="caixa_informacoes">
                <div id="obs" class="subtitulo_informacoes">
                    <h2>Obs: </h2>
                </div>
                <textarea placeholder="Deixe uma observação..." name="txtobs" required maxlength="45"></textarea>
            </div>
            
            <div class="caixa_informacoes">
                <div class="subtitulo_informacoes">
                    <h2>Profissão: </h2>
                </div>
                <div class="caixa_input">
                    <input placeholder="Digite sua profissão..." type="text" name="txtprofissao" value="" required maxlength="12">
                </div>
            </div>
            
            <div id="caixa_botao">
                <input type="submit" name="btnsalvar" value="Salvar">
            </div>
        </div>
            
        </form>
            </div>
        </section>
        
        <!--   Area do rodape  -->
            
        <footer id="rodape">
            
            <div id="botao_sistema">
                <input type="submit" name="btnok" value="Sistema Interno" size="200">
            </div>

            <div id="endereco">
                <h2>Av. Luis Carlos Berrini, nº 666. </h2>
            </div>
            
            <div id="app">
                <div id="app_image">
                
                </div>
                
                <div id="baixe_app">
                    <input type="submit" name="btnok" value="Baixe o Aplicativo" size="20">
                </div>
            </div>
            
        </footer>
    </body>
</html>