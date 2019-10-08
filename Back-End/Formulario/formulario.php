<?php

    require_once('bd/conexao.php');
    

    // Chamada para estabelecer a conexão com o BANCO DE DADOS\\
    $conexao = conexaoMysql();
    
//    var_dump($conexao);
?>



<!DOCTYPE html>
<html>
    <head>
        <title>
            Formulario
        </title>
        
        <link rel="stylesheet" type="text/css"
        href="css/formulario.css">
    </head>
    
    <body>
        <form>
            <div id="total">
                    <div id="caixa_cadastro">
                        <div id="text_cadastro">
                            <h1>Cadastro de Contatos</h1>
                        </div>

                        <div class="dados">
                            
                                <div class="informacoes">
                                    <h2>Nome:</h2>
                                </div>
                                
                                <div class="recebe_infor">
                                    
                                    <input type="text" name="txtnome" value="" size="20" maxlength="12">
                                    
                                </div>
                                
                            
                        </div>
                        
                        <div class="dados">
                                
                                <div class="informacoes">
                                        <h2>Telefone:</h2>
                                </div>
                                
                                <div class="recebe_infor">
                                   
                                    <input type="text" name="txttel" value="" size="20" maxlength="12">
                                    
                                </div>

                        </div>
                        
                        <div class="dados">
                            
                                <div class="informacoes">
                                        <h2>Celular:</h2>
                                </div>
                                
                                <div class="recebe_infor">
                                    
                                    <input type="text" name="txtcel" value="" size="20" maxlength="12">
                                    
                                </div>

                        </div>
                        
                        <div class="dados">
                                
                                <div class="informacoes">
                                        <h2>Email:</h2>
                                </div>
                                
                                <div class="recebe_infor">
                                    
                                    <input type="text" name="txtEmail" value="" size="20" maxlength="12">
                                    
                                </div>

                        </div>
                        
                        <div class="dados">
                            
                                <div class="informacoes">
                                        <h2>Data Nascimento:</h2>
                                </div>
                                
                                <div class="recebe_infor">
                                    
                                    <input type="text" name="txtData" value="" size="20" maxlength="12">
                                    
                                </div>

                        </div>
                       
                        <div class="dados">
                            
                                <div class="informacoes">
                                        <h2>Sexo:</h2>
                                </div>
                                
                                <div class="recebe_infor">
                                    
                                    <input type="radio" name="rdosexo" value="M">Masculino
                                   
                                    <input type="radio" name="rdosexo" value="F" checked>Feminino
                                    
                                </div>

                        </div>
                        
                        <div class="dados obs">
                                  
                                <div class="informacoes padding">
                                        <h1>Obs:</h1>
                                </div>
                                
                                <div class="recebe_infor">
                                
                                </div>
                                                       
                        </div>

                    </div>






    <!--        Area da Consulta de Contatos      -->

                    <div id="consulta_contatos">

                            <div id="caixa_contatos">   
                                <h1>Consulta de contatos</h1>
                            </div>

                            <div id="recebe_contatos">

                                <div class="area_negocio">

                                </div>

                                <div class="area_negocio">

                                </div>

                                <div class="area_negocio">

                                </div>

                                <div class="area_negocio">

                                </div>

                                <div class="area_negocio">

                                </div>

                            </div>

                            <div id="recebe_texto">
                                <div class="caixa_texto">

                                </div>

                                <div class="caixa_texto">

                                </div>

                                <div class="caixa_texto">

                                </div>

                                <div class="caixa_texto">

                                </div>

                                <div class="caixa_texto">

                                </div>

                            </div>

                    </div>

            </div>
        </form>
    </body>
</html>