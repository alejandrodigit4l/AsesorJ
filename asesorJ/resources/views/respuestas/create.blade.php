
<div class="container">
  <h2>Crear Respuestas</h2>
  <form action="respuestas" method="POST">
  {{ csrf_field() }}

  <div class="col-md-9">
    <div class="form-group">
      <label for="idUsuario">idUsuario: *</label>
      <input type="number" class="form-control" id="idUsuario" name="idUsuario">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="idPregunta">idPregunta: *</label>
      <input type="number" class="form-control" id="idPregunta" name="idPregunta">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="respuesta">respuesta: *</label>
      <input type="text" class="form-control" id="respuesta" name="respuesta">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="calificacion">calificacion: *</label>
      <input type="number" class="form-control" id="calificacion" name="calificacion">
    </div>
  </div>
  <div class="col-md-10">
    <button type="submit" name="guardar" value="s" class="btn btn-primary">Guardar</button>
  </div>
  </form>
</div>