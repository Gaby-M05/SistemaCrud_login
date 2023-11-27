<?php
    session_start();
    if (empty($_POST)or empty($_POST["email"])or (empty($_POST["email"]))) {
        print"  <script>
                  location.href='index.php';
                </script>
            ";
    }
    include('config.php');

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql ="SELECT * FROM cadusuario
          WHERE nome='{$usuario}'
          AND senha='{$senha}'";

    $res=$conn->query($sql) or die($conn->error);

    $qtd=$res->num_rows;

    if($qtd> 0){
        $_SESSION["nome"] = $nome;
        print"<script>location.href='dashboard.php';</script>";
    }else{
        print "<script>alert ('Usuario e/ou senha incorreto(s)!;</script>')";
        print"<script>location.href='dashboard.php';</script>";
    }
           
?>