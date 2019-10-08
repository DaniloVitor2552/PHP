<!DOCTYPE html>
<html lang="pt-br">
	<head>
        <meta charset="utf-8">
		<title>
        Frajola´s
        </title>
        <link rel="stylesheet" type="text/css" href="css/style4.css">
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
				<div id="titulo_p_mes" class="center" >
					Produto do Mês
				</div>
			</div>
			
			<div id="area_produto">
				<div id="produto_mes" >
				
				</div>
				
				<div id="nome_produto">
					<h1>Pizza de Frango com Catupiry:&nbsp;&nbsp;&nbsp; R$29,00</h1>
				</div>
				
				<div id="area_img_produto">
					<div class="area_img">
						<img src="img/pizza_frango.jpg" width="600" height="500" alt="pizzaFrango">
					</div>
					
					<div class="area_img">
						<img src="img/pizza_promo.png" width="600" height="500" alt="promocao">
					</div>
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