<?php 
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
	
	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "DELETE FROM tbveiculos WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Deletado com sucesso!";
		header('Location: ../veiculos.php');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar";
		header('Location: ../veiculos.php');
	endif;
endif;