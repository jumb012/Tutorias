<!DOCTYPE html>

<html>
<head>
	<title>Solicitar Asesoría</title>
	<?php 
  include '../estilos.php';
?> 
</head>
<body>
<div class="container">

  <h2>Solicitar Asesoría</h2>
  <form action="registro_guardar.php" method="post" >
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="numcuenta">Numero cuenta</label>
      <input type="number" class="form-control"  name="id" placeholder="Proporcione su Numero de cuenta" required="">   
    </div>
 </div>
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder=" Proporcione su Nombre" required="">

 </div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="grado">Grado</label>
      <input type="number" class="form-control" name="grado" required=""  id="inputCity">
    </div>
<div class="form-row">
    <div class="form-group col-md-3">
      <label for="grupo">Grupo</label>
      <input type="number" class="form-control" name="grupo" required=""  id="inputCity">
    </div>

 

    <div class="form-group col-md-9">
      <label for="telefono">Telefono</label>
      <input type="number" class="form-control" name="telefono" required=""  id="inputCity">
    </div>
  </div>




    <div class="container"> <br>
 <button class="btn btn-primary" type="submit">Registrar</button>

</div>






</form>

</body>
</html>