<?php
include_once("config.php");

@session_start();
$_SESSION['usuario_Nome'] = $_POST['nome'];

if (mysqli_query($mysqli,"INSERT INTO usuario(usuario_ID,usuario_Nome,usuario_Senha,usuario_Turma) VALUES(null,'".$_POST['nome']."','".$_POST['senha']."','".$_POST['turma']."')")) {
  mysqli_query($mysqli,"INSERT INTO usuario(usuario_ID,usuario_Nome,usuario_Senha,usuario_Turma) VALUES(null,'".$_POST['nome']."','".$_POST['senha']."','".$_POST['turma']."')");
    // Header("Location: ../Index.html");
  @session_start();
  $_SESSION['usuario_Nome'] = $_POST['nome'];

  echo "<script>
  alert('Cadastro efetuado com sucesso!,Bem vindo ao QuizMania ".$_SESSION['usuario_Nome']."');
  window.location.replace('../Front/Index.php');

  </script>";

}else{


  // Header("Location: ../Front/Cadastro.html");
  echo "<script>
  alert('Falha ao realizar o cadastro ".$_SESSION['usuario_Nome']." tente inserir outras credenciais');
  window.location.replace('../Front/Cadastro.php');

  </script>";

}
 ?>
