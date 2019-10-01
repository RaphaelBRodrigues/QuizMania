
    <?php
    include('cab.php');
    ?>
    <title>Cadastro</title>
    <div class="corpo">

      <form class="" action="../Back/Cadastro.php" method="post">
        <fieldset>
          <legend>Cadastro</legend>
          <input type="text" name="nome" placeholder="Nome completo" required>
          <!-- <input type="text" name="apelido" placeholder="Nome de usuário" value=""> -->
        <input type="password" name="senha" required placeholder="Senha">

        <select id="appearance-select" class="" name="turma">
          <option value="INF32B">TI</option>
          <option value="INF12A">INF12A</option>
          <option value="INF12A">INF22A</option>
          <option value="INF32A">INF32A</option>
          <option value="INF12B">INF12B</option>
          <option value="INF22B">INF22B</option>
          <option value="INF32B">INF32B</option>
          <option value="null">------</option>
<br>
  <input type="submit" name="" value="Cadastrar" text='cadastrar'>
        </select>
      </fieldset>

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
  transition: transform 0.3s linear 0.1s;
}
input[type=text]:focus{
  transform: scale(1.02);
  border-bottom: 2px solid purple;
  border-left: 2px solid purple;
  transition: 0.4s;
}
select:focus{
  transform: scale(1.02);
font-family: beaut;
  transition: 0.4s;
}
input[type=submit]{
  margin-top: 2em;
  border-radius: 10px;
  font-family: beaut;
  transition: transform 0.3s linear 0.1s;
}
input[type=submit]:hover{
transform: scale(1.09);
}
form {
  border-radius: 10px;
margin-top: 50em;
height: 43em;
  position: relative;


  margin : 0 auto;

  background: #FFF;
}
#appearance-select{
   -webkit-appearance: none;  /* Remove estilo padrão do Chrome */
   -moz-appearance: none; /* Remove estilo padrão do FireFox */
   appearance: none; /* Remove estilo padrão do FireFox*/
   background: url(http://www.webcis.com.br/images/imagens-noticias/select/ico-seta-appearance.gif) no-repeat #eeeeee;  /* Imagem de fundo (Seta) */
   background-position: 218px center;  /*Posição da imagem do background*/
   width: 250px; /* Tamanho do select, maior que o tamanho da div "div-select" */
   height:40px; /* Altura do select, importante para que tenha a mesma altura em todo os navegadores */
   border:1px solid #ddd;
   margin-top: 1em;
}

</style>
