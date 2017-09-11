
<div class="container">
  <h2>Crear Preguntas</h2>
  <form action="preguntas" method="POST">
  {{ csrf_field() }}

  <div class="col-md-9">
    <div class="form-group">
      <label for="titulo">titulo: *</label>
      <input type="text" class="form-control" id="titulo" name="titulo">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="cuerpo">cuerpo: *</label>
      <textarea class="form-control" id="cuerpo" name="cuerpo"></textarea>
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="email">email: *</label>
      <input type="text" class="form-control" id="email" name="email">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="push_token">push_token: *</label>
      <input type="text" class="form-control" id="push_token" name="push_token">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="usuario">usuario: *</label>
      <input type="number" class="form-control" id="usuario" name="usuario">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="categoria">categoria: *</label>
      <input type="text" class="form-control" id="categoria" name="categoria">
    </div>
  </div>
  <div class="col-md-10">
    <button type="submit" name="guardar" value="s" class="btn btn-primary">Guardar</button>
  </div>
  </form>
</div>