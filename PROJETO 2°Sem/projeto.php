<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>
            Frajola´s
        </title>
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/jquery-1.9.1.min.js"> </script>
        <script src="js/jssor.slider.min.js"> </script>
        <script src="js/slider.js"> </script>
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
        

        
        
        <div class="conteudo center">
        
            <div id="redes_sociais">
                <div id="img_sociais1" class="img_sociais">
                    
                </div>

                <div id="img_sociais2" class="img_sociais">

                </div>

                <div id="img_sociais3" class="img_sociais">

                </div>
            
            
            </div> 
            
            <!--   AREA DO SLIDE   -->
            <div id="slider">
                <div style="position:relative;top:90px;left:0;width:100%;overflow:hidden;" class="center">
                    <!--#region Jssor Slider Begin -->
                    <div id="slider1_container">
                        <!-- Loading Screen -->
                        <div data-u="loading" class="jssorl-009-spin" >
                            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" alt=""/>
                        </div>
            
                        <!-- Slides Container -->
                        <div data-u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1400px;  height: 600px; overflow: hidden;">
                            <div>
                                <img data-u="image" src="img/pizza1.png" alt="pizza1" />
                            </div>
                            <div>
                                <img data-u="image" src="img/pizza2.jpg" alt="pizza2"/>
                            </div>
                            <div>
                                <img data-u="image" src="img/pizza3.png" alt="pizza3" />
                            </div>
                            <div>
                                <img data-u="image" src="img/pizza6.jpg" alt="pizza4"/>
                            </div>
                            <div>
                                <img data-u="image" src="img/pizza5.jpg" alt="pizza5"/>
                            </div>
                            
                            
                        </div>
                        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                                <svg viewBox="0 0 16000 16000" style="position:absolute;top:-10;left:0;width:100%;height:100%;">
                                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                                </svg>
                            </div>
                        </div>
                        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                            <svg viewBox="0 0 16000 16000" style="position:absolute;top:-10;left:0;width:100%;height:100%;">
                                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                            </svg>
                        </div>
                        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:120px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                            <svg viewBox="0 0 16000 16000" style="position:absolute;top:-10;left:0;width:100%;height:100%;">
                                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                            </svg>
                        </div>
            
                    </div>
                </div>
            </div>
            
            
            
                <!--     Area do menu lateral       -->
            <section id="menu_lateral">
                <div class="itens_menulateral">
                    <a href="" > <h3>Pizza 1</h3></a>
                </div>
                
                <div class="itens_menulateral">
                    <a href="" > <h3>Pizza 2</h3></a>
                </div>
                
                <div class="itens_menulateral">
                    <a href="" > <h3>Pizza 3</h3></a>
                </div>
                
                <div class="itens_menulateral">
                    <a href="" > <h3>Pizza 4</h3></a>
                </div>
                
                <div class="itens_menulateral">
                    <a href="" > <h3>Pizza 5</h3></a>
                </div>
                
                <div class="itens_menulateral">
                    <a href="" > <h3>Pizza 6</h3></a>
                </div>
            </section>
            
         
            
                <!--        Area dos produtos    -->
            
            <section id="area_produtos">
                <h1>Produtos</h1>
                
                <div class="produtos">
                    <div class="img_produtos">
                        
                    </div>
                    
					<div class="area_descricao">
						<div class="descricao">
							<p>Nome:</p>
							<p>Descrição:</p>
							<p>Preço:</p>
						</div>

						<div class="detalhes">
							<p>Detalhes</p>
						</div>
					</div>
                </div>
                
                <div class="produtos">
                    <div class="img_produtos">
                        
                    </div>
                    
					<div class="area_descricao">
						<div class="descricao">
							<p>Nome:</p>
							<p>Descrição:</p>
							<p>Preço:</p>
						</div>

						<div class="detalhes">
							<p>Detalhes</p>
						</div>
					</div>
                </div>
                
                <div class="produtos">
                    <div class="img_produtos">
                        
                    </div>
                    
					<div class="area_descricao">
						<div class="descricao">
							<p>Nome:</p>
							<p>Descrição:</p>
							<p>Preço:</p>
						</div>

						<div class="detalhes">
							<p>Detalhes</p>
						</div>
					</div>
                </div>
                
                <div class="produtos">
                    <div class="img_produtos">
                        
                    </div>
                    
					<div class="area_descricao">
						<div class="descricao">
							<p>Nome:</p>
							<p>Descrição:</p>
							<p>Preço:</p>
						</div>

						<div class="detalhes">
							<p>Detalhes</p>
						</div>
					</div>
                </div>
                
                <div class="produtos">
                    <div class="img_produtos">
                        
                    </div>
                    
					<div class="area_descricao">
						<div class="descricao">
							<p>Nome:</p>
							<p>Descrição:</p>
							<p>Preço:</p>
						</div>

						<div class="detalhes">
							<p>Detalhes</p>
						</div>
					</div>
                </div>
                
                <div class="produtos">
                    <div class="img_produtos">
                        
                    </div>
                    
					<div class="area_descricao">
						<div class="descricao">
							<p>Nome:</p>
							<p>Descrição:</p>
							<p>Preço:</p>
						</div>

						<div class="detalhes">
							<p>Detalhes</p>
						</div>
					</div>
                </div>
            </section>
        
        </div>
        
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
                               
        
        <script>
            jssor_slider1_init()
            jssor_slider1_init1()
            jssor_slider1_init2()
            jssor_slider1_init3()
            jssor_slider1_init4()
            
        </script>
                                              
    </body>
</html>