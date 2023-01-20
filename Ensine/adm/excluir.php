<?php session_start(); 

  if($_SESSION['login'] != TRUE){
    echo "<script>window.location='login.php'</script>";
  }

$cod = $_GET['id'];

echo "Identificador = ".$cod;

require('conexao.php');

$sql = "DELETE FROM leads WHERE id_lead = '$cod'";

echo $sql;

if(mysqli_query($con,$sql)){

		echo "<script>alert('Registro Excluido');window.location='index.php'</script>";
	}else{
		
		echo "<script>alert('Erro ao excluir');window.location='index.php'</script>";
	}


?>