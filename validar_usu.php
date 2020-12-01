<?php  
if (isset($_POST['Iniciar_1'])) {
    session_start();
    include('conexiones/conexion.php');
    $correo_usu = $_POST['correo_usu'];
    $clave_usu = $_POST['clave_usu'];

    $consulta = "SELECT * FROM usuarios WHERE correo_usu='$correo_usu' and clave_usu='$clave_usu'";
    $query = mysqli_query($conexion,$consulta);
        if(isset($_POST['correo_usu']) && isset($_POST['clave_usu'])){
        {
            if(mysqli_num_rows($query) > 0)
            {
                if($row =mysqli_fetch_assoc($query))
                { 
                    $_SESSION['id_usu'] = $row['id_usuario'];
                    $_SESSION['nom_usu'] = $row['nombre_usu'];
                    header('Location:universidades_usu.php');
                }
            }
            else
            {
                header('Location:login_usu.php');
                echo '<script> alert("Usuario o contraseña incorrectos."); </script>';
                
            }
        }
    }
}
?>