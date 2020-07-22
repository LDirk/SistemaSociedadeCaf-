<?php 

include_once("conexao.php");

$nome = $_POST['nome']; 
$email = $_POST['email'];
$profissao = $_POST['profissao'];

$cpf = $_POST['cpf'];


$sql = "insert into usuarios (nome, email, profissao, cpf) values ('$nome','$email','$profissao', 'cpf' )";

$salvar = mysqli_query($conexao, $sql); 


mysqli_close($conexao); 






?>