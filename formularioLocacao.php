<?php
    $dbHost = 'sql202.infinityfree.com';
    $dbUsername = 'if0_42160335';
    $dbPassword = 'provaAlegria';
    $dbName = 'if0_42160335_alegria';

    $conexao= new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    if ($conexao->connect_errno){
    die("ERRO NA CONEXÃO:" . $conexao->connect_error);

    }
    $id_locacao =$_POST['id_locacao'];
    $nome_cliente =$_POST['nome_cliente'];
    $data_evento =$_POST['data_evento'];
    $horario_inicio =$_POST['horario_inicio'];
    $horario_fim =$_POST['horario_fim'];
    $tipo_evento =$_POST['tipo_evento'];
    $quantidade_convidados =$_POST['quantidade_convidados'];
    $valor_locacao =$_POST['valor_locacao'];
    $status_locacao =$_POST['status_locacao'];
    $observacoes =$_POST['observacoes'];

    $sql= "INSERT INTO clientes (idlocacao,nome_cliente,d_evento,horario_inicio,horario_fim,tipo_evento,qtd_convidados,valor_locacao,status_loc,observacao) VALUES ('$id_locacao','$nome_cliente','$data_evento','$horario_inicio','$horario_fim','$tipo_evento','$quantidade_convidados','$valor_locacao','$status_locacao','$observacoes')";
    if($conexao->query($sql)===TRUE){
        echo "Aluno Cadastrado com sucesso!!!";
    }
    else{
        echo "Erro ao Cadastrar: ". $conexao->error;
    }
    $conexao->close();
?>