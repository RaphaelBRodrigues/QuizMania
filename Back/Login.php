<?php


include("config.php");
    @session_start();

$consulta = mysqli_query($mysqli,"SELECT * FROM usuario");
while ($a = mysqli_fetch_array($consulta)) {
if ($_POST['nome'] == $a['usuario_Nome']) {
  if ($_POST['senha'] == $a['usuario_Senha']) {
  $_SESSION['usuario_Nome'] = $a['usuario_Nome'];
  Header("Location: ../Front/Index.php ");
  /*echo "foi
  <script>
  alert('Bem vindo ".$_SESSION['usuario_Nome']."');
  window.location.replace('../Front/Index.php');
  </script>
  ";
*/
 }
}else{
	$_SESSION['usuario_Nome'] = "Login";
 /* echo "
  <script>
  alert('Falha ao realizar o login,verifique suas credenciais');
  window.location.replace('../Front/Login.php');
  </script>
  ";
*/    Header("Location: ../Front/Login.php ");

}


}

 ?>
