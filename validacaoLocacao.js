function validacao() {
    const txtIdLocacao = document.getElementById("id_locacao").value;
    const txtNomeCliente = document.getElementById("nome_cliente").value;
    const txtDEvento = document.getElementById("data_evento").value;
    const txtHInicio = document.getElementById("horario_inicio").value;
    const txtHFim = document.getElementById("horario_fim").value;
    const txtTEvento = document.getElementById("tipo_evento").value;
    const txtQConvidados = document.getElementById("quantidade_convidados").value;
    const txtVLocacao = document.getElementById("valor_locacao").value;
    const txtSLocacao = document.getElementById("status_locacao").value;
    const txtObs = document.getElementById("observacoes").value;

    if (!txtIdLocacao || !txtNomeCliente || !txtDEvento || !txtHInicio || !txtHFim || !txtTEvento || !txtQConvidados || !txtVLocacao || !txtSLocacao || !txtObs) {
        alert("ERRO: PREENCHA TODOS OS CAMPOS");
        return false;
    } else {
        alert("CADASTRO REALIZADO COM SUCESSO!");
    }

}