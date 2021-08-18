<html>
  <head>
    <title>Bienvenido a 4inkPress</title>
    <link rel="icon" type="image/png" href="4inkpress/2n.jpg">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="ajax4ink.js" type="text/javascript"></script>
    <script src="dom4ink.js" type="text/javascript"></script>
    <link rel="stylesheet" href="alert/themes/alertify.core.css" />
    <link rel="stylesheet" href="alert/themes/alertify.default.css" id="toggleCSS" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="alert/lib/alertify.min.js"></script>
    <script type="text/javascript" src="prototype.js"></script>
  </head>

  <body text="white" background="" bgcolor="black">
	 <nav class="navbar navbar-default navbar-fixed-top">
     <div class="container">
        <div class="navbar-header">
	      
			       <b style="color: red;font-size: 20pt; background: white">http://4inkpress.ddns.net</b>
             Gmail: <a style="color: black;font-size: 15pt; background: white">ventas.4inkpress@gmail.com</a> 
             Celular: <a style="color: black;font-size: 15pt; background: white">+01 (044) 5563310702</a>
             <img style="width:150px;height:48px;" src="4inkpress/2n.jpg">
	   </div>
	 </div>
	</nav>
	
  <style type="text/css">
  .boton_personalizado{
    text-decoration: none;
    padding: 10px;
    font-weight: 200;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 10px;
    border: 2px solid #0016b0;
  }
  .boton_personalizado:hover{
    color: #1883ba;
    background-color: #ffffff;
  }
   .boton0_personalizado{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 30px;
    color: #ffffff;
    background-color: #fe33ba;
    border-radius: 50px;
    border: 1px solid #0016b0;
  }
  .subMenu{
    font-size: 25px;
    color: white;
  }
</style>
	<div class="flex-container">
	 <div id="navcontainer" align="left">
	  <nav class="nav">
    	   <ul id="menu">
           <table >
            <tr>
              <th><input type="button" class="boton_personalizado" value="Tarjetas Presentacion" id="Button0" onClick="changetext0()"></th>
            </tr>
            <tr>
              <th><input type="button" class="boton_personalizado" value="Volantes" id="Button1" onClick="changetext1()"></th>
            </tr>
            <tr>
              <th><input type="button" class="boton_personalizado" value="Lonas" id="Button3" onClick="changetext3()"></th>
            </tr>
              
              <!--<th><input type="button" class="boton_personalizado" value="Presentacion" id="Button4" onClick="changetext4()"></th>-->
            
            <tr>
              <th><input type="button" class="boton_personalizado" value="Separadores" id="Button2" onClick="changetext2()"></th>
            </tr>
            <tr>
              <th><input type="button" class="boton_personalizado" value="Serigrafia" id="Button5" onClick="changetext5()"></th>
            </tr>
          </table> 
	   </ul>
	</nav>
	</div>
	</div>

<script type="text/javascript">

  function changetext0() {
              $(document).ready(function(){
                        $("#cuerpo").toggle(1000);
                        $("#tarjetas").toggle(1000);
                        $("#Button1").toggle(1000);
                        $("#Button2").toggle(1000);
                        $("#Button3").toggle(1000);
                        $("#Button4").toggle(1000);
                        $("#Button5").toggle(1000);
                        
                       });
                 var elem = document.getElementById("Button0");
                if (elem.value=="Tarjetas Presentacion")
                    { 
                        elem.value = "Regresa Menu";
                    }
                else
                 {
                     elem.value = "Tarjetas Presentacion";
                 }
            } 
  function changetext1() {
              $(document).ready(function(){
                        $("#cuerpo").toggle(1000);
                        $("#volantes").toggle(1000);
                        $("#Button0").toggle(1000);
                        $("#Button2").toggle(1000);
                        $("#Button3").toggle(1000);
                        $("#Button4").toggle(1000);
                        $("#Button5").toggle(1000);
                        
                       });
                 var elem = document.getElementById("Button1");
                if (elem.value=="Volantes")
                    { 
                        elem.value = "Regresa Menu";
                    }
                else
                 {
                     elem.value = "Volantes";
                 }
            }
  function changetext2() {
              $(document).ready(function(){
                        $("#cuerpo").toggle(1000);
                        $("#separadores").toggle(1000);
                        $("#Button1").toggle(1000);
                        $("#Button0").toggle(1000);
                        $("#Button3").toggle(1000);
                        $("#Button4").toggle(1000);
                        $("#Button5").toggle(1000);
                        
                       });
                 var elem = document.getElementById("Button2");
                if (elem.value=="Separadores")
                    { 
                        elem.value = "Regresa Menu";
                    }
                else
                 {
                     elem.value = "Separadores";
                 }
            }
  function changetext3() {
              $(document).ready(function(){
                        $("#cuerpo").toggle(1000);
                        $("#lonas").toggle(1000);
                        $("#Button1").toggle(1000);
                        $("#Button2").toggle(1000);
                        $("#Button0").toggle(1000);
                        $("#Button4").toggle(1000);
                        $("#Button5").toggle(1000);
                        
                       });
                 var elem = document.getElementById("Button3");
                if (elem.value=="Lonas")
                    { 
                        elem.value = "Regresa Menu";
                    }
                else
                 {
                     elem.value = "Lonas";
                 }
            }
    function changetext4() {
              $(document).ready(function(){
                        $("#cuerpo").toggle(1000);
                        $("#presentacion").toggle(1000);
                        $("#Button1").toggle(1000);
                        $("#Button2").toggle(1000);
                        $("#Button3").toggle(1000);
                        $("#Button0").toggle(1000);
                        $("#Button5").toggle(1000);
                        
                       });
                 var elem = document.getElementById("Button4");
                if (elem.value=="Presentacion")
                    { 
                        elem.value = "Regresa Menu";
                    }
                else
                 {
                     elem.value = "Presentacion";
                 }
            }
    function changetext5() {
              $(document).ready(function(){
                        $("#cuerpo").toggle(1000);
                        $("#serigrafia").toggle(1000);
                        $("#Button1").toggle(1000);
                        $("#Button2").toggle(1000);
                        $("#Button3").toggle(1000);
                        $("#Button4").toggle(1000);
                        $("#Button0").toggle(1000);
                        
                       });
                 var elem = document.getElementById("Button5");
                if (elem.value=="Serigrafia")
                    { 
                        elem.value = "Regresa Menu";
                    }
                else
                 {
                     elem.value = "Serigrafia";
                 }
            }

    $("#enviar").on( 'click', function () {
                        reset();
                        alertify.custom = alertify.extend("custom");
                        alertify.custom("GRacias por Tu mensaje");

                });

