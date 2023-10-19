<?php
include('conexion.php');
session_start();

if(isset($_POST['do_login']))
{

$conexion = Conectar();

$pass = $_POST['password'];
$email = $_POST['email'];

$consulta = "select *from users where email='$email' and password='$pass'";

//echo $consulta;
$respuesta = mysqli_query($conexion, $consulta);

    if($respuesta)
        {
          //  var_dump($respuesta);
           foreach($respuesta as $res)
           {
            $_SESSION['token'] = $res['id'];
            $_SESSION['user']  = $res['name'];
            echo "success";
           // header('location:index.php');
           }
            
           
        }
    else
        {
            echo "fail";
        }
}
exit();

?>