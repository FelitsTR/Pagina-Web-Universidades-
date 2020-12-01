<?php   
 if(isset($_POST['Insertar'])){
     session_start();
     $admin=$_SESSION['id_uni'];
     $nombre_uni = $_POST['nombre_uni'];
     $telefono_uni = $_POST['telefono_uni'];
     $correo_uni = $_POST['correo_uni'];
     $id_municipio = $_POST['id_municipio'];
     $logo_uni = $_POST['logo_uni'];
     $latitud = $_POST['latitud'];
     $longitud = $_POST['longitud'];
     $facebook = $_POST['facebook'];
     $whatsapp = $_POST['whatsapp'];
     $src_video = $_POST['src_video'];
     $img_uni_1=$_POST['img_uni_1'];
     $img_uni_2=$_POST['img_uni_2'];
     $img_uni_3=$_POST['img_uni_3'];
  
     include('conexiones/conexion.php');
     $insertar="INSERT INTO universidades (id_universidad, nombre_uni, telefono_uni, correo_uni, id_municipio, logo_uni, id_usu_uni, latitud, longitud, facebook, whatsapp, src_video,
     img_uni_1, img_uni_2, img_uni_3) VALUES ('$admin', '$nombre_uni', '$telefono_uni','$correo_uni','$id_municipio','$logo_uni','$admin','$latitud','$longitud','$facebook','$whatsapp',
     '$src_video','$img_uni_1','$img_uni_2','$img_uni_3')";
      $query_insertar=mysqli_query($conexion,$insertar);
      if($query_insertar){
        echo "Se han insertado correctamente los datos de la universidad";
      }else{
        echo "No se han podido insertar los datos de la universidad";
      } 


   } 
   
                      

                
?>