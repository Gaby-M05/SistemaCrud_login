<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <h1>Editar usuário</h1>
    <?php
        $sql = "SELECT * FROM cadusuario WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);
        $row = $res->fetch_object();
    ?>
    <form action="?page=salvar" method="post">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->id; ?>">

        <div class="mb-3">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?php print $row->nome;?>" class="form-control">
        </div>

        <div class="mb-3">
            <label for="nome">E-mail:</label>
            <input type="text" name="email" id="email" value="<?php print $row->email;?>" class="form-control">
        </div>

        <div class="mb-3">
            <label for="nome">Telefone:</label>
            <input type="tel" name="tel" id="tel" value="<?php print $row->tel;?>" class="form-control">
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