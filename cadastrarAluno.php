<html lang="pt-br">

<head>
    <title>JavaScript e Ajax</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstra
p.min.css" integrity="sha384-
MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
    function procurarCidade() {
        document.getElementById("formDadastroDeAluno").submit();

        $.ajax({
            url: "retornaCidades.php",
            type: "POST",
            data: "estado=" + nome,
            dataType: "html"
        }).done(function(resposta) {
            console.log(resposta);
            $('#cidadeID').html(resposta);
        }).fail(function(jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);
        }).always(function() {
            console.log("completou");
        });
    }

    function ajax() {
        let informacoes = "";
        informacoes = "nome=" + document.getElementById('idnome');
        $.ajax({
            url: "script.php",
            type: "POST",
            data: informacoes,
            dataType: "html"

        }).done(function(resposta) {
            console.log(resposta);

        }).fail(function(jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);

        }).always(function() {
            console.log("funcionou");
        });
    }
    </script>
</head>

<body>
    <form id="formDadastroDeAluno" method="POST" action="index.php">
        <h1>JavaScript e Ajax</h1>
        Nome: <input type="text" name="nome" id="idnome"></br>
        CPF: <input type="number" name="cpf" id="cpfID"></br>
        Idade: <input type="number" name="idade" id="ididade"></br>
        Sexo: <select name="sexo">
            <option value="m">Masculino</option>
            <option value="f">Feminino</option>
        </select></br>
        Telefone: <input type="number" name="telefone" id="telefoneID"></br>
        CEP: <input type="number" name="cep" id="cepID"></br>
        Turma: <select name="turma">
            <option value="1228">1228</option>
            <option value="1229">1229</option>
        </select></br>
        Estado Origem: <select id="estadoID" onchange="procurarCidade()" name="estado" class="form-control">
            <option value="0" selected>Escolher...</option>
            <option value="sp">São Paulo</option>
            <option value="ms">Mato Grosso do Sul</option>
        </select></br>
        Cidade Origem: <select id="idcidade" name="cidade" class="form-control">
            $('#idcidade').html(resposta);
        </select></br>
        <input class="btn btn-primary" onclick="ajax()" type="button" name="ajax" id="idajax" value="Ajax">
    </form>

</body>

</html>