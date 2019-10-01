<?php include('cab.php');  ?>


  <body>
    <div class="corpo">
<center>

    <h1>Materiais</h1>
<br><br><br><br><br><br>

<h2>Biologia</h2>
          <hr>
        <iframe width="800" height="400" id="primeiro" src="https://www.youtube.com/embed/eFKBRvEs8lU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> <br><br><br><br>
          <iframe width="800" height="400" id="primeiro" src="https://www.youtube.com/embed/eFKBRvEs8lU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> <br><br><br><br>
          <iframe width="800" height="400" id="primeiro" src="https://www.youtube.com/embed/eFKBRvEs8lU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> <br><br><br><br>
            <iframe width="800" height="400" id="primeiro" src="https://www.youtube.com/embed/eFKBRvEs8lU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br><br><br><br><br><br>

            <h2>Geografia</h2>
                      <hr>

                    <iframe width="800" height="400" id="primeiro" src="https://www.youtube.com/embed/sQewkYR4_sg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> <br><br><br><br>
                      <iframe width="800" height="400" id="primeiro" src="https://www.youtube.com/embed/sQewkYR4_sg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br><br><br>
                      <iframe width="800" height="400" id="primeiro" src="https://www.youtube.com/embed/sQewkYR4_sg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> <br><br><br><br>
                        <iframe width="800" height="400" id="primeiro" src="https://www.youtube.com/embed/sQewkYR4_sg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


    </center>

    </div>

</body>
</html>
<style media="screen">
@font-face{
  font-family: beaut;
  src: url(../Fontes/eva.otf);
}
fieldset{
  color: black;
}

  .navbar-header{
    height: 110px;
    animation: aparece 1s;
  }
  #img-logo{
     width: 8em;
    padding: 5px;
animation: aparece 1s;
transition: transform 0.3s linear 0.1s;
  }
  #img-logo:hover{
    transition: 0.4s;
    transform: scale(1.04);
  }
.arrumar{
    /* margin-top: 2em; */


  }
  h1{
  font-family: beaut;
  font-size: 3em;
  transition: transform 0.3s linear 0.1s;
  animation: aparece-img 1s;
  }
  h1:hover{
    transition: 0.4s;
    transform: scale(1.08);
	transition: 0.6s;
width: 360px;
  border-left: solid 1px black;
  }
  h2{
      font-family: beaut;
      font-size: 4em;
      transition: transform 0.3s linear 0.1s;
      animation: aparece-img 1s;
  }
  h2:hover{
    transition: 0.4s;
    transform: scale(1.12);
  transition: 0.6s;
    border-left: solid 1px black;
  width: 350px;
  }
  .login {
  color: white;
   font-size: 1px;
  }
   .menu_cabeça{
    font-family: trin;
animation: aparece 1s;
  }
  fieldset {
  display: block;
  margin-left: 2px;
  margin-right: 2px;
  padding-top: 0.35em;
  padding-bottom: 0.625em;
  padding-left: 0.75em;
  padding-right: 0.75em;
  border: 2px groove (internal value);
}
h3{
  display: none;
}
h1{
  margin-top: 2em;
  color: black;
  font-size:5em;

}
.corpo{
  margin:0 auto;
	width: 1024px;
	height: 5000px;

}
body{
  background-color: lightgray;
}
@-webkit-keyframes aparece {
   from {
       opacity: 0;
       transform: scale(0.001);

   }
}
@-webkit-keyframes aparece-img {
   from {
       opacity: 0;
       transform: scale(0.001);
       transform: rotate(180deg);

   }
}

    @media screen and (max-width: 600px) {
      #img-logo{
        width: 8em;

        padding: 3px;
        position: relative;
        top: -3.5em;
        left: 0.5em;
      }
      .menu_cabeça{
        position: relative;
        text-align: center;
        left: 1.2em;


      }
      #nome{
        position: relative;
        text-align: center;
         top:1.3em;
      }
      .navbar-toggle{
            margin-top: -17px;
      }
      .navbar-header{
        height: 120px;
      }
      .corpo{
        margin:0 auto;
      	width: 100%;
      	height: 5000px;
        background-color: lightgray;
      }
      iframe{

        width: 100%;
      }

      h3{
        display: inherit;
      }
    }

</style>
