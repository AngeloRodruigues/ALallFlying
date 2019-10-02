<!DOCTYPE html>
<html>
<head>
	<title>Agencia de viajens</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="mate/css/materialize.css">
	<link rel="stylesheet" href="css/custom.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/gallery.theme.css">
	<link rel="stylesheet" type="text/css" href="css/gallery.min.css">
	
  <!-- Banco de dados -->
  <?php
  require 'sql/config.php';
  require 'sql/connect.php';
  require 'sql/database.php';
  
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $teste=DB_read('clientes','email');
  $t=$teste[0]['email'];
  if($t!=$email){echo "não existe";}
  ?>
	<style type="text/css">
    body {background-color:#e0e0e0; font-family: Tahoma,Arial;}
    #posiciona {
        position: absolute; /* posição absoluta ao elemento pai, neste caso o BODY */
        /* Posiciona no meio, tanto em relação a esquerda como ao topo */
        left: 55%; 
        top: 100%;
        width: 500px; /* Largura da DIV */
        height: 350px; /* Altura da DIV */
        /* A margem a esquerda deve ser menos a metade da largura */
        /* A margem ao topo deve ser menos a metade da altura */
        /* Fazendo isso, centralizará a DIV */
        margin-left: 100px;
        margin-top: 2px;
        background-color: #FFF;
        color: #FFF;
        background-color: #1a237e;
        text-align: center; /* Centraliza o texto */
        z-index: 1000; /* Faz com que fique sobre todos os elementos da página */
        box-shadow: 1px 1px 5px white;
    }
    #fechar { margin: 5px; font-size: 12px; }
  </style>
  <script>
    function fechar() { 
        document.getElementById("posiciona").style.display = 'none'; 
    }
 </script>
 <script>
 function Mudarestado(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }
 </script>

<script>
	 $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
  });
</script>

</head>
<body>
 <!-- Menu/Cabeçalho -->
  <nav class="blue darken-4 z-depth-5">
    <div class="nav-wrapper">
      
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><a href="index.html">Menu</a></li>
        <li><a href="pacotes.html">Pacotes</a></li>
        <li><a href="Viajar.html">Quero viajar</a></li>
     	<span id="conta">
     	<li onclick="Mudarestado('posiciona')"><a><i class="material-icons large" >account_circle</i></a></li>
     	<span onclick="Mudarestado('posiciona')"><?php $a="Angelo"; echo $a; ?></span>
        </spa>
      </ul>
     	
     <div id="posiciona"> 
		<div id="fechar" align=right><a href="javascript:fechar();">FECHAR</a></div> 
		<h5>Acesse sua conta<h5><br>

	<form id="EntrarForm" action="logado.php" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <input data-length="40" id="email" type="email" class="validate" name="email">
          <label data-error="Digite um email valido!" for="email">E-mail</label>

        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate"  data-length="100" name="senha">
          <label data-error="Digite uma senha valida!"  for="password">Senha</label>
        </div>
      </div>
      <input class="classname" type="submit" value="Entrar">
    </form>
		<h6><a href="Cadastro.html">--> Cadastre-se <--</a></h6>
     </div> 
     <ul>
      	<li>
      		<a href="javascript:void(0)">
      		<i class="material-icons large">language</i>
      		</a>
      	</li>
      </ul>

      <ul>
      	<li>
      		<a href="index.html" class="brand-logo" id="header_logo">AL All Flying</a>
      	</li>
      	
      </ul>
  </nav>
   <!-- ------------------- -->

 <!-- Corpo do site -->

  <div class="parallax-container">
      <div class="parallax"><img src="images/fundo22.jpg"></div>
    </div>        

<pre>
 	
 </pre>

<div id="corpo">
<h2>Promoções atuais</h2>

<center>
 <div id="gallery" class="gallery items-5">
 	<div id="item-1" class="control-operator"></div>
 	<div id="item-2" class="control-operator"></div>
 	<div id="item-3" class="control-operator"></div>
 	<div id="item-4" class="control-operator"></div>
 	<div id="item-5" class="control-operator"></div>

 	<figure class="item">
 		<h1><img src="imagens/img1.jpg"></h1>
 	</figure>

 	<figure class="item">
 		<h1><img src="imagens/img2.jpg"></h1>
 	</figure>

 	<figure class="item">
 		<h1><img src="imagens/img3.jpg"></h1>
 	</figure>

 	<figure class="item">
 		<h1><img src="imagens/img4.jpg"></h1>
 	</figure>

 	<figure class="item">
 		<h1><img src="imagens/img5.jpg"></h1>
 	</figure>

 	<div class="controls">
 		<a href="#item-1" class="control-button">1</a>
 		<a href="#item-2" class="control-button">2</a>
		<a href="#item-3" class="control-button">3</a>
		<a href="#item-4" class="control-button">4</a>
		<a href="#item-5" class="control-button">5</a>
	</div>
</div>
</center>

</div>

<div class="parallax-container">
      <div class="parallax"><img src="images/fundo22.jpg"></div>
    </div>  

<div id="corpo">  
  <h2>Pacotes</h2>
  <pre>
    


  </pre>
</div>

<!-- ------------------- -->











<!-- Materialize -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="mate/js/materialize.js"></script>
<script> 
 $(document).ready(function(){
    $('.parallax').parallax();
  });
</script>
</body>
</html>