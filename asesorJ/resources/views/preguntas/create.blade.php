
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
      <label for="pregunta">pregunta: *</label>
      <input type="text" class="form-control" id="pregunta" name="pregunta">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="idUsuario">idUsuario: *</label>
      <input type="number" class="form-control" id="idUsuario" name="idUsuario">
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