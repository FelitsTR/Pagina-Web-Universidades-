<?php
  session_start();
  $admin=$_SESSION['id_uni'];
  if($admin >0){
    header('Locate:index.php');
  }
   include('conexiones/conexion.php');
  
                  
      $consulta="SELECT * FROM universidades WHERE id_universidad='$admin'";
      $ejecutar=mysqli_query($conexion,$consulta) or die ("Error en la consulta a la base de datos x1");

      $columna=mysqli_fetch_array($ejecutar);
      $nombre_uni = $columna['nombre_uni'];
      $telefono_uni = $columna['telefono_uni'];
      $correo_uni = $columna['correo_uni'];
      $id_municipio = $columna['id_municipio'];
      $logo_uni = $columna['logo_uni'];
      $latitud = $columna['latitud'];
      $longitud = $columna['longitud'];
      $facebook = $columna['facebook'];
      $whatsapp = $columna['whatsapp'];
      $src_video = $columna['src_video'];
      $img_uni_1=$columna['img_uni_1'];
      $img_uni_2=$columna['img_uni_2'];
      $img_uni_3=$columna['img_uni_3'];
      //$nombre_conferencia = $columna['nombre_conferencia'];
      //$src_conferencia = $columna['src_conferencia'];
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
                <h4 class="h4">Datos Generales</h4>
              </div>
              <form action="update_crud.php" method="POST" id="note-form" class="card-body">
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
                  <div name="Nombre_Universidad" class="form-group">
                    <input required type="text" id="nombre_uni" value="<?php echo $nombre_uni?>" placeholder="Nombre Universidad" class="form-control descrip" name="nombre_uni" />
                  </div>
                  <div class="form-group">
                    <select required name="id_municipio" class="form-control descrip">
                      
                      <?php while($row = $resultado_m->fetch_assoc()) { ?>
                        <option value="<?php echo $row['id_municipio']; ?>"><?php echo $row['nombre_muni']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div name="telefono_uni" class="form-group">
                    <input required type="tel" id="telefono_uni" value="<?php echo $telefono_uni?>" placeholder="Telefono" class="form-control descrip" name="telefono_uni" />
                  </div>
                  <div name="correo_uni" class="form-group">
                    <input required type="email" id="correo_uni" value="<?php echo $correo_uni?>" placeholder="Correo" class="form-control descrip" name="correo_uni" />
                  </div>
                  <div name="longitud" class="form-group">
                    <input required type="text" id="longitud" value="<?php echo $longitud?>" name="longitud" class="form-control descrip" placeholder="Longitud"></input>
                  </div>
                  <div name="latitud" class="form-group">
                    <input required type="text" id="latitud" value="<?php echo $latitud?>" name="latitud" class="form-control descrip" placeholder="Latitud"></input>
                  </div>
                  <div name="facebook" class="form-group">
                    <input required type="url" id="facebook" value="<?php echo $facebook?>" placeholder="Facebook" class="form-control descrip" name="facebook" />
                  </div>
                  <div name="whatsapp" class="form-group">
                    <input required type="tel" id="whatsapp" value="<?php echo $whatsapp?>" placeholder="Whatsapp" class="form-control descrip" name="whatsapp" />
                  </div>
                </div>
                <div id="Ocultar_2">
                  <div name="logo_uni" class="form-group">
                    <input required type="url" id="logo_uni" value="<?php echo $logo_uni?>" placeholder="Logo" class="form-control descrip" name="logo_uni" />
                  </div>
                  <div name="img_uni_1" class="form-group">
                      <input required type="url" id="img_uni_1" value="<?php echo $img_uni_1?>" placeholder="Imagen 1" class="form-control descrip" name="img_uni_1" />
                    </div>
                    <div name="img_uni_2" class="form-group">
                      <input required type="url" id="img_uni_2" value="<?php echo $img_uni_2?>" placeholder="Imagen 2" class="form-control descrip" name="img_uni_2" />
                    </div>
                    <div name="img_uni_3" class="form-group">
                      <input required type="url" id="img_uni_3" value="<?php echo $img_uni_3?>" placeholder="Imagen 3" class="form-control descrip" name="img_uni_3" />
                    </div>
                  <div name="src_video" class="form-group">
                    <input required type="url" id="src_video" value="<?php echo $src_video?>" placeholder="Video" class="form-control descrip" name="src_video" />
                  </div>
                  <!-- <div name="nombre_conferencia" class="form-group">
                    <input required type="text" id="nombre_conferencia" value="<?php echo $nombre_conferencia?>" placeholder="Descripción de la conferencia" class="form-control descrip" name="nombre_conferencia" />
                  </div>
                  <div name="src_conferencia" class="form-group">
                    <input required type="url" id="src_conferencia" value="<?php echo $src_conferencia?>" placeholder="Conferencia" class="form-control descrip" name="src_conferencia" />
                  </div> -->
                </div>
                <input type="submit" value="Actualizar" class="btn btn-primary btn-block button-submit" name="Actualizar" />

                <!-- Inicio Editar -->


                <br>
<!--                 <form method="POST" action="" class="form-inline" id="form2">
                    <input type="number" name="id" class="form-control mb-2 mr-sm-2" value=<?php //echo $id; ?>">
                    <input type="text" name="nombre" class="form-control mb-2 mr-sm-2" value="<?php //echo $nombre; ?>">
                    <input type="text" name="telefono" class="form-control mb-2 mr-sm-2" value="<?php //echo $telefono; ?>">
                    <input type="text" name="email" class="form-control mb-2 mr-sm-2" value="<?php //echo $email; ?>">
                    <input type="number" name="costoinscrip" class="form-control mb-2 mr-sm-2" value="<?php //echo $costoinscrip; ?>">
                    <input type="number" name="costoreins" class="form-control mb-2 mr-sm-2" value="<?php //echo $costoreins; ?>">
                    <input type="submit" name="actualizar" class="btn btn-primary mb-2 mr-sm-2" value="Actualizar datos">

                </form> -->

                
                <script>
                  document.getElementById("Ocultar_1").style.display = "none";
                  document.getElementById("Ocultar_2").style.display = "none";
                </script>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

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