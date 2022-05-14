<?php
require('src/db/conexao.php');
// Verificação de autenticação
$user = verificaAuth($_SESSION['TOKEN']);
if ($user) {
    echo "Seja bem vindo " . $user['nome'];
} else{
    header('location: login.php');
}
?>

<a href="logout.php">Deslogar</a>
