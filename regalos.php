<?php include 'header.php'; ?>

      <div class="row main">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <h1>Tu lista de deseos</h1>
          <h3>Registra las opciones que tendrá tu amigo secreto para regalarte, recuerda que las bases acordadas son las siguientes:</h3>
          <ul></ul>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <form>
            <formgroup>
              <label>Opción 1</label>
              <input type="textarea" class="form-control" id="regalo1" name="regalo_1" placeholder="Me gustaría un(a):">
            </formgroup>
            <formgroup>
              <label>Opción 2</label>
              <input type="textarea" class="form-control" id="regalo2" name="regalo_2" placeholder="Si no lo encuentras me puedes obsequiar:">
            </formgroup>
            <formgroup>
              <label>Opción 3</label>
              <input type="textarea" class="form-control" id="regalo3" name="regalo_3" placeholder="O si no:">
            </formgroup>
            <button type="submit" class="btn btn-primary btnmargin">Guardar mis datos</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
