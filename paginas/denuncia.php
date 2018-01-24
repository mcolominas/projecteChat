<?php require_once("../php/funcionesGenerales.php") ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Bootstrap Example</title>
  <?php require_once("../partes/head.php") ?>
  <link rel="stylesheet" type="text/css" href="<?php echo getURLAbsolute(); ?>css/denuncia.css">
</head>
<body>
<?php require_once("../partes/cabecera.php") ?>
<?php require_once("../partes/menu.php") ?>

<div class="container-fluid">    
  <div class="row content">
    <div class="col-sm-2">
    </div>
    <div class="well col-sm-8 text-center"> 
      <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Contact us</legend>

                        <div class="form-group">
                        	<label class="col-md-4 control-label">Nombre</label>  
                        	<div class="col-md-4 inputGroupContainer">
                        	<div class="input-group">
                            <span class="input-group-addon rojologo"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                            	</div>
          					</div>
                        </div>
                        <div class="form-group">
                        	<label class="col-md-4 control-label">Apellidos</label>  
                        	<div class="col-md-4 inputGroupContainer">
                        	<div class="input-group">
                            <span class="input-group-addon rojologo"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="fname" name="name" type="text" placeholder="Apellidos" class="form-control">
                            	</div>
          					</div>
                        </div>

                        <div class="form-group">
                        	<label class="col-md-4 control-label">Email</label>  
                        	<div class="col-md-4 inputGroupContainer">
                        	<div class="input-group">
                            <span class="input-group-addon rojologo"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input id="fname" name="name" type="text" placeholder="Email" class="form-control">
                            	</div>
          					</div>
                        </div>

                        <div class="form-group">
                        	<label class="col-md-4 control-label">Telefono</label>  
                        	<div class="col-md-4 inputGroupContainer">
                        	<div class="input-group">
                            <span class="input-group-addon rojologo"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input id="fname" name="name" type="text" placeholder="Telefono" class="form-control">
                            	</div>
          					</div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Escribe tu mensaje..." rows="7"></textarea>
                            </div>
                        </div>

                         <div class="form-group">
				         <label class="col-md-4 control-label"></label>
				         <div class="col-md-4 text-center"><br>
				         	<button type="submit" class="btn btn-warning" >Enviar <span class="glyphicon glyphicon-send"></span></button>
				         </div>
				        </div>
                    </fieldset>
                </form>
    </div>
    <div class="col-sm-2">
    </div>
  </div>
</div>

<?php require_once("../partes/pie.php") ?>
</body>
</html>