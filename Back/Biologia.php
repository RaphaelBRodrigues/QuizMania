<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php
include("config.php");


@session_start();
$questao = mysqli_query($mysqli,"SELECT * FROM Biologia ORDER BY ID");
$qr = 1;
echo "    <form method='post' action='../Front/confereBio.php'>
";
while ($atual = mysqli_fetch_array($questao)) {

  @$imagemSRC = $atual['imagem'];
  $pergunta = $atual['pergunta'];
  $respostaA = $atual['r1'];
  $respostaB = $atual['r2'];
  $respostaC = $atual['r3'];
  $respostaD = $atual['r4'];
  $certo = $atual['certo'];

  echo "

  <center>
<h1>$qr</h1>

  <img src='$imagemSRC' alt=''>
  <h4> $pergunta </h4>
  <p> A -  $respostaA </p>
  <p> B - $respostaB </p>
  <p> C - $respostaC </p>
  <p> D -  $respostaD </p>
  <br>

  <input  type='radio' class='all'  name='qr".$qr."' value='A'><p class='todos'>A</p>
  <input type='radio' class='all' name='qr".$qr."' value='B'><p class='todos'>B</p>
  <input type='radio'   name='qr".$qr."' value='C'><p class='todos'>C</p>
  <input type='radio' class='all'    name='qr".$qr."' value='D'><p class='todos'>D</p>
  <br>


  <hr>

<br><br>
  </center>
  ";
$qr++;
}


 ?>
