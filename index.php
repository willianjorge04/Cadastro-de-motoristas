<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="motor.css">
    <title>Rádio Táxi On-line</title>
</head>
<body>
    <div class="form">
        <form>
            <h1 class="title">Rádio Táxi On-line</h1>
            <h2>Cadastro</h2><br>
            <label for="nome"><strong>Nome:</strong></label>
            <input type="text" size="40" placeholder="Nome Completo">
            <label for="CPF"><strong>Nascimento:</strong></label>
            <input type="date" placeholder="000.000.000-00"><br><br>
            <label for="Email"><strong>Endereço:</strong></label>
            <input type="text" size="40" placeholder="Email">
            <label for="RG"><strong>Telefones:</strong></label>
            <input type="text" placeholder="(00) 00000-0000">
            
            <h2>Documentação</h2>
            <label for="nome"><strong>CPF:</strong></label>
            <input type="text" size="20" placeholder="Nome Completo">
            <label for="CPF"><strong>RG:</strong></label>
            <input type="text" placeholder="000.000.000-00"><br><br>
            <label for="Email"><strong>CNH:</strong></label>
            <input type="text" size="20" placeholder="Email">
            <label for="RG"><strong>Categoria:</strong></label>
            <input type="text" placeholder="123.456.789-00"><br><br>
            <label for="Validade"><strong>Validade:</strong></label>
            <input type="date" size="40" placeholder="Validade"><br><br>

            <h2>Estado Civil</h2>
            <select id="estado">
                <option selected disabled value="">Selecione</option>
                <option>Casado</option>
                <option>Solteiro</option>
                <option>Divorciado</option>
                <option>Viúvo</option>
                <option>Relaçao Estável</option>
            </select><br><br>

            <h2>Contatos para emergência</h2>
            <label for="nome"><strong>Nome:</strong></label>
            <input type="text" placeholder="Digite o nome da pessoa">
            <label><strong>Telefone(s) para contato</strong>:</label>
            <input type="text" placeholder="(00)00000-0000"><br><br>
            <label for="parentesco"><strong>Parentesco:</strong></label>
            <input type="text" placeholder="Descreva o parentesco"><br><br>

            <h2>Dados Bancários</h2><br>
            <label for="dados"><strong>Banco:</strong></label>
            <input type="text" placeholder="Digite o nome do banco">
            <label for="agencia"><strong>Agência:</strong></label>
            <input type="text" placeholder="Digite o número da agência"><br><br>
            <label for="Conta"><strong>Conta Corrente:</strong></label>
            <input type="text" placeholder="Digite o numero"><br><br>
            <input type="submit" value="Enviar">


        </form> 
    </div>
</body>
</html>

            <!--<div>
                <label for=""><strong>Nome</strong></label>
                <input type="text" placeholder="Digite seu nome">
                <label for=""><strong>Nascimento</strong></label>
                <input type="date" placeholder="Digite seu nascimento">
            </div>

            <div>
                <label for=""><strong>Endereço</strong></label>
                <input type="text" placeholder="Digite seu endereço">
                <label for=""><strong>Telefone</strong></label>
                <input type="text" placeholder="Digite seu Telefone">
            </div>!-->
       