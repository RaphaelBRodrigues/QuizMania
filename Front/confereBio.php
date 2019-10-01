
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include('../Back/confereBio.php');
    include('cab.php');
     ?>

  </body>
  <form class="rflc" action="../Back/sendBio.php" method="post">
    <button class="btn btn-success livia_gasosa" type="submit" name="acertos" value='<?php echo $certas; ?>'>Enviar respostas</button>
  </form>
</html>
<style>
li{
 list-style: none;
}
.livia_gasosa{
  width: 100%;
  height: 4em;
  font-family: beaut;
  position: relative;
  top: 15em;
}
.certo{
  text-align: center;
font-size: 1.5em;
height: 1.5em;

}
.beles{
  width: 40%;
  border: solid 1px black;
  padding: 0;
position: relative;
top: 10em;

}
.errado{
  text-align: center;
font-size: 1.5em;
height: 1.5em;
}
.rplc{
  position: relative;
  top:0em;
  position: relative;
  top: 3em;
}
.ok{
  font-family: beaut;
  text-align: center;
  position: relative;
  top: 13em;
}
ol{
  margin: 0;
}
@media only screen and (max-width: 600px) {
  .ok{
    top: 8em;
  }
  .okk{
top: 11em; 
  }
}
</style>
