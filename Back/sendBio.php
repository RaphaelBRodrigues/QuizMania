<?php
include("config.php");
@session_start();
echo $_SESSION['usuario_Nome'];
$con = mysqli_query($mysqli,"SELECT * FROM usuario WHERE usuario_Nome = '".$_SESSION['usuario_Nome']."'");
while($ss = mysqli_fetch_array($con)){
if ($ss['usuario_pontBio'] < $_POST['acertos']) {
if (mysqli_query($mysqli,"UPDATE usuario SET usuario_pontBio =  '".$_POST['acertos']."' WHERE usuario_Nome = '".$_SESSION['usuario_Nome']."'")) {
mysqli_query($mysqli,"UPDATE usuario SET usuario_pontBio =  '".$_POST['acertos']."' WHERE usuario_Nome = '".$_SESSION['usuario_Nome']."'");
echo "
<script>
window.location.replace('../Front/rank.php');
</script>
";
}else{
  echo "
  <script>
  window.location.replace('../Front/rank.php');
  </script>
  ";
}
}
}
  echo "
  <script>
  window.location.replace('../Front/rank.php');
  </script>
  ";
 ?>
