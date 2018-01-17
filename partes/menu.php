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
        <?php paginaActiva(["index.php", ""], $classActive); ?>
        <li <?php echo $classActive ?>><a href="<?php echo getURLAbsolute(); ?>">Home</a></li>
        <?php paginaActiva("index2.php", $classActive); ?>
        <li <?php echo $classActive ?>><a href="#">About</a></li>
        <?php paginaActiva("index2.php", $classActive); ?>
        <li <?php echo $classActive ?>><a href="#">Projects</a></li>
        <?php paginaActiva("index2.php", $classActive); ?>
        <li <?php echo $classActive ?>><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php paginaActiva("index2.php", $classActive); ?>  
        <li <?php echo $classActive ?>><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php paginaActiva("paginas/registro.php", $classActive); ?>  
        <li <?php echo $classActive ?>><a href="<?php echo getURLAbsolute().'paginas/registro.php'; ?>"><span class="glyphicon glyphicon-user"></span> Registro</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Log in</h4>
      </div> <!-- /.modal-header -->

      <div class="modal-body">
        <form role="form">
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" id="uLogin" placeholder="Login">
              <label for="uLogin" class="input-group-addon glyphicon glyphicon-user"></label>
            </div>
          </div> <!-- /.form-group -->

          <div class="form-group">
            <div class="input-group">
              <input type="password" class="form-control" id="uPassword" placeholder="Password">
              <label for="uPassword" class="input-group-addon glyphicon glyphicon-lock"></label>
            </div> <!-- /.input-group -->
          </div> <!-- /.form-group -->

          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me
            </label>
          </div> <!-- /.checkbox -->
        </form>

      </div> <!-- /.modal-body -->

      <div class="modal-footer">
        <button class="form-control btn btn-primary">Ok</button>

        <div class="progress">
          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="100" style="width: 0%;">
            <span class="sr-only">progress</span>
          </div>
        </div>
      </div> <!-- /.modal-footer -->

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<?php
  function paginaActiva($url, &$variable){
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
      if($urlActual === "/".getURLcartepa().$url) $variable = 'class="active"';
      else $variable = '';
    }
  }
?>