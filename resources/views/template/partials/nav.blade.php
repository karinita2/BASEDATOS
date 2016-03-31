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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administración <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('config.instituciones.index') }}">Instituciones</a></li>
            <li><a href="{{ route('config.grados.index') }}">Grados</a></li>
            <li><a href="{{ route('config.secciones.index') }}">Secciones</a></li>
            <li><a href="{{ route('config.materias.index') }}">Materias</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('config.instituciones_conf.index') }}">Configurar Institución</a></li>
            <li><a href="{{ route('config.materia_configs.index') }}">Configurar Materias</a></li>

            <li><a href="{{ route('config.rutas.index') }}">Configurar Rutas Escolares</a></li>
             
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('config.filiales.index') }}">Filiales</a></li>
            <li><a href="{{ route('config.nominas.index') }}">Nóminas</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('config.actividades.index') }}">Actividades</a></li>
            <li><a href="{{ route('config.c_medicas.index') }}">Condiciones Médicas</a></li>
            <li><a href="{{ route('config.tallas.index') }}">Tallas</a></li>
            <li><a href="{{ route('config.nivel_estudios.index') }}">Niveles de Estudio</a></li>
          </ul>
        </li>


         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registro <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Alumnos</a></li>
            <li><a href="#">Representantes</a></li>
            <li><a href="{{ route('registro.docentes.index') }}">Docentes</a></li>
  
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
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



