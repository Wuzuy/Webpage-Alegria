function logar() {
    const login = document.getElementById("login").value;
    const senha = document.getElementById("senha").value;

    if (!login || !senha ) {
        alert("ERRO: PREENCHA TODOS OS CAMPOS");
        return false;
    } else if (login === "admin" && senha === "admin") {
        alert("Login bem-sucedido!");
        window.location.href="index.html";
    } else {
        alert("ERRO: LOGIN OU SENHA INCORRETOS");
    }
}