<?php 
require("adm/conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $msg = $_POST['mensagem'];


    $sql_verifica = "SELECT count(*) as total from mensagens where email_bd = '$email'";
    $res_verifica = mysqli_query($con,$sql_verifica);
    $dados_verifica = mysqli_fetch_assoc($res_verifica);


    $sql = "insert into mensagens values(null,'".$nome."','".$email."','".$assunto."','".$msg."')";
    echo "<br>".$sql;
      
    if(mysqli_query($con,$sql)){
        echo "<script>alert('Mensagem enviada com sucesso!');window.location='contato.php'</script>";
    }else{
        echo "<script>alert('Erro ao enviar sua mensagem!');window.location='contato.php'</script>";
    }

    mysqli_close($con);   
    
?>
