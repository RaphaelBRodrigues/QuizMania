

    <?php
    include('cab.php');
    ?>
    <div class="corpo">
      <title>Login</title>
    <form class="" action="../Back/Login.php" method="post">
      <center>
          <fieldset>
            <legend>Login</legend>
            <input type="text" name="nome" placeholder="Nome completo" value="">
            <input type="password" name="senha" placeholder="Senha" value=""> <br><br>
        <input type="submit">
    <a href="Cadastro.php" class="btn btn-info tag">Fazer cadastro</a>
          </select>
        </fieldset>
      </center>
    </form>

    </div>
  </body>
</html>
<style>
fieldset{
  position: relative;
  top: 6.5em;
  font-size: 2em;
  text-align: center;
}
legend{
  text-align: center;
  font-family: beaut;
  font-size: 2em;

}
input[type=button], input[type=submit], input[type=reset] {
  background-color: #9B30FF;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
   margin: 4px 2px;
  cursor: pointer;
}
.tag{
  border-radius: 10px;
  height: 5em;
  width: 10em;
  padding-top: 1.5em;
  font-family: beaut;
}
input[type=submit]{
  border-radius: 10px;
    font-family: beaut;
}
button{
  border-radius: 10px;
  background-color: gray;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
   margin: 4px 2px;
  cursor: pointer;
}
form {
  border-radius: 10px;
margin-top: 50em;
height: 40em;
  position: relative;


  margin : 0 auto;

  background: #FFF url(background.jpg);
}
  @media screen and (max-width: 600px) {
    form {

    height: 45em;

    }
  }


</style>
