<?php require_once("../php/funcionesGenerales.php") ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Bootstrap Example</title>
  <?php require_once("../partes/head.php") ?>
  <link rel="stylesheet" type="text/css" href="<?php echo getURLAbsolute(); ?>css/chatroom.css">
  <script src="<?php echo getURLAbsolute(); ?>js/chatroom.js"></script>
</head>
<body>
<?php require_once("../partes/cabecera.php") ?>
<?php require_once("../partes/menu.php") ?>
  
<div class="container-fluid">    
    <div class="row content">
        <div class="col-sm-1">
        </div>

        <div class="well col-sm-10">
            <div id="frame">
                <div id="sidepanel">
                    <div id="search">
                        <label for="buscarGrupos"><i class="fa fa-search" aria-hidden="true"></i></label>
                        <input type="text" id="buscarGrupos" placeholder="Buscar grupos..." />
                    </div>
                    <div id="contacts">
                        <ul>
	                        <li class="separator">
	                            <img src="<?php echo getURLAbsolute(); ?>img/publicIcon.png">
	                            <span>Salas publicas</span>
                            </li>
                            <li class="contact">
                                <div class="wrap">
                                    <img src="http://emilcarlsson.se/assets/louislitt.png" alt="" />
                                    <div class="meta">
                                        <p class="name">Louis Litt</p>
                                        <p class="preview">You just got LITT up, Mike.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="contact active">
                                <div class="wrap">
                                    <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                    <div class="meta">
                                        <p class="name">Harvey Specter</p>
                                        <p class="preview">Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do any one of a hundred and forty six other things.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="contact">
                                <div class="wrap">
                                    <img src="http://emilcarlsson.se/assets/rachelzane.png" alt="" />
                                    <div class="meta">
                                        <p class="name">Rachel Zane</p>
                                        <p class="preview">I was thinking that we could have chicken tonight, sounds good?</p>
                                    </div>
                                </div>
                            </li>
	                        <li class="separator">
	                            <img src="<?php echo getURLAbsolute(); ?>img/privateIcon.png">
	                            <span>Salas privadas</span>
                            </li>
                            <li class="contact">
                                <div class="wrap">
                                    <img src="http://emilcarlsson.se/assets/donnapaulsen.png" alt="" />
                                    <div class="meta">
                                        <p class="name">Donna Paulsen</p>
                                        <p class="preview">Mike, I know everything! I'm Donna..</p>
                                    </div>
                                </div>
                            </li>
                            <li class="contact">
                                <div class="wrap">
                                    <img src="http://emilcarlsson.se/assets/jessicapearson.png" alt="" />
                                    <div class="meta">
                                        <p class="name">Jessica Pearson</p>
                                        <p class="preview">Have you finished the draft on the Hinsenburg deal?</p>
                                    </div>
                                </div>
                            </li>
                            <li class="contact">
                                <div class="wrap">
                                    <img src="http://emilcarlsson.se/assets/haroldgunderson.png" alt="" />
                                    <div class="meta">
                                        <p class="name">Harold Gunderson</p>
                                        <p class="preview">Thanks Mike! :)</p>
                                    </div>
                                </div>
                            </li>
                            <li class="contact">
                                <div class="wrap">
                                    <img src="http://emilcarlsson.se/assets/danielhardman.png" alt="" />
                                    <div class="meta">
                                        <p class="name">Daniel Hardman</p>
                                        <p class="preview">We'll meet again, Mike. Tell Jessica I said 'Hi'.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="contact">
                                <div class="wrap">
                                    <img src="http://emilcarlsson.se/assets/katrinabennett.png" alt="" />
                                    <div class="meta">
                                        <p class="name">Katrina Bennett</p>
                                        <p class="preview">I've sent you the files for the Garrett trial.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="contact">
                                <div class="wrap">
                                    <img src="http://emilcarlsson.se/assets/charlesforstman.png" alt="" />
                                    <div class="meta">
                                        <p class="name">Charles Forstman</p>
                                        <p class="preview">Mike, this isn't over.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="contact">
                                <div class="wrap">
                                    <img src="http://emilcarlsson.se/assets/jonathansidwell.png" alt="" />
                                    <div class="meta">
                                        <p class="name">Jonathan Sidwell</p>
                                        <p class="preview"><span>You:</span> That's bullshit. This deal is solid.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="bottom-bar">
                        <button id="addcontact" data-toggle="modal" data-target="#nuevoGrupo"><i class="material-icons icon-google-1-5">group_add</i> <span>Nuevo Grupo</span></button>
                    </div>
                </div>
                <div class="content">
                    <div class="contact-profile">
                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                        <p>Harvey Specter</p>
                        <div class="setting">
                             <a href="#" data-toggle="modal" data-target="#linkInvitarModal" style="color:red;"><i class="fa fa-link fa-lg fa-fw" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="messages">
                        <ul>
                            <li class="sent">
                                <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                                <p>How the hell am I supposed to get a jury to believe you when I am not even sure that I do?!</p>
                            </li>
                            <li class="replies">
                                <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                <p>When you're backed against the wall, break the god damn thing down.</p>
                            </li>
                            <li class="replies">
                                <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                <p>Excuses don't win championships.</p>
                            </li>
                            <li class="sent">
                                <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                                <p>Oh yeah, did Michael Jordan tell you that?</p>
                            </li>
                            <li class="replies">
                                <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                <p>No, I told him that.</p>
                            </li>
                            <li class="replies">
                                <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                <p>What are your choices when someone puts a gun to your head?</p>
                            </li>
                            <li class="sent">
                                <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                                <p>What are you talking about? You do what they say or they shoot you.</p>
                            </li>
                            <li class="replies">
                                <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                <p>Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do any one of a hundred and forty six other things.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="message-input">
                        <div class="wrap">
                        <input type="text" placeholder="Escribe tu mensaje..." />
                        <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1">
        </div>
    </div>
