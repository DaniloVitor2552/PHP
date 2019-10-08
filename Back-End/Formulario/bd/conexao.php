<?php

    function conexaoMysql ()
    {
        /*
    CONEXÃO COM O BANCO DE DADOS MYSQL
    
    
    * PRIMEIRA FORMA DE CONEXAO   (Esta desatualizado nas versoes atuais do PHP, Nao utilizar)
        mysql_connect() - função para realizar a conexao com o BANCO DE DADOS
        EX: mysql_connect(host, user, password)
        
        mysql_select_db() - permite escolher qual o database a ser utilizado no projeto
     
     
    * SEGUNDA FORMA DE CONEXAO
        mysqli_connect() - funcao (biblioteca) para realizar a conexão com o Banco de Dados (é a biblioteca mais atual para utilizar)
        
        Ex: mysqli_connect(host, user, password, database)
        
    *TERCEIRA FORMA DE CONEXAO
        
        PDO() - classe para realizar a conexao com o BANCO DE DADOS (100% orientado a objetos)
        
        EX: $conn = new PDO('mysql:host;dbname=meuBancoDeDados', user, $password)
    
*/

    $host = (string) "localhost"; //Local do BD
    $user = (string) "root"; // Usuario de autentificação
    $password = (string) "bcd127"; // Senha de autenticacao

    /**** MEU data base (dbcontatos2019tb)************************/
    /***************    NÃO ESQUECER  ****************************/


    $database = (string) "dbcontatos2019tb"; // Nome do database


    // Estabelece a conexao com o BD
    $conexao = mysqli_connect($host, $user, $password, $database);
    
        return $conexao;
    
    
    
    }

?>