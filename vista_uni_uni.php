<?php
  session_start();
  $admin=$_SESSION['id_uni'];
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

  <title>Mi Universidad</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
 <!-- 
<header id="header"  class="fixed-top d-flex align-items-center  header-transparent ">
  -->
  <header id="header" class="d-flex align-items-center  header-transparent">

    <div class="container d-flex align-items-center">

    <div class="logo mr-auto">
      <h1 class="text-light"><a href="index.html">Feria Virtual</a></h1>

    </div>

    <nav class="el-menu">
      <input type="checkbox" id="btn-menu">
      <label id="iconoMenu" for="btn-menu"><img src="images/icons/icono-menu.png" height="30px"></label>
      
      <ul class="menu">
        <li><a href="universidades_uni.php">Inicio</a></li>
        <li><a href="form_uni.php">Subir o actualizar información</a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </div>
<!-- </header> End Header -->
</nav>
  
  </header> <!-- End Header -->

  <main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <?php
              $consulta="SELECT nombre_uni FROM universidades WHERE id_universidad='$admin'";
              $ejecutar=mysqli_query($conexion,$consulta) or die ("Error en la consulta a la base de datos x1");
              $columna=mysqli_fetch_array($ejecutar);
              $nombre_uni = $columna['nombre_uni'];
              echo ("<h2>$nombre_uni</h2>");
            ?>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Mi universidad</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container" data-aos="fade-up">

          <div class="owl-carousel portfolio-details-carousel">
            <?php
              $consulta="SELECT img_uni_1, img_uni_2, img_uni_3 FROM universidades WHERE id_universidad='$admin'";
              $ejecutar=mysqli_query($conexion,$consulta) or die ("Error en la consulta a la base de datos x1");
              $columna=mysqli_fetch_array($ejecutar);
              $img_uni_1=$columna['img_uni_1'];
              $img_uni_2=$columna['img_uni_2'];
              $img_uni_3=$columna['img_uni_3'];
              echo ("<img src='$img_uni_1' class='img-fluid'>");
              echo ("<img src='$img_uni_2' class='img-fluid'>");
              echo ("<img src='$img_uni_3' class='img-fluid'>");
            ?>
          </div>

          <div class="portfolio-info">
            <h3>Contacto</h3>
            <ul>
              <?php
                $consulta="SELECT telefono_uni, correo_uni FROM universidades WHERE id_universidad='$admin'";
                $ejecutar=mysqli_query($conexion,$consulta) or die ("Error en la consulta a la base de datos x1");
                $columna=mysqli_fetch_array($ejecutar);
                $telefono_uni = $columna['telefono_uni'];
                $correo_uni = $columna['correo_uni'];
                echo ("<li><strong>Teléfono</strong>: $telefono_uni</li>");
                echo ("<li><strong>Direccion</strong>: Dirección Ejemplo</li>");
                echo ("<li><strong>Correo Electronico</strong>: <a href='#'>$correo_uni</a></li>");
              ?>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>Introducción</h2>
          <p>
            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
          </p>
        </div>
        <div class="portfolio-description">
          <h2>Oferta educativa</h2>
          <div id="carrera1">
            <div id="carrera1-muestra">
              <h5><a href="javascript:document.getElementById('carrera1-oculta').style.display='block'; document.getElementById('carrera1-muestra').style.display='none';void0">
              <?php
                $consulta="SELECT carrera FROM oferta_educativa WHERE id_universidad='$admin' AND id_oferta='1'";
                $ejecutar=mysqli_query($conexion,$consulta) or die ("Error en la consulta a la base de datos x1");
                $columna=mysqli_fetch_array($ejecutar);
                $carrera1 = $columna['carrera'];
                echo ("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$carrera1</a></h5>");
              ?>
            </div>
            <div id="carrera1-oculta">
              <h5><a href="javascript:document.getElementById('carrera1-oculta').style.display='none'; document.getElementById('carrera1-muestra').style.display='block';void0">
              <?php
                $consulta="SELECT carrera FROM oferta_educativa WHERE id_universidad='$admin' AND id_oferta='1'";
                $ejecutar=mysqli_query($conexion,$consulta) or die ("Error en la consulta a la base de datos x1");
                $columna=mysqli_fetch_array($ejecutar);
                $carrera1 = $columna['carrera'];
                echo ("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$carrera1</a></h5>");
              ?>
              <?php
                $consulta="SELECT descripcion, periodo_academico, objetivo, perfil_ingreso, perfil_egreso, plan_estudio, carrera_video, src_doc, years, meses, img_ofer_1, img_ofer_2, img_ofer_3 FROM oferta_educativa WHERE id_universidad='$iduni' AND id_oferta='1'";
                $ejecutar=mysqli_query($conexion,$consulta) or die ("Error en la consulta a la base de datos x1");
                $columna=mysqli_fetch_array($ejecutar);
                $descripcion1 = $columna['descripcion'];
                $periodo1 = $columna['periodo_academico'];
                $objetivo1 = $columna['objetivo'];
                $perfil_ingreso1 = $columna['perfil_ingreso'];
                $perfil_egreso1 = $columna['perfil_egreso'];
                $plan_estudio1 = $columna['plan_estudio'];
                $carrera_video1 = $columna['carrera_video'];
                $src_doc1 = $columna['src_doc'];
                $years1 = $columna['years'];
                $meses1 = $columna['meses'];
                $img_ofer_11 = $columna['img_ofer_1'];
                $img_ofer_21 = $columna['img_ofer_2'];
                $img_ofer_31 = $columna['img_ofer_3'];
                echo ("<p><h5>Pediodo Academico: $periodo1</h5></p><p><h5>Duración de la Carrera: $years1 años y $meses1 meses</h5></p><p><h5>Descrición de la carrera:</h5> <br> $descripcion1</p><p><h5>Objetivo:</h5> <br> $objetivo1</p><p><h5>Perfil de Ingreso:</h5> <br> $perfil_ingreso1</p><p><h5>Perfil de Egreso: </h5><br> $perfil_egreso1</p><p><a href='$plan_estudio1' target='_blank'><h5>Plan de Estudios</h5></a></p><p><a href='$src_doc1' target='_blank'><h5>Documento Informativo</h5></a></p><p><iframe class='embed-responsive-item' src='$carrera_video1'></iframe> <br><img src='$img_ofer_11' width='300' height='200'><img src='$img_ofer_21' width='300' height='200'><img src='$img_ofer_31' width='300' height='200'></p>");
              ?>
            </div>
            <div id="carrera2">
            <div id="carrera2-muestra">
              <h5><a href="javascript:document.getElementById('carrera2-oculta').style.display='block'; document.getElementById('carrera2-muestra').style.display='none';void0">
              <?php
                $consulta="SELECT carrera FROM oferta_educativa WHERE id_universidad='$admin' AND id_oferta='2'";
                $ejecutar=mysqli_query($conexion,$consulta) or die ("Error en la consulta a la base de datos x1");
                $columna=mysqli_fetch_array($ejecutar);
                $carrera2 = $columna['carrera'];
                echo ("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$carrera2</a></h5>");
              ?>
            </div>
            <div id="carrera2-oculta">
              <h5><a href="javascript:document.getElementById('carrera2-oculta').style.display='none'; document.getElementById('carrera2-muestra').style.display='block';void0">
              <?php
                $consulta="SELECT carrera FROM oferta_educativa WHERE id_universidad='$admin' AND id_oferta='2'";
                $ejecutar=mysqli_query($conexion,$consulta) or die ("Error en la consulta a la base de datos x1");
                $columna=mysqli_fetch_array($ejecutar);
                $carrera2 = $columna['carrera'];
                echo ("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$carrera2</a></h5>");
              ?>
              <?php
                $consulta="SELECT descripcion, periodo_academico, objetivo, perfil_ingreso, perfil_egreso, plan_estudio, carrera_video, src_doc, years, meses, img_ofer_1, img_ofer_2, img_ofer_3 FROM oferta_educativa WHERE id_universidad='$iduni' AND id_oferta='2'";
                $ejecutar=mysqli_query($conexion,$consulta) or die ("Error en la consulta a la base de datos x1");
                $columna=mysqli_fetch_array($ejecutar);
                $descripcion2 = $columna['descripcion'];
                $periodo2 = $columna['periodo_academico'];
                $objetivo2 = $columna['objetivo'];
                $perfil_ingreso2 = $columna['perfil_ingreso'];
                $perfil_egreso2 = $columna['perfil_egreso'];
                $plan_estudio2 = $columna['plan_estudio'];
                $carrera_video2 = $columna['carrera_video'];
                $src_doc2 = $columna['src_doc'];
                $years2 = $columna['years'];
                $meses2 = $columna['meses'];
                $img_ofer_22 = $columna['img_ofer_1'];
                $img_ofer_22 = $columna['img_ofer_2'];
                $img_ofer_32 = $columna['img_ofer_3'];
                echo ("<p><h5>Pediodo Academico: $periodo2</h5></p><p><h5>Duración de la Carrera: $years2 años y $meses2 meses</h5></p><p><h5>Descrición de la carrera:</h5> <br> $descripcion2</p><p><h5>Objetivo:</h5> <br> $objetivo2</p><p><h5>Perfil de Ingreso:</h5> <br> $perfil_ingreso2</p><p><h5>Perfil de Egreso: </h5><br> $perfil_egreso2</p><p><a href='$plan_estudio2' target='_blank'><h5>Plan de Estudios</h5></a></p><p><a href='$src_doc2' target='_blank'><h5>Documento Informativo</h5></a></p><p><iframe class='embed-responsive-item' src='$carrera_video2'></iframe> <br><img src='$img_ofer_22' width='300' height='200'><img src='$img_ofer_22' width='300' height='200'><img src='$img_ofer_32' width='300' height='200'></p>");
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section><!-- End Portfolio Details Section -->

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