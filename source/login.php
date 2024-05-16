<?php
    session_start();
    include("../includes/conectar.php");
    $conexion = conectar();
    //recibimos el usuario y contraseña del formulario
    $usuario = $_POST['txt_user'];
    $password = $_POST['txt_password'];


   // echo "Usuario recibido:".$usuario;
    //echo '<br>';
    //echo "contraseña recibida:".$password;

    $sql="SELECT * FROM usuarios WHERE user='$usuario' AND password='$password' ";
    $resultado=mysqli_query($conexion,$sql);    
    $numero_registros = mysqli_affected_rows($conexion);
    //echo $numero_registros;

    if($numero_registros==1){
        //echo "Bienvenido al Sistema";
        //creamos sesiones para guardar la identificacion del usuario 'logeado'

        //creamos un array asociativo con los datos del usuario logeado en '$fila'
        $fila=mysqli_fetch_assoc($resultado);
        $_SESSION["S_USUARIO"] = $fila['user'];
        $_SESSION["S_ROL"] = $fila['rol'];
        
        header("Location: ../index.php");


    }else{
        //echo "Usuario y/o contraseña no reconocido.";
        header("Location: ingresar.php?error_ingreso=abc");

    }
?>