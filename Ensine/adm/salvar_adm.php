<?php 
require("conexao.php");

    $apelido = $_POST['apelido'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirm = $_POST['confirm'];


    $sql_verifica = "SELECT count(*) as total from administradores where email_lead = '$email'";
    $res_verifica = mysqli_query($con,$sql_verifica);
    $dados_verifica = mysqli_fetch_assoc($res_verifica);

    if($dados_verifica['total'] > 0){
        echo "<script>alert('O administrador de email ".$email." já está cadastrado!');window.location='lista_adm.php'</script>";
    }else{

    if($senha!=$confirm){
         echo "<script>alert('As senhas não coincidem');window.location='adicionar_adm.php'</script>";
    }else{
      
    $sql = "insert into administradores values(null,'".$apelido."','".$nome."','".$email."','".$senha."','".$confirm."')";
    echo "<br>".$sql;
      
    if(mysqli_query($con,$sql)){
        echo "<script>alert('Um novo administrador foi inserido com sucesso.');window.location='lista_adm.php'</script>";
    }else{
        echo "<script>alert('Erro ao cadastrar administrador.');window.location='lista_adm.php'</script>";
    }

}
    mysqli_close($con);   
}
    
?>
