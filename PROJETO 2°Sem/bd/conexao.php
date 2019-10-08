<?php
    
    function conexaoMysql ()
    {
        /*

            CONEXÃO COM O BANCO DE DADOS MYSQL

                PRIMEIRA FORMA DE CONEXÃO (esta desatualizado nas versões atuais do php)
                    mysql_connect() - Função para realizar a conexão com o Banco de Dados

                    Ex: mysql_connect(host, user, password);

                    mysql_select_db() - Permite escolher qual database vai ser utilizado no projeto

                SEGUNDA FORMA DE CONEXÃO
                    mysqli_connect() - Função(biblioteca) para realizar a conexão com o Banco de Dados (é a biblioteca mais atual para utilizar)

                    Ex: mysqli_connect(host, user, password, database)

                TERCEIRA FORMA DE CONEXÃO
                    PDO() - Classe para realizar a conexão com o Banco de Dados (100% orientado a objeto)

                    Ex: $conexao = new PDO('mysql:host=localhost;meuBancoDeDados', user, password)
            */

        $host = (string) "localhost"; //Local do banco de dados
        $user = (string) "root"; //Usuario de autenticação
        $password = (string) "bcd127"; //Senha da autenticação
        /********** MEU BD é o "dbcontatos2019tb"******************/
        $database = (string) "frajolas"; //Nome do database

        //Estabelece a conexão com o Banco de Dados
        $conexao = mysqli_connect($host, $user,$password, $database);
        
        return $conexao;

    }
?>