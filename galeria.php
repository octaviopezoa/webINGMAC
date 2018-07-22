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


<!-- <body style="background-color:#005D6E"> -->
<body>

  <!-- MENU DESPLEGABLE MOVIL -->
  <nav>

    <!-- CLASE NAV + COLOR -->
    <div class="nav-wrapper deep-orange darken-4">
      <a href="index.html" class="brand-logo"><img src="images/portada/logo-blanco-miniatura.png"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

      <!-- BARRA MENU PC/TABLET -->
      <ul class="right hide-on-med-and-down">
        <!--li><a href="">Obras</a></li-->
        <li><a href="usuarios.php">Usuarios</a></li>
        <li><a href="proyectos.php">Obras</a></li>
        <li><a href="galeria.php">Galería</a></li>
        <li><a href="">Salir</a></li>
      </ul>

      <!-- BARRA MENU MOVILES -->
      <ul class="side-nav" id="mobile-demo">
        <!--li><a href="">Obras</a></li-->
        <li><a href="usuarios.php">Usuarios</a></li>
        <li><a href="proyectos.php">Obras</a></li>
        <li><a href="galeria.php">Galería</a></li>
        <li><a href="">Salir</a></li>
      </ul>
    </div>
  </nav>

  <!-- FIN BARRA DE MENU -->

  <div class="row">
    <form class="center" action="gal_registro.php" enctype="multipart/form-data" method="post">
      <div class="row center">
        <h5>Galeria de Imágenes</h5>
   
        <div class="input-field col s12 m6 l4">
          <div class="select-wrapper">
            <?php include 'gal_listar_obra.php';?>               
            </div>
          <label>Elegir obra</label>
        </div>

        <div class="input-field col s12 m6 l4">
          <input name="imagen" id="imagen" type="file" class="validate">
          <br>         
        </div>  

        <div class="input-field col s12 m6 l4">
          <input name="descripcion" type="text" class="validate" placeholder="Descripcion">
          <label for="descripcion">Breve descripción de la foto</label>
        </div>

        <button class="waves-effect waves-light btn" type="submit" name="button" value="Enviar">Agregar</button>
      </div>
    </form>
  </div>


  <!-- LISTADO DE USUARIOS EXISTENTES -->
  <div class="row">
      <div class="row center">
      <h5>Administración</h5>

      <table class="centered">

          <thead>
            <tr>
                <th>Proyecto</th>
                <th>Descripcion</th>
                <th>imagen</th>
                <th>editar</th>
            </tr>
          </thead>
                
          <tbody>

              <?php include 'gal_listar.php'; ?>

          </tbody>
        </table>
  </div>
</div>        

  <!--  Scripts-->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/init.js"></script>
  <script src="js/materialize.js"></script>


  <script>
      $(document).ready(function(){
        $(".button-collapse").sideNav();
        $('.materialboxed').materialbox();
        $(".dropdown-button").dropdown();
        $('.slider').slider();
        $('select').material_select(); 
      });
  </script>

  </body>
</html>
