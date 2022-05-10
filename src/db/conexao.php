<?php
// Padrão xampp
//$servidor = "localhost";
//$usuario = "root";
//$senha = "";
//$banco = "login";

$servidor = "localhost";
$usuarioDB = "root";
$senhaDB = "271202";
$banco = "login";

try{
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco", $usuarioDB, $senhaDB);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Mostrar erro
}catch (PDOException $erro) {
    echo "Falha ao se conectar com o banco! " . $erro -> getMessage();
}

function limparPost($dados) {
    $dados = trim($dados);
    $dados = stripslashes($dados);
    $dados = htmlspecialchars($dados);
    return $dados;
}