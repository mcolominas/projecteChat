<?php require_once("../php/funcionesGenerales.php") ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Bootstrap Example</title>
  <?php require_once("../partes/head.php") ?>
  <script src="../js/registro.js"></script>
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
        <legend><center><h2><b>Registration Form</b></h2></center></legend><br>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">First Name</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label" >Last Name</label> 
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
            </div>
          </div>
        </div>

          <div class="form-group"> 
          <label class="col-md-4 control-label">Department / Office</label>
            <div class="col-md-4 selectContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="department" class="form-control selectpicker">
              <option value="">Select your Department/Office</option>
              <option>Department of Engineering</option>
              <option>Department of Agriculture</option>
              <option >Accounting Office</option>
              <option >Tresurer's Office</option>
              <option >MPDC</option>
              <option >MCTC</option>
              <option >MCR</option>
              <option >Mayor's Office</option>
              <option >Tourism Office</option>
            </select>
          </div>
        </div>
        </div>
          
        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">Username</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="user_name" placeholder="Username" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label" >Password</label> 
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="user_password" placeholder="Password" class="form-control"  type="password">
            </div>
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label" >Confirm Password</label> 
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
            </div>
          </div>
        </div>

        <!-- Text input-->
               <div class="form-group">
          <label class="col-md-4 control-label">E-Mail</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
          <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
            </div>
          </div>
        </div>


        <!-- Text input-->
               
        <div class="form-group">
          <label class="col-md-4 control-label">Contact No.</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="contact_no" placeholder="(639)" class="form-control" type="text">
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
            <button type="submit" class="btn btn-warning" >SUBMIT <span class="glyphicon glyphicon-send"></span></button>
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