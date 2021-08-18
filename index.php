<!DOCTYPE html>
<html lang="es">
<head>
  <title>4inkPress</title>
  <link rel="icon" type="image/png" href="4inkpress/2n.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform:;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 20px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 20px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 50px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: black;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 40px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  
  </style>
</head>
<body style="background:" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <img src="4inkpress/2n.jpg" height="45" weight="35">
      <tt style="color: white; font-size: 13">4inkpress@gmail.com
      <a style="color: black;font-size: 14pt; background: white" href="http://wa.me/525627194396">+52 56 2719 4396</a>
      </tt>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="#about">SOBRE</a></li>-->
        <li><a href="#promocion">PROMOCION</a></li>
        <li><a href="#tarjetas">TARJETAS</a></li>
        <li><a href="#volantes">VOLANTES</a></li>
        <li><a href="#paquetes">PAQUETES</a></li>
        <li><a href="#contacto">CONTACTO</a></li>
        <!--<li><a href="#lonas">LONAS</a></li>
        <li><a href="#separadores">SEPARADORES</a></li>
        <li><a href="#serigrafia">SERIGRAFIA</a></li>-->
      </ul>
    </div>
  </div>
</nav>
<br>
<!-- Container (About Section) -->
<div  id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-12" align="center">
      <h2>Tipo y Material</h2>
    <!---->
      <div style="background: black" align="center" class="container-fluid ">
        <img src="4inkpress/gif.gif" height="100" weight="200">
      </div>
    <!--<br><button class="btn btn-default btn-lg"></button>-->
    </div>
  </div>
</div>

<!--
<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Experiencia</h2><br>
      <h4><strong>Motivo:</strong> </h4><br>
      <p><strong>VISION:</strong> </p>
    </div>
  </div>
</div>
-->
<!-- Container (Services Section) -->
<div id="promocion" class="container-fluid text-center">
  <h2>Promocion</h2>
  <h4>Varios</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-off logo-small"></span>-->
      <a href="">
        <img src="4inkpress/6.jpg" height="150" weight="150">
        <h4>150 Tarjetas x "$ 220.00 "</h4>
      </a>
      <p></p>
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-heart logo-small"></span>-->
  <img src="4inkpress/7.jpg" height="150" weight="150">
    <a href="">
      <h4>Lonas 3x3 a "$540.oo"</h4>
      </a>
      <p></p>
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-lock logo-small"></span>-->
      <img src="4inkpress/4.png" height="150" weight="150">
      <a href="">
      <h4>Volantes 1000 x $ 350.oo</h4>
      </a>
      <p></p>
    </div>
  
<!--
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">Trabajo y Hogar</h4>
      <p></p>
    </div>
  </div>
-->
</div>

<!-- Container (Portfolio Section) -->
<div id="tarjetas" class="container-fluid text-center bg-grey">
  <h2>Tarjetas</h2><br>
  <h4></h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <p><strong>3 Colores</strong></p>
        <p><img src="4inkpress/3.jpg"></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <p><strong>Impreso</strong></p>
        <p><img src="4inkpress/2.png"></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <p><strong>2 vistas</strong></p>
        <p><img src="4inkpress/1.jpg"></p>
      </div>
    </div>
  </div><br>
  
  
  <h2>volantes</h2>
  <div id="volantes" class="carousel slide text-center" data-ride="carousel">
  
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

  
    <div class="carousel-inner slideanim" role="listbox" style="display:none;">
      <div class="item active">
        <h4><img src="4inkpress/5.png"><br><span style="font-style:normal;"></span></h4>
      </div>
      <div class="item">
        <h4><img src="4inkpress/7.jpg"><br><span style="font-style:normal;"></span></h4>
      </div>
      <div class="item">
        <h4><img src="4inkpress/6.jpg" ><br><span style="font-style:normal;"></span></h4>
      </div>
    </div>

    <!-- Left and right controls 
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previo</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Proximo</span>
    </a>
-->
  </div>
</div>

