<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// Clear
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar'])):
	$marca = clear($_POST['marca']);
	$modelo = clear($_POST['modelo']);
	$ano = clear($_POST['ano']);
	$cor = clear($_POST['cor']);
	$placa = clear($_POST['placa']);
	$motor = clear($_POST['motor']);
	$km = clear($_POST['km']);
	$valorFipe = clear($_POST['valorFipe']);

	$sql = "INSERT INTO tbveiculos (marca, modelo, ano, cor, placa, motor, km, valorFipe) VALUES 
	('$marca', '$modelo', '$ano', '$cor','$placa','$motor','$km','$valorFipe')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../veiculos.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../veiculos.php');
	endif;
endif;