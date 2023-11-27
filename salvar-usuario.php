<?php
switch (@$_REQUEST["acao"]) {
    case "cadastrar":
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];
        $senha = $_POST["senha"];

        $sql = "INSERT INTO cadusuario (nome, email, tel, senha) VALUES ('{$nome}','{$email}','{$tel}','{$senha}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script> alert ('Cadastrado com sucesso!'); </script>";
            print "<script> location.href='?page=listar'; </script>";
        } else {
            print "<script> alert ('Não foi possível cadastrar.'); </script>";
        }
        break;

    case "editar":
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];
        $senha = $_POST["senha"];

        $sql = "UPDATE cadusuario SET nome='{$nome}',
             email='{$email}',
              tel='{$tel}', 
              senha='{$senha}' 
              WHERE 
              id=" . $_REQUEST["id"];
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script> alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script> alert('Não foi possivel editar!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }

        break;
    case "excluir":
        $sql = "DELETE FROM cadusuario WHERE id= " . $_REQUEST["id"];
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script> alert('Excluído com sucesso!');</script>";
            print "<script> location.href='?page=listar';</script>";
        } else {
            print "<script> alert('Não foi possível excluir!');</script>";
            print "<script> location.href='?page=listar';</script>";
        }
        break;
}
