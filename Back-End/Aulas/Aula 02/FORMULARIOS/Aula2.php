<!DOCTYPE html>
<html>
    <head>
        <title>
            Aula 2
        </title>
        <style>
            textarea{
                resize: none;
            }
        </style>
    </head>
    
    <body>
        <form name="frmformulario" method="get" action="Aula2.php">
            Nome:
            <!-- MAXLENGTH: Numero maximo de caracteres que a caixa de texto vai suportar !-->
            <input type="text" name="txtnome" value="" size="50" maxlength="40">
            <br>
            Estados:
            <select name="sltestados">
                <option value="" selected>Selecione um Item</option>
                <option value="SP">SÃO PAULO </option>
                <option value="RJ">RIO DE JANEIRO</option>
                <option value="AC">ACRE</option>
            </select>
            <br>
            Sexo:
            <!-- Objeto de seleção individual, mas precisa ser o mesmo nome em todos os elementos EX: rdosexo -->
            <input type="radio" name="rdosexo" value="M">Masculino
            <input type="radio" name="rdosexo" value="F" checked>Feminino
            <br>
            Idiomas:
            <input type="checkbox" name="chkport" value="PT" checked> Português
            <input type="checkbox" name="chking" value="EN"> Inglês
            <input type="checkbox" name="chkesp" value="ES"> Espanhol
            <br>
            
            Obs:
            <textarea name="txtobs" cols="30" rows="4"></textarea>
            <br>
            <input type="submit" name="btnsalvar" value="Salvar">
            <input type="reset" name="btnlimpar" value="Limpar">            
        </form> 
    </body>
</html>