
<div class="container">
  <h2>Crear Usuarios</h2>
  <form action="usuarios" method="POST">
  {{ csrf_field() }}

  <div class="col-md-9">
    <div class="form-group">
      <label for="nombre">Nombre: *</label>
      <input type="text" class="form-control" id="nombres" name="nombres">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="email">Email: *</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="clave">Clave: *</label>
      <input type="password" class="form-control" id="clave" name="clave">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="password1">Repita Clave: *</label>
      <input type="password" class="form-control" id="password1" name="password1">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="tipoUsuario">tipoUsuario: *</label>
      <input type="text" class="form-control" id="tipo_usuario" name="tipo_usuario">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="categoria">categoria: *</label>
      <input type="text" class="form-control" id="categoria" name="categoria">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="telefono">telefono: *</label>
      <input type="text" class="form-control" id="telefono" name="telefono">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="celular">celular: *</label>
      <input type="text" class="form-control" id="celular" name="celular">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="push_token">push_token: *</label>
      <input type="text" class="form-control" id="push_token" name="push_token" value="0">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="terminos">terminos: *<small>1: acepta, 0: no acepta</small></label>
      <input type="text" class="form-control" id="terminos" name="terminos" value="1">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="estados">urlImage </label>
      <input type="text" class="form-control" id="img" name="img">
    </div>
  </div>
  <div class="col-md-10">
    <button type="submit" name="guardar" value="s" class="btn btn-primary">Guardar</button>
  </div>
  </form>
</div>