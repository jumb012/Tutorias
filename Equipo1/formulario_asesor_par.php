<?php
  include '../estilos.php';
?>

<!DOCTYPE html>
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>

  <title>ASESOR PAR</title>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="#">PIT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/PIT_FIC">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/PIT_FIC">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<br>

<div class="container">
<form>
  <div class="form-row center">
    <div class="form-group col-md-4">
      <label for="Nombre1">Nombre</label>
      <input type="text" class="form-control" id="Nombre1" placeholder="Nombre">
    </div>
    <div class="form-group col-md-4">
      <label for="ApellidoPaterno1">Apellido Paterno</label>
      <input type="text" class="form-control" id="ApellidoPaterno1" placeholder="Apellido Paterno">
    </div>
    <div class="form-group col-md-4">
      <label for="ApellidoMaterno1">Apellido Materno</label>
      <input type="text" class="form-control" id="ApellidoMaterno1" placeholder="Apellido Materno">
    </div>
  </div>

  <div class="form-row center">
    <div class="form-group col-md-4">
      <label for="Correo">Correo</label>
      <input type="email" class="form-control" id="Correo" placeholder="Correo">
    </div>
    <div class="form-group col-md-4">
      <label for="Contraseña">Contraseña</label>
      <input type="password" class="form-control" id="Contraseña1" placeholder="Contraseña">
    </div>
    <div class="form-group col-md-4">
      <label for="Teléfono">Teléfono</label>
      <input type="text" class="form-control" id="Telefono1" placeholder="Teléfono">
    </div>
  </div>

  <div class="form-row">

    <div class="form-group col-md-4">
      <label for="TipoEstudio">Tipos de Estudio</label>
      <select id="TipoEstudio1" class="form-control">
        <option selected>Selecciona...</option>
        <option>Universidad</option>
        <option>Preparatoria</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="UnidadAcademica">Unidad Acádemica</label>
      <select id="UnidadAcademica1" class="form-control">
        <option selected>Selecciona...</option>
        <option>Informática</option>
      </select>
    </div>

  </div>

  <button type="submit" class="btn btn-primary">ENVIAR</button>
</form>
</div>


</body>
</html>
