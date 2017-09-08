
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Backend AesorJuridico</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
   <!-- Bootstrap core CSS     -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="../../css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href="../../css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../../css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    
    <div class="sidebar" data-color="blue" data-image="../../img/sidebar-5.jpg">

    <!--
        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag
    -->
    <div class="sidebar-wrapper">
      <div class="logo">
          <a href="http://www.creative-tim.com" class="simple-text">
              Asesor Juridico
          </a>
      </div>

      <ul class="nav">
          <li class="active">
              <a href="">
                  <i class="pe-7s-graph"></i>
                  <p>Dashboard</p>
              </a>
          </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="collapse" href="#navDatabase"><i class="pe-7s-note2"></i><p>DataBase <span class="caret"></span></p></a>
        <div id="navDatabase" class="panel-collapse collapse">
          <a href="../../categorias"><i class="pe-7s-note2"></i><p style="color: white;">Categorias</p></a>
          <a href="../../chat"><i class="pe-7s-note2"></i><p style="color: white;">Chat</p></a>
          <a href="../../contadorPreguntas"><i class="pe-7s-note2"></i><p style="color: white;">Contador Preguntas</p></a>
          <a href="../../estados"><i class="pe-7s-note2"></i><p style="color: white;">Estados</p></a>
          <a href="../../notificacion"><i class="pe-7s-note2"></i><p style="color: white;">Notificaciones</p></a>
          <a href="../../preguntas"><i class="pe-7s-note2"></i><p style="color: white;">Preguntas</p></a>
          <a href="../../respuestas"><i class="pe-7s-note2"></i><p style="color: white;">Respuestas</p></a>
          <a href="../../tipoUsuario"><i class="pe-7s-note2"></i><p style="color: white;">Tipo Usuarios</p></a>
          <a href="../../usuarios"><i class="pe-7s-note2"></i><p style="color: white;">Usuarios</p></a>
        </div>
      </li>
      </ul>
  </div>
</div>

    <div class="main-panel">
        
        <nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                   <a href="">
                       <p>Perfil</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <p>Cerrar Sesión</p>
                    </a>
                </li>
        <li class="separator hidden-lg hidden-md"></li>
            </ul>
        </div>
    </div>
</nav>
        <div class="content">
            

          
  <h1>Categorias </h1>


<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
              <!-- generate table -->
                <div class="card" style="transform: translate3d(0px, 0px, 0px); opacity: 1;">
                    
            <!--formulario de categoria-->
            


<div class="container">
  <h2>Actualizar Usuarios</h2>
  <form action="../../usuarios" method="POST">
  {{ csrf_field() }}
  <div class="col-md-9">
  <input type="hidden" class="form-control" value="{{ $list[0]['id'] }}" id="id" name="id">
  <div class="form-group">
    <label for="nombre">Nombre: *</label>
    <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $list[0]['nombres'] }}">
  </div>
</div>
<div class="col-md-9">
  <div class="form-group">
    <label for="email">Email: *</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ $list[0]['email'] }}">
  </div>
</div>
<div class="col-md-9">
  <div class="form-group">
    <label for="clave">Clave: *</label>
    <input type="password" class="form-control" id="clave" name="clave" value="{{ $list[0]['clave'] }}">
  </div>
</div>
<div class="col-md-9">
  <div class="form-group">
    <label for="password1">Repita Clave: *</label>
    <input type="password" class="form-control" id="password1" name="password1" value="{{ $list[0]['clave'] }}">
  </div>
</div>
<div class="col-md-9">
  <div class="form-group">
    <label for="tipoUsuario">tipoUsuario: *</label>
    <input type="text" class="form-control" id="tipo_usuario" name="tipo_usuario" value="{{ $list[0]['tipo_usuario'] }}">
  </div>
</div>
<div class="col-md-9">
  <div class="form-group">
    <label for="categoria">categoria: *</label>
    <input type="text" class="form-control" id="categoria" name="categoria" value="{{ $list[0]['categoria'] }}">
  </div>
</div>
<div class="col-md-9">
  <div class="form-group">
    <label for="telefono">telefono: *</label>
    <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $list[0]['telefono'] }}">
  </div>
</div>
<div class="col-md-9">
  <div class="form-group">
    <label for="celular">celular: *</label>
    <input type="text" class="form-control" id="celular" name="celular" value="{{ $list[0]['celular'] }}">
  </div>
</div>
<div class="col-md-9">
  <div class="form-group">
    <label for="push_token">push_token: *</label>
    <input type="text" class="form-control" id="push_token" name="push_token" value="0" value="{{ $list[0]['push_token'] }}">
  </div>
</div>
<div class="col-md-9">
  <div class="form-group">
    <label for="terminos">terminos: *<small>1: acepta, 0: no acepta</small></label>
    <input type="text" class="form-control" id="terminos" name="terminos" value="1" value="{{ $list[0]['terminos'] }}">
  </div>
</div>
<div class="col-md-9">
  <div class="form-group">
    <label for="estados">urlImage </label>
    <input type="text" class="form-control" id="img" name="img" value="{{ $list[0]['img'] }}">
  </div>
</div>
  <div class="col-md-10">
    <button type="submit" name="actualizar" value="s" class="btn btn-primary">Update</button>
  </div>
  </form>
</div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  

        </div>

        <footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        Company
                    </a>
                </li>
                <li>
                    <a href="#">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                       Blog
                    </a>
                </li>
            </ul>
        </nav>
        <p class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://digit4l.co/">DIGIT4L </a>® Todos los derechos reservados   |  Digit4l  Agencia |  DES16N  
        </p>
        <p class="copyright pull-right" style="font-size: 11px;">La información contenida en ésta página y en todos sus archivos anexos, es confidencial y/o privilegiada y sólo puede ser utilizada por la(s) persona(s) a la(s) cual(es) está dirigida. Si usted no es el destinatario autorizado, cualquier modificación, retención, difusión, distribución o copia total o parcial de éste mensaje y/o de la información contenida en el mismo y/o en sus archivos anexos está prohibida y son sancionadas por la ley. Si por error recibe éste mensaje, le ofrecemos disculpas, sírvase borrarlo de inmediato, notificarle de su error a la persona que lo envió y abstenerse de divulgar su contenido y anexos.</p>
    </div>
</footer>

    </div>
</div>


</body>
    <!--   Core JS Files   -->
    <script src="../../js/jquery-1.10.2.js" type="text/javascript"></script>
  <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
  <!--  Checkbox, Radio & Switch Plugins -->
  <script src="../../js/bootstrap-checkbox-radio-switch.js"></script>
  <!--  Charts Plugin -->
  <script src="../../js/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../../js/bootstrap-notify.js"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
  <script src="../../js/light-bootstrap-dashboard.js"></script>
  <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
  <script src="../../js/demo.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
          demo.initChartist();
          $.notify({
              icon: 'pe-7s-gift',
              message: "Bienvenido<b> Asesor Juridico</b> - La mejor experiencia de un abogado."
            },{
                type: 'info',
                timer: 4000
            });
      });
  </script>
</html>