<!-- Container (Pricing Section)-->


  <div class="text-center" id="paquetes" style="">
    <h2>Paquetes</h2>
    <h4>Escoje el plan para trabajar</h4>
  </div>
  <div class="row slideanim" style="display:;">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basico</h1>
        </div>
        <div class="panel-body">
          <p><strong>$ 20</strong> </p>
          <p><strong>$ 15</strong> </p>
          <p><strong>$ 5</strong> </p>
          <p><strong>$ 2</strong> </p>
          <p><strong>Endless</strong> </p>
        </div>
        <div class="panel-footer">
          <h3>$19</h3>
          <h4>por mes</h4>
          <button class="btn btn-lg">Agregar</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Profesional</h1>
        </div>
        <div class="panel-body">
          <p><strong>$ 50</strong> </p>
          <p><strong>$ 25</strong> </p>
          <p><strong>$ 10</strong> </p>
          <p><strong>$ 5</strong> </p>
          <p><strong>Endless</strong> </p>
        </div>
        <div class="panel-footer">
          <h3>$29</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Agregar</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <p><strong>$ 100</strong></p>
          <p><strong>$ 50</strong></p>
          <p><strong>$ 25</strong></p>
          <p><strong>$ 10</strong></p>
          <p><strong>Endless</strong></p>
        </div>
        <div class="panel-footer">
          <h3>$49</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Agregar</button>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contacto" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACTO</h2>
  <div class="row">
    <div class="col-sm-5 slideanim">
      <p></p>
      <!--<p><span class="glyphicon glyphicon-map-marker"></span> Jardines de la Hda.   Cuatitlan Izcalli , Mex</p>-->
      <p>Celular<span class="glyphicon glyphicon-phone"></span>+01(044)5563310702 </p>
      <p><span class="glyphicon glyphicon-envelope"></span> 4inkpress@gmail.com</p>
      <div id="pagina" style="background-color: "></div><br>
    </div>

    <script src="ajax4ink.js" type="text/javascript"></script>
    <script src="dom4ink.js" type="text/javascript"></script>

    <div class="col-sm-7 slideanim" style="display:none">
      <div class="row">
      <h4 align="left">Usuario :: Mensajes</h2>
        
        <div class="col-sm-6 form-group">
          <form name="nuevo_empleado" action="" onSubmit="enviarMensaje4ink(); return false">
            <input class="form-control" id="usuario" name="usuario" type="text" placeholder="Name"><br>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" type="text" placeholder="Email"<p><br>
        </div>
      </div>
      <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Message" required></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
           <input class="form-control" onclick="myFunctionB()" id="enviar" type="submit" name="Submit" value="Enviar" />
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="videos" style="display: none;" class="container-fluid slideanim" >
  <div class="text-center" >
    <h2>Videos</h2>
    <div class="col-sm-4">
      <h3>Control de Invernadero con base de datos</h3>
      <iframe width="260" height="150" src="https://www.youtube.com/embed/SzJVJsJ6hps" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col-sm-4">
      <h3>Diseño en 3d, maqueta de HouseTor</h3>
      <iframe width="260" height="150" src="https://www.youtube.com/embed/EWo6LLcOmuY" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col-sm-4">
      <h3>Carro blutooth celular con pila de lap-top</h3>
      <iframe width="260" height="150" src="https://www.youtube.com/embed/i6lDjgvjNLs" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col-sm-4">
      <h3>Yamaha R6 - presión de aire Sensor Oem </h3>
      <iframe width="260" height="150" src="https://www.youtube.com/embed/y85IRt_wZ6w" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col-sm-4">
      <h3>WinXp on VirtualBox in Ubuntu 14.04 Lts</h3>
      <iframe width="260" height="150" src="https://www.youtube.com/embed/aphooO2ZW7E" frameborder="0" allowfullscreen></iframe><br>
    </div>
    <div class="col-sm-4">
      <h3>Pruebas de Web Server</h3>
      <iframe width="260" height="150" src="https://www.youtube.com/embed/FjJIfbwibjg" frameborder="0" allowfullscreen></iframe>
    </div>
</div>
</div>

<footer class="container-fluid text-center" style="display: none;">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up">
      <img src="/Imagenes/fs-gang.png" style="width:580px;height:150px;"">
    </span><br>
  </a>
  Creation and Design for LINUGUX iNX.<br>
  <a href="http://linugux.ddns.net" title="Creacion y Dise�o">
  http://linugux.ddns.net</a><p></p>
  <p>LINUGUX iNX. <img src="Imagenes/copyleft.png" alt="LINUGUX iNX." style="width: 30px;height:30px;"> CopyLeft 1996, 2019</p>
  This page is licensed under a Creative Commons
  <img src="Imagenes/by-nc-sa.png" alt="LINUGUX iNX." style="width: 100px;height:30px;">
  </p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>


