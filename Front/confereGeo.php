
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include('../Back/confereGeo.php');
    include('cab.php');
     ?>

  </body>
  <form class="rflc" action="../Back/sendGeo.php" method="post">
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
  top: 25em;
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
  top: 20em;


}
.errado{
  text-align: center;
font-size: 1.5em;
height: 1.5em;
}
.rplc{
  position: relative;
  top:0em;
}
.ok{
  font-family: beaut;
  text-align: center;
  position: relative;
  top: 25em;
}
ol{
  margin: 0;
}
@media only screen and (max-width: 600px) {
  .ok{
    top: 15em;
  }
}
</style>
