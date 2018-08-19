<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Acústica Arquitectónica</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">
</head>

<style>
#imagen {
    height: 157px;
}
</style>
<!-- <body style="background-color:#005D6E"> -->
<body>

  <!-- MENU DESPLEGABLE MOVIL -->
  <nav>

    <!-- ESTRUCTURA MENUS DESPLEGABLES-->
    <!-- REVESTIMIENTOS -->
    <ul id="revestimientos2" class="dropdown-content">
      <li><a href="entelado.html">Entelados</a></li>
      <li><a href="ranurado.html">Perforados y Ranurados</a></li>
      <li><a href="espuma.html">Espumas</a></li>
    </ul>

    <!-- DIFUSORES-->
    <ul id="difusores" class="dropdown-content">
      <li><a href="reflex01.html">Reflex-1D</a></li>
      <li><a href="reflex02.html">Reflex-2D</a></li>
      <li><a href="flutter.html">Flutter Free</a></li>      
    </ul>

    <!-- CIELOS-->
    <ul id="cielos" class="dropdown-content">
      <li><a href="#!">Cielos Acústicos</a></li>
      <li><a href="#!">Cielos Modulares</a></li>      
    </ul>

    <!-- AISLACION-->
    <ul id="aislacion" class="dropdown-content">
      <li><a href="#!">Tabiques</a></li>
      <li><a href="#!">Ventanas</a></li>      
    </ul>

    <!-- CLASE NAV + COLOR -->
    <div class="nav-wrapper deep-orange darken-4">
      <a href="index.html" class="brand-logo"><img src="images/portada/logo-blanco-miniatura.png"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>



      <!-- BARRA MENU PC/TABLET -->
      <ul class="right hide-on-med-and-down">
        <li><a href="obras.php">Obras</a></li>
        <li><a href="controlruido.html">Control de Ruido</a></li>
        <li><a href="puerta.html">Puertas</a></li>
        <li><a href="revestimiento.html"  data-activates="revestimientos2">Revestimientos</a></li>
        <li><a href="difusor.html">Difusores</a></li>
        <!--li><a href="">Cielos</a></li>
        <li><a href="">Aislación</a></li-->
        <li><a href="nosotros.html">Nosotros</a></li>
      </ul>

      <!-- BARRA MENU MOVILES -->
      <ul class="side-nav" id="mobile-demo">
        <li><a href="obras.php">Obras</a></li>
        <li><a href="controlruido.html">Control de Ruido</a></li>
        <li><a href="puerta.html">Puertas</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="revestimientos2">Revestimientos<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" href="#!" data-activates="difusores">Difusores<i class="material-icons right">arrow_drop_down</i></a></li>
        <!--li><a class="dropdown-button" href="#!" data-activates="cielos">Cielos<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" href="#!" data-activates="aislacion">Aislación<i class="material-icons right">arrow_drop_down</i></a></li-->
        <li><a href="nosotros.html">Nosotros</a></li>
      </ul>
    </div>
  </nav>

  <!-- FIN BARRA DE MENU -->

  <!-- CUERPO DE LA PAGINA -->  


 
  
  <!-- FOOTER -->
  <div class="row">

    <!-- FOOTER PUERTAS -->
    <?php include 'listarobras.php';?>

    
  
    <!-- FOOTER CONTACTO -->
    <div class="col s12 m6 l3">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Contáctanos</span>
          <p>(+56 2) 2548 1897</p>
          <p>contacto@ingmac.cl</p>
        </div>
      </div>
    </div>

  </div>

   <!--  Scripts-->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>


  <script>
      $(document).ready(function(){
        $(".button-collapse").sideNav();
        $('.materialboxed').materialbox();
        $(".dropdown-button").dropdown();
        $('.slider').slider();
      });
  </script>

  </body>
</html>
