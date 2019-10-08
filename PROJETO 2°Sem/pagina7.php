<!DOCTYPE html>
<html lang="pt-br">
	<head>
        <meta charset="utf-8">
		<title>
			Frajola´s
		</title>
		
		<link rel="stylesheet" type="text/css" href="css/style7.css">
	</head>
	<body>
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
                           <a href=pagina7.php><h3>Lojas</h3></a>
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
			<div id="area_slogan">
				<div id="titulo_lojas" class="center" >
					Nossas Lojas
				</div>
			</div>
			
			<div id="area_lojas">
				<div class="lojas">
					<img src="img/lojamaps.png" alt="loja1" width="550" height="500">
				</div>
				
				<div class="lojas">
					<img src="img/lojamaps1.png" alt="loja1" width="550" height="500">
				</div>
				
				<div class="endereco">
					<h4>Frajola´s Pizzaria</h4>
					&nbsp;&nbsp;&nbsp;&nbsp;Alameda Jaú, n° 476,
					Jardim Paulista, São Paulo
					Contato: +55 11 3284-9669 / +55 11 3253-8523
				</div>
				
				<div class="endereco">
					<h4>Frajola´s Pizzaria</h4>
					&nbsp;&nbsp;&nbsp;&nbsp;Rua Doutor Luiz Migliano, 977,
					Morumbi, São Paulo
					Contato: +55 11 3743-2083 / +55 11 3743-2088
				</div>
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