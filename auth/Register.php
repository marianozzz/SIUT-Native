<?php

include('../conexion.php');

$conexion = Conectar();
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $name = $_POST["nombre"];
    $email= $_POST["correo"];
    $password = $_POST["password"];

    // Validación básica (puedes agregar más validaciones según tus necesidades)
    if (empty($name) || empty($email) || empty($password)) {
        echo "Por favor, completa todos los campos.";
    } else {
        // Hash de la contraseña (debes usar funciones más seguras en una aplicación real)
        $hashpassword = password_hash($password, PASSWORD_DEFAULT);

        // Aquí podrías realizar la inserción en la base de datos
        // (ten en cuenta que este es un ejemplo básico y no está conectado a una base de datos)
        // $resultado = insertarUsuario($name, $email, $hashpassword);
        $consulta = "insert into users(name,email,password) values('$name','$email','$password')";
        $resultado = mysqli_query($conexion, $consulta);
        // Muestra un mensaje de éxito o error según el resultado de la inserción
        if ($resultado) {
            echo "¡Registro exitoso!";
        } else {
            echo "Error al registrar el usuario. Por favor, inténtalo de nuevo.";
        }
    }
}

?>