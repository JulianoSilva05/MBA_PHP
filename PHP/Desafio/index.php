<html>

<head>
    <title>Curso de PHP com MySQL</title>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />

<body>
    <form name="form1" method="POST" action="RespForm1.php">
        <p>Nome:<br>
            <input type="text" name="nome" id="nome" size="30" maxlength="30">
        </p>
        <p>Senha:<br>
            <input type="password" name="senha" id="senha" size="10" maxlength="30">
        </p>
        <p>Sexo:<br>
            <input type="radio" name="sexo" value="Masculino">Masculino
            <input type="radio" name="sexo" value="Feminino">Feminino
        </p>
        <p>Selecione o turno:<br>
            <input type="checkbox" name="turno" id="turno" value="Manhã">Manhã
            <input type="checkbox" name="turno" id="turno" value="Tarde">Tarde
            <input type="checkbox" name="turno" id="turno" value="Noite">Noite
        </p>
        <p>Cidade:<br>
            <select name="cidade" id="cidade">
                <option value="vazio"> </option>
                <option value="Aracaju">Aracaju, SE</option>
                <option value="BeloHorizonte">Belo Horizonte, MG</option>
                <option value="Brasília">Brasília, DF</option>
                <option value="Cuiabá">Cuiabá, MT</option>
                <option value="Maceió">Maceió, AL</option>
                <option value="Manaus">Manaus, AM</option>
                <option value="RioBranco">Rio Branco, AC</option>
                <option value="RioJaneiro">Rio de Janeiro, RJ</option>
                <option value="SãoPaulo">São Paulo, SP</option>
            </select>
        </p>
        <p><input type="submit" value="Enviar"></p>
        <input type='hidden' name='btnOK' value='1'>
    </form>
</body>
<html>

</html>