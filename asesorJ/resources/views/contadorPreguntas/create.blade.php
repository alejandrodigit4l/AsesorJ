
<div class="container">
  <h2>Crear Contador preguntas</h2>
  <form action="contadorPreguntas" method="POST">
  {{ csrf_field() }}



  <div class="col-md-9">
    <div class="form-group">
      <label for="contador">contador: *</label>
      <input type="number" class="form-control" id="contador" name="contador">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="idRespuesta">idRespuesta: *</label>
      <input type="number" class="form-control" id="idRespuesta" name="idRespuesta">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="idAbogado">idAbogado: *</label>
      <input type="number" class="form-control" id="idAbogado" name="idAbogado">
    </div>
  </div>
  <div class="col-md-10">
    <button type="submit" name="guardar" value="s" class="btn btn-primary">Guardar</button>
  </div>
  </form>
</div>