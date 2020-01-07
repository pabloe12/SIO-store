<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
	<?php require_once "menu.php"; ?>
</head>
<body>

<div class="container">
  <h2>Como trabajamos</h2>
  <br>
  <p><h4>Somos una empresa que se centra en la creacion y distribucion de software administrativo, proporcionamos un servicio de calidad para nuestros clientes basado en sus requerimientos y especificaciones</h4></p>
  <br>
  <br>
  <div class="row">
    <div class="col-md-4" >
      <div class="thumbnail">
        <a href="../img/1.jpg" target="_blank">
          <img src="../img/1.jpg" style="width:100%">
          <div class="caption">
            <p><h4>Analisis del entorno, caracteristicas y necesidades del cliente</h4></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="../img/2.jpg" target="_blank">
          <img src="../img/2.jpg" style="width:100%">
          <div class="caption">
            <p><h4>Programacion, implementacion y evaluacion del sistema administrativo</h4></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="../img/3.jpg" target="_blank">
          <img src="../img/3.jpg" style="width:100%">
          <div class="caption">
            <p><h4>Evaluacion y correccion del funcionamiento del sistema</h4></p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<?php 
	}else{
		header("location:../index.php");
	}
 ?>