<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img alt="Brand" src="{{ asset('images/logorojo.png') }}">
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Sistema de Escuelas <span class="sr-only">(current)</span></a></li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registro <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Alumnos</a></li>
            <li><a href="#">Docentes</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Configuración <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('config.instituciones.index') }}">Instituciones</a></li>
            <li><a href="{{ route('config.grados.index') }}">Grados</a></li>
            <li><a href="#">Secciones</a></li>
            <li><a href="#">Materias</a></li>
            <li><a href="#">Rutas Escolares</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Actividades</a></li>
            <li><a href="#">Condiciones Médicas</a></li>
            <li><a href="#">Tallas</a></li>
            <li><a href="#">Niveles de Estudio</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Filiales</a></li>
            <li><a href="#">Nóminas</a></li>
          </ul>
        </li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Evaluación <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">S/F</a></li>
           
          </ul>
        </li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Inscritos</a></li>
           
          </ul>
        </li>

      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Salir</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



