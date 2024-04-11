<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="./modal.css">

</head>
<body>

<div class="titulo">
<h1>FORMULARIO EN MODAL</h1>
</div>
    <!-- Button trigger modal -->
    <div class="button">
<button type="button" class="btn btn-warning mt-5 ms-3 " data-bs-toggle="modal" data-bs-target="#exampleModal">
  Ver
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">FORMULARIO PERSONAL</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form -->
      <form>
  <div class="mb-3">
    <label for="" class="form-label">NOMBRE</label>
    <input type="text" class="form-control" placeholder="Jennifer" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">NOMBRE</label>
    <input type="text" class="form-control" placeholder="Jimenez" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">CATALOGO</label>
    <input type="number" class="form-control" placeholder="663419" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">ARMA</label>
    <input type="text" class="form-control" placeholder="Marina" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">CORREO</label>
    <input type="email" class="form-control" placeholder="jenni@gmail.com" required>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">aceptar terminos y condiciones</label>
  </div>
  <button type="submit" class="btn btn-success">Guardar</button>
</form>
<!-- form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>