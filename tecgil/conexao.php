<?php
$servidor = "localhost";
$usuario = "root";
$senha = "root"; // Substitua pela sua senha real
$dbname = "cadastro";

$conexao = new mysqli($servidor, $usuario, $senha, $dbname);

if ($conexao->connect_error) {
    die("Houve um erro: " . $conexao->connect_error);
}
?>
