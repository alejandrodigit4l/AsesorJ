
<div class="container">
  <h2>Crear Chat</h2>
  <form action="chat" method="POST">
  {{ csrf_field() }}
  <div class="col-md-9">
    <div class="form-group">
      <label for="receptor">receptor: *</label>
      <input type="number" class="form-control" id="receptor" name="receptor">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="emisor">emisor: *</label>
      <input type="number" class="form-control" id="emisor" name="emisor">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="titulo">titulo: *</label>
      <input type="text" class="form-control" id="titulo" name="titulo">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="message">message: *</label>
      <input type="text" class="form-control" id="message" name="message">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="estado">estado: *</label>
      <input type="number" class="form-control" id="estado" name="estado">
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="send_email">send_email: *</label>
      <input type="number" class="form-control" id="send_email" name="send_email">
    </div>
  </div>
  <div class="col-md-10">
    <button type="submit" name="guardar" value="s" class="btn btn-primary">Guardar</button>
  </div>
  </form>
</div>