<?php
session_start();
if(!$_SESSION['nome']) {
  header('Location: ../../index.php');
  exit();
}
$email =  $_SESSION['email_login'];
$senha = $_SESSION['senha_login'];
$token = $_SESSION['token'];

$usuario = $_SESSION['nome'];




$tipo_produto = $_GET['tipo_produto'];
$pdo = new PDO('sqlite:../../../../databases/'.$email.'.db');
$sql = $pdo->prepare("SELECT * FROM produtos WHERE tipo_produto = '$tipo_produto'");
$sql->execute();
$info = $sql->fetchAll();
foreach($info as $key => $row){

echo '<option class="input100" value="'.$row['id'].'">'.$row['produto'].' | '.$row['tamanho'].' | '.$row['cor'].'</option>';

}
?>