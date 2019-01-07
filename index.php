<?php include 'header.php'; ?>
<span id="countRow">#</span>
<div class="row py-3">
  <div class="form-wrap col-xs-12 col-md-6 offset-md-3 py-3 my-3">
    <div class="col-12" id="signin-container">
      <form action="regalos.php" method="post" name="register" id="registry">
        <div class="formgroup participante">
          <div class="row py-3">
            <div class="col-6">
              <label for="usrname">Organizador</label><br>
              <input type="text" class="form-control" id="usrname" name="usrname" autofocus><br>
            </div>
            <div class="col-6">
              <label for="usermail">Email</label><br>
              <input type="email" class="form-control" id="usremail" name="usremail"><br>
            </div>
          </div>
        </div>
        <div class="formgroup participante">
          <label for="usrname">Participantes</label><br>
          <div class="row py-3">
            <div class="col-4">
              <input type="text" class="form-control" id="usrname1" name="usrname1" autofocus placeholder="Nombre">
            </div>
            <div class="col-6">
              <input type="email" class="form-control" id="usremail1" name="usremail1" placeholder="Email">
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-danger delete"><i class="fas fa-times"></i></button>
            </div>
          </div>
        </div>
        <div class="formgroup participante">
          <div class="row py-3">
            <div class="col-4">
              <input type="text" class="form-control" id="usrname2" name="usrname2" autofocus placeholder="Nombre">
            </div>
            <div class="col-6">
              <input type="email" class="form-control" id="usremail2" name="usremail2" placeholder="Email">
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-danger delete"><i class="fas fa-times"></i></button>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-primary btnmargin" id="add_user_button">+ Agregar participante</button>
        <button type="button" class="btn btn-info btnmargin" id="three"># participantes</button>
        <button type="submit" class="btn btn-primary btnmargin">Continuar</button>
      </form>
    </div>
  </div>
</div>

    <!-- Custom scripts -->
    <script src="js/form-toggler.js"></script>
    <script src="js/participants.js"></script>