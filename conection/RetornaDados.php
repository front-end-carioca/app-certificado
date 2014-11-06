<?php 
	// Iniciando uma sessão
	session_start();
	
	// incluindo a conexão do banco de dados
	include "conexao.php";

	// incluindo o script de requisição
	$email   = $_POST['email'];

	// Realizando consulta pelo dado passado
	$sql     = mysql_query("SELECT nome, RG FROM importaexcel WHERE email='".$email."'");
	$retorno = mysql_fetch_array($sql);

	echo $_SESSION['nome'] = $retorno[0];
	echo "|";
	echo $_SESSION['rg']   = $retorno[1];
?>