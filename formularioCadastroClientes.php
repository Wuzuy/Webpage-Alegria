<?php
    $dbHost = 'sql202.infinityfree.com';
    $dbUsername = 'if0_42160335';
    $dbPassword = 'provaAlegria';
    $dbName = 'if0_42160335_alegria';

    $conexao= new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    if ($conexao->connect_errno){
    die("ERRO NA CONEXÃO:" . $conexao->connect_error);

    }
    $idCliente =$_POST['id_cliente'];
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $idCad=$_POST['data_cadastro'];
    $sql= "INSERT INTO clientes (idcliente,nome,cpf,telefone,email,idcad) VALUES ('$idCliente','$nome','$cpf','$telefone','$email','$idCad')";
    if($conexao->query($sql)===TRUE){
        echo "Aluno Cadastrado com sucesso!!!";
    }
    else{
        echo "Erro ao Cadastrar: ". $conexao->error;
    }
    $conexao->close();
?>