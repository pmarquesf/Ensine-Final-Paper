<?php 
require("adm/conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql_verifica = "SELECT count(*) as total from leads where email_lead = '$email'";
    $res_verifica = mysqli_query($con,$sql_verifica);
    $dados_verifica = mysqli_fetch_assoc($res_verifica);
      
    $sql = "insert into leads values(null,'".$nome."','".$email."')";
    echo "<br>".$sql;
      
    if(mysqli_query($con,$sql)){
        echo "<script>alert('Sucesso!');window.location='index.html'</script>";
    }else{
        echo "<script>alert('Erro ao enviar sua mensagem!');window.location='index.html'</script>";
    }

    mysqli_close($con);   
    
?>


