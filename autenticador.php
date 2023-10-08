<?php
include('conexion.php');
session_start();

if(isset($_POST['do_login']))
{

$conexion = Conectar();

$pass = $_POST['password'];
$email = $_POST['email'];

$consulta = "select *from users where email='$email' and pass='$pass'";

$respuesta = mysqli_query($conexion, $consulta);

    if($respuesta)
        {
          //  var_dump($respuesta);
           foreach($respuesta as $res)
           {
            $_SESSION['token'] = $res['id'];
           }
            
            
            echo "success";

           
        }
    else
        {
            echo "fail";
        }
}
exit();

?>