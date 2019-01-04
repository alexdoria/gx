<?php include 'header.php'; ?>

<div class="row py-3">
  <div class="form-wrap col-xs-12 col-md-6 offset-md-3 py-3 my-3">
    <div class="col-12" id="signin-container">
      <form action="regalos.php" method="post" name="register" id="registry">
        <div class="formgroup">
          <div class="row py-3">
            <div class="col-6">
              <label for="usrname">Organizador</label><br>
              <input type="text" class="form-control" id="usrname" name="usrname" autofocus><br>
            </div>
            <div class="col-6">
              <label for="usermail">Ingresa una direccion de email valida</label><br>
              <input type="email" class="form-control" id="usremail" name="usremail"><br>
            </div>
          </div>
        </div>
        <div class="formgroup">
          <label for="usrname">Participantes</label><br>
          <div class="row py-3">
            <div class="col-6">
              <input type="text" class="form-control" id="usrname" name="usremail" autofocus placeholder="Nombre">
            </div>
            <div class="col-6">
              <input type="email" class="form-control" id="usremail" name="usremail" placeholder="Email">
            </div>
          </div>
        </div>
        <div class="formgroup">
          <div class="row py-3">
            <div class="col-6">
              <input type="text" class="form-control" id="usrname" name="usremail" autofocus placeholder="Nombre">
            </div>
            <div class="col-6">
              <input type="email" class="form-control" id="usremail" name="usremail" placeholder="Email">
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-primary btnmargin" id="add_user_button">+ Agregar participante</button>
        <button type="submit" class="btn btn-primary btnmargin">Continuar</button>
      </form>
    </div>
  </div>
</div>

    <!-- Custom scripts -->
    <script src="js/form-toggler.js"></script>
    <script src="js/add_participant.js"></script>