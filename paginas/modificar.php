<?php require_once("../php/funcionesGenerales.php") ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Bootstrap Example</title>
  <?php require_once("../partes/head.php") ?>
</head>
<body>
<?php require_once("../partes/cabecera.php") ?>
<?php require_once("../partes/menu.php") ?>
  
<div class="container-fluid">    
  <div class="row content">
    <div class="col-sm-2 offset-sm-2">
    </div>
    <div class="col-sm-8 text-center"> 
      <form class="well form-horizontal" action=" " method="post"  id="contact_form">
        <fieldset>

        <!-- Form Name -->
        <legend><center><h2><b>Configuración</b></h2></center></legend><br>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">Nombre</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="first_name" placeholder="Nombre" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label" >Apellidos</label> 
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="last_name" placeholder="Apellidos" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">Dirección</label> 
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <input name="last_name" placeholder="Dirección" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->
               <div class="form-group">
          <label class="col-md-4 control-label">Correo</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input name="email" placeholder="Correo electronico" class="form-control"  type="email">
            </div>
          </div>
        </div>


        <!-- Text input-->
               
        <div class="form-group">
          <label class="col-md-4 control-label">Telefono.</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="contact_no" placeholder="Telefono" class="form-control" type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label" >Nueva Contraseña</label> 
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input name="user_password" placeholder="Contraseña" class="form-control"  type="password">
            </div>
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label" >Confirmar la nueva contraseña</label> 
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input name="confirm_password" placeholder="Confirmar contraseña" class="form-control"  type="password">
            </div>
          </div>
        </div>

        <!-- Select Basic -->

        <!-- Success message -->
        <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-4"><br>
            <button type="submit" class="btn btn-warning" >MODIFICAR <span class="glyphicon glyphicon-send"></span></button>
          </div>
        </div>

        </fieldset>
        </form>
    </div>
    <div class="col-sm-2 offsets-sm-2">
    </div>
  </div>
</div>

<?php require_once("../partes/pie.php") ?>

</body>
</html>