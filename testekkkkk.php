// processa_login.php
<?php
// Supondo que você tenha um sistema de autenticação aqui para validar os dados
if (validar_usuario($_POST['username'], $_POST['password'])) {
    // Se os dados forem válidos, redireciona para a página principal
    header('Location: pagina_principal.html');
    exit();
} else {
    // Se os dados forem inválidos, exibe uma mensagem de erro
    echo "Nome de usuário ou senha incorretos.";
}

function validar_usuario($username, $password) {
    // Lógica de validação aqui (ex: consultar um banco de dados)
    // Retorna true se os dados forem válidos, false caso contrário
}
?>
