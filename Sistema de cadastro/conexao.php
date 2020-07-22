<?php 

$hostname = "localhost"; 

$user = "root"; 

$password = "";

$database = "cadastro";

$conexao = mysqli_connect($hostname, $user, $password, $database); 

// Se a variavel conexão nao funcionar 
if (!$conexao){
	echo "Falha na conexao com o banco de dados"; 
}


?> 