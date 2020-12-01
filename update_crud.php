<?php
    if(isset($_POST['Actualizar'])){
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

        $actualizar="UPDATE universidades SET id_universidad='$admin',nombre_uni='$nombre_uni',telefono_uni='$telefono_uni',correo_uni='$correo_uni',id_municipio='$id_municipio',
        logo_uni='$logo_uni', id_usu_uni='$admin',latitud='$latitud',longitud='$longitud',facebook='$facebook',whatsapp='$whatsapp',src_video='$src_video',img_uni_1='$img_uni_1',
        img_uni_2='$img_uni_2', img_uni_3='$img_uni_3' WHERE id_universidad='$admin'";
        $query_actualizar=mysqli_query($conexion,$actualizar);
        if($query_actualizar){
          echo "Se han actualizado correctamente los datos de la universidad";
        }else{
          echo "No se han podido actualizar de los datos de la universidad";
        } 
    }
?>