<?php

@session_start();
include("config.php");
$questao = mysqli_query($mysqli,"SELECT * FROM Geografia ORDER BY ID");
$s = 1;
$certas = 0;
echo"<div class='rplc'> <center>";
echo "<p class='ok'>".$_SESSION['usuario_Nome'].", suas respostas foram :</p><ul class='beles'> " ;
while ($atual = mysqli_fetch_array($questao)) {
if (@$_POST['qr'.$s] == $atual['certo']) {
  echo "<li class='certo' style='background-color:green;'>$s-Certo<br></li>";
  $certas++;
}else{
  echo "<li class='errado' style='background-color:red;'>$s-errado</li>";
}
$s++;
}
echo"</ul>
<p class='ok'>".@$_SESSION['usuario_Nome']."
Total de acertos:$certas</p>;
";
echo"</center></div>";
 ?>
