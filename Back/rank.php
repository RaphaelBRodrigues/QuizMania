<?php

include("config.php");

$bio = mysqli_query($mysqli,"SELECT * FROM usuario ORDER BY usuario_pontBio DESC");
$geo = mysqli_query($mysqli,"SELECT * FROM usuario ORDER BY usuario_pontGeo DESC");
echo "<div class='nini'>
<h2>Biologia</h2>
<br>
<br>
<ol>";
while ($a = mysqli_fetch_array($bio)) {
  echo "<li>".$a['usuario_Nome']."&nbsp";
  echo "".$a['usuario_pontBio']."</li><br><hr>";
}
echo "</ol>";



echo "<br><br><br>
<h2>Geografia</h2>
<br>
<br>
<ol> <div>";

while ($a = mysqli_fetch_array($geo)) {
  echo "<li>".$a['usuario_Nome']."&nbsp";
  echo "".$a['usuario_pontGeo']."</li><br><hr>";
}
echo "</ol>";

 ?>
