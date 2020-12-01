<?php
  session_start();
  $admin=$_SESSION['id_uni'];
  if($admin >0){
    header('Locate:index.php');
  }
  include('conexiones/conexion.php');
  if(isset($_POST['Mensaje'])){
    $falla = $_POST['falla'];
    $query = ("INSERT INTO comentarios (falla) VALUE ('$falla')");
    $Result = mysqli_query($conexion, $query);
    echo '<script> alert("Mensaje enviado, gracias por notificar"); </script>';
  }
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Feria Virtual Universitaria de Quintana Roo 2020</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">


  <link href="assets/img/ceiba_cuadrado-favicon.png" rel="icon" type="image/png">
  <link href="assets/img/ceiba_cuadrado-favicon.png" rel="apple-touch-icon" type="image/png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <!-- ======= Header ======= -->
  <div class="row align-items-center justify-content-center  w-100" id="container-fluid">
    <div class="col-sm-4 align-items-center">
      <img src="assets/img/topbar_logo_1.jpg" class="img-logo-1" alt="">
      <img src="assets/img/topbar_logo_2.jpg" class="img-logo-2" alt="">
    </div>
    <div class="col-sm-4">

    </div>
    <div class="col-sm-4 row justify-content-center">
      <img src="assets/img/ceiba_cuadrado-favicon.png" class="img-logo-3" alt="">
      <img src="assets/img//topbar_logo_3.png" class="img-logo-4" alt="">
    </div>
  </div>
  <nav class="Probando">

    <header id="header" class="d-flex align-items-center  header-transparent">

      <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
          <h1 class="text-light">Feria Virtual</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="el-menu">
          <input type="checkbox" id="btn-menu">
          <label id="iconoMenu" for="btn-menu"><img src="images/icons/icono-menu.png" height="30px"></label>
        
          <ul class="menu">
            <li><a href="universidades_uni.php">Inicio</a></li>
            <li><a href="vista_uni_uni.php">Mi Universidad</a></li>
          </ul>
        </nav><!-- .nav-menu -->

      </div>
    </header><!-- End Header -->
  </nav>

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        
        <div class="section-title" data-aos="zoom-out">
          <h2>INFORMACIÓN</h2>
          <p>ADMINISTRA TU INFORMACIóN AQUÍ</p>
        </div>
        <table class="table table-hover table-bordered table-responsive-md" id="tabla1">
    <thead class="thead-green">
        <tr>
            <th>Carrera</th>
            <th>Periodo Academico</th>
            <th>Tipo de carrera</th>
            <th>Borrar</th>
            <th>Editar</th>
        </tr>
    </thead>
    <?php
        include('conexiones/conexion.php');
        $carrera=array();
        $periodo_academico=array();
        $tipo_carrera=array();
        
        $consulta="SELECT * FROM oferta_educativa WHERE id_universidad = '$admin'";
        $ejecutar=mysqli_query($conexion,$consulta) or die ("Error en la
        consulta a la base de datos");
        
        while($columna=mysqli_fetch_array($ejecutar)){
          $id_oferta=$columna['id_oferta'];
          $carrera=$columna['carrera'];
          $periodo_academico=$columna['periodo_academico'];
          $tipo_carrera=$columna['tipo_carrera'];
    ?>
    <tr align="center">
    <td><?php echo $carrera; ?></td>
    <td><?php echo $periodo_academico; ?></td>
    <td><?php echo $tipo_carrera; ?></td>
    <td><a href="form_ofe.php?borrar=<?php echo $id_oferta; ?>">Borrar</a></td>
    <td><a href="form_ofe.php?editar=<?php echo $id_oferta; ?>">Editar</a></td>
    </tr>
        <?php } ?>
    </table>
    
        <div class="row content" data-aos="fade-up">
          <div class="col-lg-9">
            <?php include('conexiones/conexion.php'); ?>
            <?php
              require('conexiones/conexion_m.php');
                $query_m = "SELECT id_municipio, nombre_muni FROM municipio ORDER BY nombre_muni ASC";
                $resultado_m = $mysqli->query($query_m);
            ?>
            <!-- Datos Generales -->
            <div class="card box mt-4 card-child">
              <div class="card-header head">
                <h4 class="h4">Oferta Educativa</h4>
              </div>
              <form action="" method="POST" id="note-form" class="card-body">
                <input id="opc_1" name="Opciones1" type="radio" value="Opciones" onchange="funcion1()">
                Información
                <input id="opc_2" name="Opciones1" type="radio" value="Opciones" onchange="funcion1()">
                Archivos y documentos
                <div id="changeForm"></div>
                  <script>
                    function funcion1(){
                      document.getElementById("Ocultar_1").style.display = "none";
                      document.getElementById("Ocultar_2").style.display = "none";
                      var opc_1 = document.getElementById("opc_1");
                      var opc_2 = document.getElementById("opc_2");
                      if(opc_1.checked){
                      document.getElementById("Ocultar_1").style.display = "block";
                      //document.getElementById("changeForm").innerHTML = "Ano";
                      }
                      if(opc_2.checked){
                        document.getElementById("Ocultar_2").style.display = "block";
                        //document.getElementById("changeForm").innerHTML = "A";
                      }
                    }
                  </script>
                <div id="Ocultar_1">
                    <div name="carrera" class="form-group">
                      <input required type="text" id="carrera" placeholder="Carrera" class="form-control descrip" name="carrera" />
                    </div>
                    <div class="form-group">
                      <input required type="text" id="periodo_academico" placeholder="Periodo Academico" class="form-control descrip" name="periodo_academico" />
                    </div>
                    <div name="years" class="form-group">
                      <input required type="text" id="years" placeholder="Años" class="form-control descrip" name="years" />
                    </div>
                    <div name="meses" class="form-group">
                      <input required type="number" id="meses" placeholder="Meses" class="form-control descrip" name="meses" />
                    </div>
                    <div class="form-group">
                      <textarea required id="descripcion" name="descripcion" cols="30" rows="10" class="form-control descrip" placeholder="Descripción de la carrera"></textarea>
                    </div>
                    <div class="form-group">
                      <textarea required id="objetivo" name="objetivo" cols="30" rows="10" class="form-control descrip" placeholder="Objetivo de la carrera"></textarea>
                    </div>
                    <div class="form-group">
                      <textarea required id="perfil_ingreso" name="perfil_ingreso" cols="30" rows="10" class="form-control descrip" placeholder="Perfil ingreso"></textarea>
                    </div>
                    <div class="form-group">
                      <textarea required id="perfil_egreso" name="perfil_egreso" cols="30" rows="10" class="form-control descrip" placeholder="Perfil egreso"></textarea>
                    </div>
                    <div name="tipo_carrera" class="form-group">
                      <input required type="text" id="tipo_carrera" placeholder="Tipo de carrera" class="form-control descrip" name="tipo_carrera" />
                    </div>
                  </div>
                  <div id="Ocultar_2">
                    <div name="img_ofer_1" class="form-group">
                      <input required type="url" id="img_ofer_1" placeholder="Imagen 1" class="form-control descrip" name="img_ofer_1" />
                    </div>
                    <div name="img_ofer_2" class="form-group">
                      <input required type="url" id="img_ofer_2" placeholder="Imagen 2" class="form-control descrip" name="img_ofer_2" />
                    </div>
                    <div name="img_ofer_3" class="form-group">
                      <input required type="url" id="img_ofer_3" placeholder="Imagen 3" class="form-control descrip" name="img_ofer_3" />
                    </div>
                    <div name="carrera_video" class="form-group">
                      <input required type="url" id="carrera_video" placeholder="Video" class="form-control descrip" name="carrera_video" />
                    </div>
                    <div name="src_doc" class="form-group">
                      <input required type="url" id="src_doc" placeholder="Documento" class="form-control descrip" name="src_doc" />
                    </div>
                    <div name="plan_estudio" class="form-group">
                      <input required type="url" id="plan_estudio" placeholder="Plan de estudio" class="form-control descrip" name="plan_estudio" />
                    </div>
                  </div>
                <input type="submit" value="Guardar" class="btn btn-primary btn-block button-submit" name="Guardar2" />
                <script>
                  document.getElementById("Ocultar_1").style.display = "none";
                  document.getElementById("Ocultar_2").style.display = "none";
                </script>
              </form>
              
            </div>
          </div>
        </div>
      </div>
      <br>
  
    </section>
    <?php
    if(isset($_POST['Guardar2']))
    {
          $id_universidad = $admin;
          $periodo_academico = $_POST['periodo_academico'];
          $carrera = $_POST['carrera'];
          $descripcion = $_POST['descripcion'];
          $objetivo = $_POST['objetivo'];
          $perfil_ingreso = $_POST['perfil_ingreso'];
          $perfil_egreso = $_POST['perfil_egreso'];
          $plan_estudio = $_POST['plan_estudio'];
          $carrera_video = $_POST['carrera_video'];
          $tipo_carrera = $_POST['tipo_carrera'];
          $src_doc = $_POST['src_doc'];
          $years = $_POST['years'];
          $meses = $_POST['meses'];
          $img_ofer_1=$_POST['img_ofer_1'];
          $img_ofer_2=$_POST['img_ofer_2'];
          $img_ofer_3=$_POST['img_ofer_3'];
        $stm3 = "INSERT INTO oferta_educativa (id_universidad, periodo_academico, carrera, descripcion, objetivo, perfil_ingreso, perfil_egreso, plan_estudio, carrera_video, tipo_carrera, src_doc, years, meses, img_ofer_1, img_ofer_2, img_ofer_3) VALUES ('$id_universidad','$periodo_academico','$carrera','$descripcion','$objetivo','$perfil_ingreso','$perfil_egreso','$plan_estudio','$carrera_video','$tipo_carrera','$src_doc','$years','$meses','$img_ofer_1','$img_ofer_2','$img_ofer_3')";
        $query3 = mysqli_query($conexion, $stm3);
        if($query3){
          echo "Se han insertado correcatamento los datos";
        }
        else{
          echo "Error en la insercion";
        }
    }
    ?>
    <?php
        if(isset($_GET['editar'])){
            include("editar.php");
        }
    ?>
    
    <?php
        if(isset($_GET['borrar'])){
            $borrar_id=$_GET['borrar'];
            $borrar="DELETE FROM oferta_educativa WHERE id_oferta ='$borrar_id'";
            $ejecutar=mysqli_query($conexion,$borrar);
            if($ejecutar){                
                echo "<script>alert('Universidad eliminada')</script>";
                echo "<script>window.open('form_ofe.php','_self')</script>";
            }
        }
    ?> 

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>UPQROO</h3>
      <p>Av. Arco Bicentenario, Mza. 11, Lote 1119-33, SM. 255. Cancún, Quintana Roo, México. C.P. 77500</p>
      <div class="social-links">
        <a href="https://twitter.com/upqroo" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/upqroo" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.youtube.com/channel/UCy6VTWYIB9tay8P28cPe6Eg" class="youtube" target="_blank"><i class="bx bxl-youtube"></i></a>
      </div>
      <div>
      </div>
        ¿Quieres promocionar tu universidad de Quintana Roo? <br> Contáctanos por <a href="mailto:feriauniversitariaqroo@gmail.com?">feriauniversitariaqroo@gmail.com</a>
      <div class="copyright">
        <br>&copy; Copyright <strong><span>UPQROO</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Diseñado por la <a href="http://www.upqroo.edu.mx/" target="_blank">Universidad Politecnica de Quintana Roo</a><br>
        <br>¿Tienes problemas con la página? <a href="javascript:document.getElementById('soporte').style.display='block';void0">Mandanos un mensaje</a>
        <div id="soporte">
          <br><textarea name="textareasoporte" id="" cols="50" rows="5" placeholder="Describe tu problema"></textarea>
          <div class="boton-soporte">
            <br><button type="submit">Enviar mensaje</button>
          </div>
        </div> 
      </div>
    </div>

    <!-- ======= Top Bar ======= -->

  </footer>

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a> 

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>