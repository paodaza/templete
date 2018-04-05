<?php /*--------validar letras--------------------------*/

function validaAlpha($variable){
  if (isset($variable)) {
    if (ctype_alpha($variable) && !empty($variable)) {
      return $variable;
    }
  }
}


/*--------validar numeros--------------------------*/
function validaNumeros($variable){
  if (is_numeric($variable) && !empty($variable)) {
    if ($variable >= 10) {
      return $variable;
    }
  }
}
/*------------validar e-mail------------------------*/
/*function validaEmail($variable){
  if(isset($variable) && !empty($variable)){
    echo "comentario: $variable";
  }elseif (empty($variable)) {
    echo "no puede estar vacio";  }
}*/
/*--------------------------------------------------*/

session_start();

$_SESSION['name']=validaAlpha($_POST["name"]);
$_SESSION['apellido']=validaAlpha($_POST["apellido"]);
$_SESSION['asunto']=validaAlpha($_POST["asunto"]);
$_SESSION['mensaje']=validaAlpha($_POST["mensaje"]);
$_SESSION['number']=validaNumeros($_POST["number"]);
/*$_SESSION['correo']=validaEmail($_POST["correo"]);*/



if (!isset($_SESSION['name'])) {
  $msjerror.="&name=errr";
}

if (!isset($_SESSION['apellido'])) {
  $msjerror.="&apellido=errr";
}

if (!isset($_SESSION['asunto'])) {
  $msjerror.="&asunto=errr";
}

if (!isset($_SESSION['mensaje'])) {
  $msjerror.="&mensaje=errr";
}

if (!isset($_SESSION['number'])) {
  $msjerror.="&number=errr";
}

/*if (!isset($_SESSION['correo'])) {
  $msjerror.="&correo=errr";
}*/

if (isset($msjerror)) {
header('location:onecolumn.php?'.$msjerror);
}
/*-----------validar correo--------------------------*/


?>


<!DOCTYPE html>
<!--
	Autonomy by TEMPLATED    templated.co @templatedco    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)-->
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Autonomy by TEMPLATED</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900"

      rel="stylesheet" type="text/css">
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/init.js"></script> <noscript>
			<link rel="stylesheet" href="css/skel-noscript.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/style-desktop.css">
		</noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
  </head>
  <body>
    <!-- Header -->
    <div id="header">
      <div class="container">
        <!-- Logo -->
        <div id="logo">
          <h1><a href="#"> </a></h1>
          <h1><a href="#">PAOLA DAZA</a></h1>
        </div>
        <!-- Nav -->
        <nav id="nav">
          <ul>
            <li><a href="index.html">INICIO</a><a href="index.html"></a></li>
            <li><a href="twocolumn1.html">INFORMACION PERSONAL</a><a href="twocolumn1.html"></a></li>
            <li><a href="twocolumn2.html">INFORMACION PROFESIONAL</a><a href="twocolumn2.html"></a></li>
            <li class="active"><a href="onecolumn.html">FORMULARIO</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- Header -->
    <div id="banner">&nbsp;</div>
    <div id="featured">
      <div class="container">
        <div class="row">
          <div class="12u">
            <section>
              <header>
                <h2>CONTACTO</h2>
              </header>
              <form method="post" action="for.php">

                <div class="for">
              <span><h2>Su informacion</h2></span>
                </div>
<br>
                <div class="for">
                <label>Nombre :</label>
                <input type="text" name="name" required=""
                value="<?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?>" >
                </div>
<br>
                <div class="for">
                <label>Apellido :</label>
                <input type="text" name="apellido" required=""
                value="<?php if(isset($_SESSION['apellido'])) echo $_SESSION['apellido']; ?>" >
                </div>
<br>
                <div class="for">
                <label>Correo :</label>
                <input type="text" name="correo" 
                value="<?php if(isset($_SESSION['correo'])) echo $_SESSION['correo']; ?>" >
                </div>
<br>
                <div class="for">
                <label>Telefono :</label>
                <input type="number" name="number" required=""
                value="<?php if(isset($_SESSION['number'])) echo $_SESSION['number']; ?>" >
                </div>
<br>
                <div class="for">
                <label>Asunto :</label>
                <input class="<?php if(isset($_GET['asunto'])) echo 'error'; ?>" type="text" name="asunto"
                value="<?php if(isset($_SESSION['asunto'])) echo $_SESSION['asunto']; ?>" required=""> 
                </div>
<br>
                <div class="for">
                <label>Mensaje :</label>
                <textarea  class="<?php if(isset($_GET['mensaje'])) echo 'error'; ?>" type="mensaje" name="mensaje" ><?php if(isset($_SESSION['mensaje'])) echo $_SESSION['mensaje']; ?></textarea>
                </div>


              </form>


              <br>
            </section>
          </div>
        </div>
      </div>
    </div>
    <div id="marketing">
      <div class="container">
        <div class="row">
          <div class="3u">
            <section>
              <header>
                <h2>LUGARES QUE QUIERO CONOCER</h2>
                <h2></h2>
              </header>
              <ul class="style1">
                <li class="first"><img src="images/pics06.jpg" alt="" style="width: 223px; height: 223px;">
                  <p><span>Bañada por las cristalinas aguas del mar Adriático, Galesnjak en
                      Croacia, es una de las pocas islas que tiene forma natural
                      de corazón</span></p>
                </li>
                <li class="first"><br>
                </li>
                <li><img src="images/pics07.jpg" alt="" style="width: 227px; height: 227px;">
                  <p>Paris, la torre eiffel.</p>
                </li>
                <li><br>
                </li>
                <li>
                <img src="images/pics08.jpg" alt="" style="width: 251px; height: 196px;">
                    <span>Cuando Puerto Mosquito
                    se encuentra a oscuras,
                    las luces de las estrellas no solo se encuentran sobre ti,
                    sino también en el mar.</span> </li>
              </ul>
            </section>
          </div>
          <div class="3u">
            <section>
              <header>
                <h2><br>
                </h2>
              </header>
              <ul class="style1">
                <li class="first"><br>
                </li>
              </ul>
            </section>
          </div>
          <div class="6u">
            <section>
              <header>
                <h2>GINA PAOLA DAZA PALECHOR</h2>
                <h2></h2>
              </header>
              <a href="#" class="image full"><img src="images/pics12.jpg" alt=""></a>
              <p>&nbsp;</p>
            </section>
          </div>
        </div>
      </div>
    </div>
    <div id="main">
      <div class="container">
        <div class="row">
          <div class="8u">
            <section>
              <header>
                <h2>  ESTUDIO EN SENA-UNICUCES </h2>
              </header>
              <img src="images/SENA-1.png" alt="" style="width: 360px; height: 208px;">
             <img src="images/uni.png"  alt="" style="width: 347px; height: 198px;">
            </section>
          </div>
          <div class="4u">
            <section>
              <header>
                <h2>ESTUDIO ANALISIS DE DESARROLLO DE SISTEMA DE INFORMACION</h2>
             </header>
              <ul class="style">
              </ul>
            </section>
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright -->
    <div id="copyright">
      <div class="container"> Design: <a href="http://templated.co">TEMPLATED</a>
        Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
      </div>
    </div>
  </body>
</html>
