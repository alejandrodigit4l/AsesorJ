
<div class="container">
  <h2>Crear Estados</h2>
  <form action="estados" method="POST">
  {{ csrf_field() }}

  <div class="col-md-9">
    <div class="form-group">
      <label for="nombre">Nombre: *</label>
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="condiciones">condiciones: *</label>
      <input type="text" class="form-control" id="condiciones" name="condiciones">
    </div>
  </div>
  <div class="col-md-10">
    <button type="submit" name="guardar" value="s" class="btn btn-primary">Guardar</button>
  </div>
  </form>
</div>