</script>

  <div align="center" id="cuerpo">
  <img width="100%" src="4inkpress/gif.gif">
	 <h3 style="color: rgb(210,210,210);">Mensajes</h3>
   <table style="width:80%">
    <tr>
     <th>
       <form name="nuevo_empleado" action="" onSubmit="enviarMensaje4ink(); return false">
        <input id="usuario" name="usuario" type="text" placeholder="Nombre"><br>
        <input id="email" name="email" type="text" placeholder="Telefono o Email"<p><br>
        <strong><textarea id="mensaje" name="mensaje" cols="30" rows="3" placeholder="Mensaje Aqui !!" required></textarea></strong><br>
        <input onclick="myFunctionB()" id="enviar" type="submit" name="Submit" value="Enviar" />
      </form>
     </th>
    <th>
     <div id="pagina" style="background-color: black"></div><br>
    </th>
   </tr>
  </table>
  
	</div>

  <div id="tarjetas" align="center" style="display: none"><br>
    <h1>Tarjetas</h1>
    <table style="width:50%">
            <tr>
              <th><li><a class="boton0_personalizado" >Tipos</a></li></th>
              <th><li><a class="boton0_personalizado" >Material</a></li></th>
              <th><li><a class="boton0_personalizado" >Promocion</a></li></th>
            </tr>
            </table>
    <br>
   <img width="50%" src="4inkpress/6.jpg"> 
  </div>

  <div id="volantes" align="center" style="display: none"><br>
    <h1>Volantes</h1>
    <table style="width:50%">
            <tr>
              <th><li><a class="boton0_personalizado" >Tipos</a></li></th>
              <th><li><a class="boton0_personalizado" >Material</a></li></th>
              <th><li><a class="boton0_personalizado" >Promocion</a></li></th>
            </tr>
            </table>
    <br>
   <img width="50%" src="4inkpress/7.jpg"> 
  </div>

  <div id="separadores" align="center" style="display: none"><br>
    <h1>Separadores</h1>
    <table style="width:50%">
            <tr>
              <th><li><a class="boton0_personalizado" >Tipos</a></li></th>
              <th><li><a class="boton0_personalizado" >Material</a></li></th>
              <th><li><a class="boton0_personalizado" >Promocion</a></li></th>
            </tr>
            </table>
    <br>
   <img width="50%" src="4inkpress/4.png"> 
  </div>

  <div id="lonas" align="center" style="display: none"><br>
    <h1>Lonas</h1>
    <table style="width:50%">
            <tr>
              <th><li><a class="boton0_personalizado" >Tipos</a></li></th>
              <th><li><a class="boton0_personalizado" >Material</a></li></th>
              <th><li><a class="boton0_personalizado" >Promocion</a></li></th>
            </tr>
            </table>
    <br>
   <img width="50%" src="4inkpress/1.jpg"> 
  </div>

  <div id="presentacion" align="center" style="display: none"><br>
    <h1>Presentacion</h1>
    <table style="width:50%">
            <tr>
              <th><li><a class="boton0_personalizado" >Tipos</a></li></th>
              <th><li><a class="boton0_personalizado" >Material</a></li></th>
              <th><li><a class="boton0_personalizado" >Promocion</a></li></th>
            </tr>
            </table>
    <br>
   <img width="50%" src="4inkpress/2.png"> 
  </div>

  <div id="serigrafia" align="center" style="display: none"><br>
    <h1>Serigrafia</h1>
    <table style="width:50%">
            <tr>
              <th><li><a class="boton0_personalizado" >Tipos</a></li></th>
              <th><li><a class="boton0_personalizado" >Material</a></li></th>
              <th><li><a class="boton0_personalizado" >Promocion</a></li></th>
            </tr>
            </table>
    <br>
   <img width="20%" src="4inkpress/3.jpg"> 
  </div>

    <footer align="center">
    <center>
      <img src="4inkpress/2n.jpg" style="width:50px;height:50px;">
      
      <p style="font-size: 9">LINUGUX iNX. <img src="../Imagenes/copyleft.png" alt="LINUGUX iNX." style="width: 20px;height:20px;"> CopyLeft 1996, 2019</p>

  </center>
    </footer>
  </body>
</html>
