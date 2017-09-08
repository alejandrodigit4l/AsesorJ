
<div class="container">
  <h2>Crear Tipo Usuarios</h2>
  <form action="tipoUsuario" method="POST">
  {{ csrf_field() }}



  <div class="col-md-9">
    <div class="form-group">
      <label for="nombre">nombre: *</label>
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="descripcion">descripcion: *</label>
      <input type="text" class="form-control" id="descripcion" name="descripcion">
    </div>
  </div>
  <div class="col-md-10">
    <button type="submit" name="guardar" value="s" class="btn btn-primary">Guardar</button>
  </div>
  </form>
</div>