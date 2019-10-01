<?php

include_once("config.php");
$consulta = mysqli_query($mysqli,"SELECT * FROM usuario ORDER BY usuario_ID");
echo "ID  &nbsp Nome<br><br>";
while ($imp = mysqli_fetch_array($consulta)) {
  echo $imp['usuario_ID']."&nbsp";
  echo $imp['usuario_Nome'];
  echo "<br>";
  echo "<br>";
}


 ?>
