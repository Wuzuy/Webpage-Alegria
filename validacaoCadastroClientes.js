
function validacao() {
    const txtIdCliente = document.getElementById("id_cliente").value;
    const txtNomeCliente = document.getElementById("nome").value;
    const txtCpfCliente = document.getElementById("cpf").value;
    const txtTelCliente = document.getElementById("telefone").value;
    const txtEmailCliente = document.getElementById("email").value;
    const txtDCCliente = document.getElementById("data_cadastro").value;

    if (!txtIdCliente || !txtNomeCliente || !txtCpfCliente || !txtTelCliente || !txtEmailCliente || !txtDCCliente) {
        alert("ERRO: PREENCHA TODOS OS CAMPOS");
        return false;
    } else {
        alert("CADASTRO REALIZADO COM SUCESSO!");
    }

}