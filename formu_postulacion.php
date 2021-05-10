<h4>¡Trabaja con nosotros, dejanos tus datos!</h4>

<form id="formulario" class="col-md-6" method="POST" action="postulacion.php">

  <input type="text" placeholder="Nombre*" name="nombre" minlength="3" maxlength="20" required class="form-control formu1">
  <input type="text" placeholder="Apellido*" name="apellido" minlength="3" maxlength="20" required class="form-control formu1">
  <input type="number" placeholder="D.N.I*" name="dni" minlength="7" maxlength="8" required class="form-control formu1">
  <input type="tel" name="telefono" placeholder="Teléfono*" required class="form-control formu1">
  <input type="email" placeholder="Email*" name="email" required class="form-control formu1">
  <select class="form-control formu1" name="sector">
    <option hidden selected>Selecciona el sector</option>
    <option>Catering</option>
    <option>Gestion comercial</option>
    <option>Cocina</option>
    <option>CM</option>
  </select>
  <div class="mb-3">
    <label for="formFileMultiple" class="form-label">Adjunta tu CV en formato .pdf o .doc</label>
    <input class="form-control" type="file" id="formFileMultiple" multiple>
  </div>
  <input type="submit" value="Enviar">

</form>