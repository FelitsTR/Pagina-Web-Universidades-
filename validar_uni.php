<?php  
if (isset($_POST['Iniciar_2'])) {
    session_start();
    include('conexiones/conexion.php');
    $correo_u = $_POST['correo_u'];
    $clave_uni = $_POST['clave_uni'];

    $consulta = "SELECT * FROM usuarios_uni WHERE correo_u='$correo_u' and clave_uni='$clave_uni'";
    $query = mysqli_query($conexion,$consulta);
        if(isset($_POST['correo_u']) && isset($_POST['clave_uni'])){
        {
            if(mysqli_num_rows($query) > 0)
            {
                if($row =mysqli_fetch_assoc($query))
                { 
                    $_SESSION['id_uni'] = $row['id_usu_uni'];
                    header('Location:universidades_uni.php');
                }
            }
            else
            {
                header('Location:login_uni.php');
                echo '<script> alert("Usuario o contraseña incorrectos."); </script>';
            }
        }
    }
}
?>