<!DOCTYPE html>
<html lang='pt-br' dir='ltr'>
  <head>
    <meta charset='utf-8'>
    <title></title>
  </head>
  <body>
    <?php
    include_once('cab.php');
    include_once('../Back/Biologia.php');
    ?>
      <input id="ta" type='submit' value='Enviar Respostas'>

</form>

  </body>
</html>

<style media="screen">
  p{
    text-align:justify;
  }
  h4{
    text-align: justify;
  }
  .todos, input{
    float: left;

  }
  input[type=button], input[type=submit], input[type=reset] {
    background-color: #9B30FF;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
     margin: 4px 2px;
    cursor: pointer;
    transition: transform 0.3s linear 0.1s;

  }
  .todos, input{
    position: relative;
    padding-right: 4.5em;
  }
#ta{
 width: 100%;
 height: 5em;
font-family: beaut;
font-size: 1.5em;

}
.all{

}

</style>
