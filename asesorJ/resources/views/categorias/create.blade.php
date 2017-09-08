
<div class="container">
  <h2>Crear Categoria</h2>
  <form action="categorias" method="POST">
  {{ csrf_field() }}
  <div class="col-md-9">
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="descripcion">Descripción:</label>
      <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="descripcion">Administrador:</label>
      <input type="id" class="form-control" id="administrador" name="administrador">
    </div>
  </div>
  <div class="col-md-10">
    <button type="submit" name="guardar" value="s" class="btn btn-primary">Guardar</button>
  </div>
  </form>
</div>

