<?php session_start(); 

  if($_SESSION['login'] != TRUE){
    echo "<script>window.location='login.php'</script>";
  }

$cod = $_GET['id'];

echo "Identificador = ".$cod;

require('conexao.php');

$sql = "DELETE FROM administradores WHERE id_adm = '$cod'";

echo $sql;

if(mysqli_query($con,$sql)){

		echo "<script>alert('Administrador excluído');window.location='ver_adm.php'</script>";
	}else{
		
		echo "<script>alert('Erro ao excluir administrador');window.location='ver_adm.php'</script>";
	}


?>