<?php

@session_start();
if(!empty($_SESSION['usuario_Nome'])){
  $lo = $_SESSION['usuario_Nome'];
}else{
  $lo = "login";
}
 echo "
<!DOCTYPE html>
<html lang='pt-br' dir='ltr'>
  <head>
    <meta charset='utf-8'>

  <meta http-equiv=”content-type” content='text/html;' />
  <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' />

     <meta charset='utf-8'>
     <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' />
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

<link rel='icon'  href='https://cdn2.iconfinder.com/data/icons/occean-and-sea-life-2/48/153-512.png'>

  <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js' integrity='sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4' crossorigin='anonymous'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js' integrity='sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1' crossorigin='anonymous'></script>
<link rel='stylesheet' href='master.css'>


  </head>

  				<nav class='navbar navbar-inverse navbar-fixed-top' style='background-color: rgb(36,36,36); border-bottom: 0px;' >
  					<div class='container'>
  						<div class='navbar-header'>

            	<h3 class='menu_cabeça' id='nome'  style='color:white; font-family: beaut;'>QuizMania</h3>

  						<a href='Index.php'>	 <img id='img-logo' src='../img/das.png'></a>


  							<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#links-menu' style='background-color: white;'>

  								<i class='material-icons'>menu</i>
  							</button>
  						</div>
  						<nav id='links-menu' class='collapse navbar-collapse'>
  							<ul class='nav navbar-nav navbar-right'>




  										<li class='nav-item'><a href='rank.php' class='nav-link'> <p class='menu_cabeça nav-item'  style='color:white;font-size:2.2em;font-family: beaut;'> Rank </p></a></li>
  								<li class='nav-item'><a href='Biologia.php'> <p  class='menu_cabeça ' style='color:white;font-size:2.2em; font-family: beaut;'>Biologia</p></a></li>
  								<li class='nav-item'><a href='Geografia.php'> <p class='menu_cabeça nav-item'  style='color:white;font-size:2.2em;font-family: beaut;'>Geografia</p></a></li>
                  
                        	<li class='nav-item'><a href='Login.php'> <p class='menu_cabeça nav-item'  style='color:white;font-size:2.2em;font-family: beaut;'>".$lo."</p></a></li>



  							</ul>
  						</nav>
  					</div>
  				</nav>


  <body>
    <div class='corpo'>






<style>@font-face{
  font-family: beaut;
  src: url(../Fontes/eva.otf);
}</style>
";?>
