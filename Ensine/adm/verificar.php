<?php session_start();


require("conexao.php");
$sql = "SELECT *,count(*) as total FROM administradores WHERE (email_adm = '".$_POST['usuario']."' AND senha_adm = '".$_POST['senha']."')";


$res = mysqli_query($con, $sql);
$dados = mysqli_fetch_assoc($res);

if($dados['total'] > 0){
    
    $_SESSION['apelido'] = $dados['apelido_adm'];
    $_SESSION['login'] = TRUE;
    echo "<script>window.location='index.php'</script>";

}else{
    echo "<script>window.location='login.php'</script>";
}

?>