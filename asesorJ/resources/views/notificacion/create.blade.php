
<div class="container">
  <h2>Crear Notificaciones</h2>
  <form action="notificacion" method="POST">
  {{ csrf_field() }}

  <div class="col-md-9">
    <div class="form-group">
      <label for="idUsuario">idUsuario: *</label>
      <input type="number" class="form-control" id="idUsuario" name="idUsuario">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="Message">Message: *</label>
      <input type="text" class="form-control" id="Message" name="Message">
    </div>
  </div>

  <div class="col-md-9">
	<label class="checkbox">
		<span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input name="ifEmail" checked="checked" data-toggle="checkbox" type="checkbox" value="1"> Permitir envios por correo?
	</label>
  <label class="checkbox">
    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input name="ifEmail" data-toggle="checkbox" type="checkbox" value="0"> No permitir envios por correo?
  </label>
   
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="status">status: *</label>
      <input type="number" class="form-control" id="status" name="status">
    </div>
  </div>
  <div class="col-md-10">
    <button type="submit" name="guardar" value="s" class="btn btn-primary">Guardar</button>
  </div>
  </form>
</div>