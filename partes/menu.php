<?php $classActive = ""; ?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <?php paginaActiva(["index.php", ""], $classActive);?>
        <li <?php echo $classActive ?>><a href="<?php echo getURLAbsolute(); ?>">Home</a></li>
        <?php if(isset($_SESSION["usuario"])){ ?>
        	<?php paginaActiva("paginas/chatroom.php", $classActive);?>
        	<li <?php echo $classActive ?>><a href="<?php echo getURLAbsolute().'paginas/chatroom.php'; ?>">Chat Room</a></li>
        <?php } ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<?php if(!isset($_SESSION["usuario"])){ ?>
	        <?php paginaActiva("index2.php", $classActive); ?>
	        <li <?php echo $classActive ?>><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión</a></li>
	        <?php paginaActiva("paginas/registro.php", $classActive); ?>  
	        <li <?php echo $classActive ?>><a href="<?php echo getURLAbsolute().'paginas/registro.php'; ?>"><span class="glyphicon glyphicon-user"></span> Registro</a></li>
        <?php }else{ ?>
        	<?php paginaActiva("paginas/modificar.php", $classActive, "dropdown"); ?>  
          <li <?php echo $classActive ?>>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-user"></span>
                <strong><?php echo $_SESSION['usuario']['usuario']; ?></strong>
                <span class="glyphicon glyphicon-chevron-down"></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <div class="navbar-login">
                        <div class="row">
                            <div class="col-lg-4">
                                <p class="text-center">
                                    <span class="glyphicon glyphicon-user icon-size"></span>
                                </p>
                            </div>
                            <div class="col-lg-8">
                                <p class="text-left"><strong><?php echo $_SESSION['usuario']['nombre']." ".$_SESSION['usuario']['apellidos']; ?></strong></p>
                                <p class="text-left small"><?php echo $_SESSION['usuario']['email'] ?></p>
                                <p class="text-left">
                                    <a href="<?php echo getURLAbsolute().'paginas/modificar.php'; ?>" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="divider"></li>
                <li>
                    <div class="navbar-login navbar-login-session">
                        <div class="row">
                            <div class="col-lg-12">
                                <p>
                                    <a href="<?php echo getURLAbsolute(); ?>php/logout.php" class="btn btn-danger btn-block">Cerrar Sesion</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>


<!-- Menu login modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Iniciar Sesión</h4>
      </div> <!-- /.modal-header -->

      <div class="modal-body">
        <form action="<?php echo getURLAbsolute().'php/login.php'; ?>" method="post">
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" id="uLogin" name="username" placeholder="Usuario">
              <label for="uLogin" class="input-group-addon glyphicon glyphicon-user"></label>
            </div>
          </div> <!-- /.form-group -->

          <div class="form-group">
            <div class="input-group">
              <input type="password" class="form-control" id="uPassword" name="password" placeholder="Contraseña">
              <label for="uPassword" class="input-group-addon glyphicon glyphicon-lock"></label>
            </div> <!-- /.input-group -->
          </div> <!-- /.form-group -->

          <div class="checkbox">
          	<label for="recordarme">
          		<input id="recordarme" type="checkbox"> Recordarme
          	</label>
          </div> <!-- /.checkbox -->
        

	      </div> <!-- /.modal-body -->

	      <div class="modal-footer">
	        <button class="form-control btn btn-primary">Ok</button>
	      </div> <!-- /.modal-footer -->
	    </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<?php
  function paginaActiva($url, &$variable, $text = ""){
    $urlActual = getCurrentPage();
    $index = strrpos(getCurrentPage(), "?");
    if($index !== false) $urlActual = substr($urlActual, 0, $index);

    if(is_array($url)){
      $variable = '';
      foreach ($url as $value) {
        if($urlActual === "/".getURLcartepa().$value){
          $variable = 'class="active"';
          break;
        }
      }
    }else{
      if($urlActual === "/".getURLcartepa().$url) $variable = "class='active $text'";
      else $variable = '';
    }
  }
?>