</div>

<!-- Opciones modal -->
<div class="modal fade" id="linkInvitarModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Invita a gente</h4>
      </div> <!-- /.modal-header -->
      <div class="modal-body">
        <span>Dona el siguiente enlace para que la gente se una al grupo.</span>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <div class="input-group">
              <label for="linkInvitar" class="rojologo no-top input-group-addon"><i class="fa fa-clipboard" aria-hidden="true"></i>
</label>
              <input type="text" class="form-control" id="linkInvitar" value="https://www.chat.com/join?id=2">
            </div>
        </div> <!-- /.form-group -->
      </div> <!-- /.modal-body -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<!-- Nuevo Grupo modal -->
<div class="modal fade" id="nuevoGrupo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Nuevo Grupo</h4>
      </div> <!-- /.modal-header -->

      <div class="modal-body">
        
          <div class="form-group">
            <div class="input-group">
              <label for="fnombreGrupo" class="rojologo no-top input-group-addon"><i class="fa fa-pencil"></i></label>
              <input type="text" class="form-control" id="fnombreGrupo" name="nombreGrupo" placeholder="Nombre del grupo">
            </div>
          </div> <!-- /.form-group -->
          <div class="form-group">
            <div class="input-group">
              <label for="fimagenGrupo"><i class="rojologo no-top input-group-addon fa fa-file-image-o" style="display: inline;"></i> <span class="modal-title" style="font-weight: normal;">Imagen del Grupo</span></label>
              <input type="file" style="display: none" class="form-group" class="form-control" id="fimagenGrupo" name="nombreGrupo" placeholder="Nombre del grupo">
            </div>
          </div> <!-- /.form-group -->
      </div> <!-- /.modal-body -->

      <div class="modal-footer">
        <button class="rojologo form-control btn btn-primary">Crear nuevo grupo</button>
      </div> <!-- /.modal-footer -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<?php require_once("../partes/pie.php") ?>
<script>
    document.getElementById("fimagenGrupo").addEventListener("input", function(){
        var filename = $("#fimagenGrupo").val()
        var fileNameIndex = filename.lastIndexOf("/") + 1;
        if(fileNameIndex == 0)
            fileNameIndex = filename.lastIndexOf("\\") + 1;

        if(fileNameIndex > 0)
            filename = filename.substr(fileNameIndex);

        $("label[for='fimagenGrupo'] span").text(filename);
    })
    /*document.getElementById("buscarGrupos").addEventListener("input", function(){
        var contactos = $("#contacts li").each(function(index){
            alert(this.text.)
        });

    })*/
    $("label[for='linkInvitar']").click("input", function(){
        $("#linkInvitar").select();
        document.execCommand("Copy");
    })
    
</script>
</body>
</html>