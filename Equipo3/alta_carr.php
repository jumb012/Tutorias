<?php
  include '../estilos.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Alta de Carrera</title>
	ya lo puse en estilos



</head>
<body>
<form>
	<form>
	  <div class="form-row col-md-12">
	    <div class="col-md-6 mb-3">
	      <label for="nombreCarrera"><strong>Nombre</strong></label>
	      <input type="text" class="form-control" id="nombreCarrera" required>
	  	</div>
	  </div>
  <div class="form-row col-md-6">
    <div class="col-md-6 mb-3">
      <label for="matriculaCarrera"><strong>Matricula</strong></label>
      <input type="text" class="form-control" id="matriculaCarrera" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="abreviaturaCarrera"><strong>Abreviatura</strong></label>
      <input type="text" class="form-control" id="abreviaturaCarrera" required>
    </div>
  </div>
  <form>
  <div class="form-group col-md-6">
    <label for="subirArchivo"><strong>Lista de alumnos (.pdf)</strong></label>
    <input type="file" class="form-control-file" id="subirArchivo">
  </div>
</form>
		<button class="btn btn-primary" type="submit">Registrar Carrera</button>
</form>
</form>
</body>
</html>
