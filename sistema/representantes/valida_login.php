<!-- @Guilherme Paluch 2021 -->

<?php

session_start();

$email_cliente = $_SESSION['email_cliente'];
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
$ip = $_SERVER['REMOTE_ADDR'];
$data = date('now');

$pdo = new PDO('sqlite:../../databases/'.$email_cliente.'.db');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = $pdo->prepare("INSERT INTO `user_$usuario` ( `usuario`, `senha`, `ip`, `data_atual`, `cor`) VALUES
('$usuario', '$senha', '$ip', '$data', 'dark');");
$sql->execute();

header('Location: loja_representantes/index.php');

?>