<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema CRUD</title>
</head>

<body>
    <h1>Novo usuário</h1>
    <form action="?page=salvar" method="post">
        <input type="hidden" name="acao" value="cadastrar">

        <div class="mb-3">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>

        <div class="mb-3">
            <label for="nome">E-mail:</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>

        <div class="mb-3">
            <label for="nome">Telefone:</label>
            <input type="tel" name="tel" id="tel" class="form-control">
        </div>

        <div class="mb-3">
            <label for="nome">Senha:</label>
            <input type="passaword" name="senha" id="senha" class="form-control">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</body>

</html>