<?php
session_start();
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Formulario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:300,400,700%7CPoppins:300,400,500,700,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modal.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .panel-title {
            color: #000000;
            text-align: center;
        }
        .help-inline-error{color:red;}
    </style>
    <script src="bootstrap/js/jquery-1.11.1.min.js"></script>
	<style>
  ul#stepForm, ul#stepForm li {
    margin: 0;
    padding: 0;
  }
  ul#stepForm li {
    list-style: none outside none;
  } 
  label{margin-top: 10px;}
  .help-inline-error{color:red;}
</style>
<script>
        function validateForm() {
            var valid = true;
            var fields = [
                'solicitante_del_cambio', 'tipo_de_cambio', 'impacto', 'urgencia', 'prioridad', 
                'riesgo_del_cambio', 'propietario_del_cambio', 'responsable_del_cambio', 
                'fecha_inicio_del_cambio', 'fecha_fin_del_cambio', 'servicios_afectados', 
                'razon_del_cambio', 'titulo_del_cambio', 'descripcion_del_cambio', 'aprobador'
            ];

            fields.forEach(function(field) {
                var input = document.getElementById(field);
                if (input.value.trim() === '') {
                    valid = false;
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });

            if (!valid) {
                alert("Por favor, rellena todos los campos requeridos.");
            }
            return valid;
        }
    </script>
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body >
    <div class="ie-panel"></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Cargando...</p>
      </div>
    </div>
    <div class="page">

   
      <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!--RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!--RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="#"><img class="brand-logo-dark" src="images/sistemas.png" alt="" width="100" height="17"/><img class="brand-logo-light" src="images/logo-inverse-200x34.png" alt="" width="100" height="17"/></a>
                  </div>
                </div>
                <h6 style="color:#FFFFFF;" class="intro-description wow fadeInRight">FORMULARIO DE SOLICITUD DE CAMBIOS </h6>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="inicio.php">Volver al nicio</a>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="cerrarSesion.php">Cerrar Sesión</a>
                      </li>

                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <section id="inicio" class="section section-intro context-dark">
        <div class="intro-bg" style="background: url(images/fondorojo.jpg) no-repeat;background-size:cover;background-position: top center;"></div>
        <div class="container" style="padding-left: 0px; padding-right: 15px;">
  
    <div class="panel-body" style="background-color: white; padding: 20px; border-radius: 5px; border: 1px solid #ccc;">
    <form  action="#" method="POST" onsubmit="return validateForm();">
    <h3 style="color:#000000;" class="panel-title center-tittle">Nuevo formulario</h3>
    <br><br>
  <div class="form-row">
  <div  class="form-group col-md-4">
      <label style="color:#000000;" for="solicitante_del_cambio">Solicitante del cambio</label>
       <input type="text" class="form-control" id="solicitante_del_cambio" name="solicitante_del_cambio" placeholder="Titulo del cambio">
    </div>
    <div class="form-group col-md-4">
      <label style="color:#000000;" for="tipo_de_cambio">Tipo de cambio</label>
      <input type="text" class="form-control" id="tipo_de_cambio" name="tipo_de_cambio" placeholder="Tipo de cambio">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
      <label style="color:#000000;" for="impacto">Impacto</label>
      <input type="text" class="form-control" id="impacto" name="impacto" placeholder="Impacto">
    </div>
    <div class="form-group col-md-4">
      <label style="color:#000000;" for="urgencia">Urgencia</label>
      <input type="text" class="form-control" id="urgencia" name="urgencia" placeholder="urgencia">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
      <label  style="color:#000000;" for="prioridad">Prioridad</label>
      <input type="text" class="form-control" id="prioridad" name="prioridad" placeholder="Prioridad">
    </div>
    
    <div class="form-group col-md-4">
      <label style="color:#000000;" for="riesgo_del_cambio">Riesgo del cambio</label>
      <input type="text" class="form-control" id="riesgo_del_cambio" name="riesgo_del_cambio" placeholder="Riesgo del cambio">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
      <label style="color:#000000;" for="propietario_del_cambio">Propietario del Cambio</label>
      <input type="text" class="form-control" id="propietario_del_cambio" name="propietario_del_cambio" placeholder="Propietario del cambio">
    </div>
    
    <div class="form-group col-md-4">
      <label style="color:#000000;" for="responsable_del_cambio">Responsable del cambio</label>
      <input type="text" class="form-control" id="responsable_del_cambio" name="responsable_del_cambio" placeholder="Responsable del cambio">
    </div>
  </div>
  <div class="form-group"style="height: 0px;clear: both;" required>
              <label style="color:#000000;" class="col-lg-2 control-label" for="fecha_inicio_del_cambio">Fecha Inicio<span style="color: red !important; display: inline; float: none;">*</span></label>
              <div class="col-lg-6">
                <input type="date" placeholder="Your Date of birth" id="fecha_inicio_del_cambio" name="fecha_inicio_del_cambio" class="form-control" autocomplete="off">
              </div>
            </div><br><br>
            <div class="form-group"style="height: 10px;clear: both;" required>
              <label style="color:#000000;" class="col-lg-2 control-label" for="fecha_fin_del_cambio">Fecha Fin<span style="color: red !important; display: inline; float: none;">*</span></label>
              <div class="col-lg-6">
                <input type="date" placeholder="Your Date of birth" id="fecha_fin_del_cambio" name="fecha_fin_del_cambio" class="form-control" autocomplete="off">
              </div>
            </div><br><br>      
                <br>
                <div class="form-group">
                <label style="color:#000000;" for="servicios_afectados">Servicios afectados</label>
              
  <input type="text" aria-label="First name" class="form-control" id="servicios_afectados" name="servicios_afectados">
 
</div>
<div class="form-group">
  <label style="color:#000000;" for="razon_del_cambio">Razon del cambio</label>
  <input type="text" aria-label="First name" class="form-control" id="razon_del_cambio" name="razon_del_cambio">
  </div>
  <div class="form-group">
    <label style="color:#000000;" for="titulo_del_cambio">Titulo del cambio</label>
    <input type="text" class="form-control" id="titulo_del_cambio" name="titulo_del_cambio" placeholder="Titulo del cambio">
  </div>
  <div class="form-group">
    <label style="color:#000000;" for="descripcion_del_cambio">Descripcion del cambio</label>
  <textarea class="form-control" id="descripcion_del_cambio" name="descripcion_del_cambio" rows="3"></textarea>
  </div>
  <div class="form-row">
  <label style="color:#000000;" for="aprobador">Aprobado por:</label>
  <input type="text" class="form-control" id="aprobador" name="aprobador" placeholder="Aprobado por:">
  </div>
  <br>
  <button type="button" class="btn btn-primary" onclick="window.location.href='inicio.php';">Volver al inicio</button>
  <button type="submit" class="btn btn-primary" name="guardar" >Guardar</button>
  <?php
      include "conexion.php";

      if (isset($_POST['guardar'])) {

        $solicitante = $_POST['solicitante_del_cambio'];
        $tipo_cambio = $_POST['tipo_de_cambio'];
        $impacto = $_POST['impacto'];
        $urgencia = $_POST['urgencia'];
        $prioridad = $_POST['prioridad'];
        $riesgo = $_POST['riesgo_del_cambio'];
        $propietario = $_POST['propietario_del_cambio'];
        $responsable = $_POST['responsable_del_cambio'];
        $fecha_inicio = $_POST['fecha_inicio_del_cambio'];
        $fecha_fin = $_POST['fecha_fin_del_cambio'];
        $servicios_afectados = $_POST['servicios_afectados'];
        $razon_cambio = $_POST['razon_del_cambio'];
        $titulo_cambio = $_POST['titulo_del_cambio'];
        $descripcion_cambio = $_POST['descripcion_del_cambio'];
        $aprobado_por = $_POST['aprobador'];

    $sql = "INSERT INTO formularios (solicitante_del_cambio, tipo_de_cambio, impacto, urgencia, prioridad, riesgo_del_cambio, propietario_del_cambio, responsable_del_cambio, fecha_inicio_del_cambio, fecha_fin_del_cambio, servicios_afectados, razon_del_cambio, titulo_del_cambio, descripcion_del_cambio, aprobador)
    VALUES ('$solicitante', '$tipo_cambio', '$impacto', '$urgencia', '$prioridad', '$riesgo', '$propietario', '$responsable', '$fecha_inicio', '$fecha_fin', '$servicios_afectados', '$razon_cambio', '$titulo_cambio', '$descripcion_cambio', '$aprobado_por')";

    $resultado = mysqli_query($conn, $sql);
    if ($resultado){
      ?>
        <h3 class="ok">Formulario creado correctamente</h3>
        <?php
    } 
}

        ?>
</form>
        </div>
      </section>
      <footer class="section footer-classic section-sm">
        <section id="contacto">
          <div class="container">
            <div class="row row-30">
              <div class="col-lg-6 wow fadeInLeft">
                <h6 style="color: #FFFFFF">Universidad Técnica de Ambato</h6><br/>
                <h6 style="color: #FFFFFF">Facultad de Ingeniería en Sistemas, Electrónica e Industrial</h6><br/>
                <h6 style="color: #FFFFFF">Manejo y Configuracion DE software</h6><br/>
              </div>
              
            </div>
          </div>
          
        </section>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/modal.js"></script>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>