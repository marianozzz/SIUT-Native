<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/sidebars.css">

    <style>
        body {
            padding-bottom: 70px; /* Ajusta este valor para dejar espacio para el footer */
        }

        main {
            margin-bottom: 20px; /* Ajusta este valor para dejar espacio entre el contenido y el footer */
        }
    </style>
 
    <title>Inicio</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My KPOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" onclick="inicio()" id="inicio">Inicio</a>
        </li>
        <?php if (!isset($_SESSION['token'])){ ?>
        <li class="nav-item ">
          <a class="nav-link active" href="#" onclick="login()">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#" onclick="register()">Registrarse</a>
        </li>
        <?php }
          else{ ?>

          <li class="nav-item ">
             <a class="nav-link active" href="#"> <?php echo $_SESSION['user'];?></a>
          </li>
             <a class="nav-link active" href="#" onclick="cerrar()"> Cerrar Sesion</a>
          </li>

          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Opciones
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#" onclick="perfil()">Mi Perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            
          </ul>
        </li>
        <?php } ?>
        
     
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" id="boton"type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div class="container-fluid">
    <div id="contenedor">
      <div class="row mt-4">
        <div class="col-md-4">
          <div class="card">
                <div class="card-header">
                  <img src="img/black.jpg" class="rounded mx-auto d-block" alt="...">
                </div>
                <div class="card-body">
                  <p>Fans de Blackpink criticaron boletos de hasta 30 mil pesos para el concierto en el Foro Sol</p>
                </div>
            </div>
        </div>
      </div>
         
    </div>
</div>
<footer class="fixed-bottom bg-dark text-light text-center p-3">
        <div class="container">
            <p>&copy; 2023 My KPOP. Todos los derechos reservados.</p>
        </div>
</footer>

<script src="dist/js/jquery-3.7.1.js"></script>
<script src="dist/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">

function inicio(){
	$('#contenedor').load('inicio.php')
}
function login(){
	$('#contenedor').load('login.php')
}
function cerrar(){
	$('#contenedor').load('cerrar.php')
}
function perfil(){
	$('#contenedor').load('users/profile.php')
}
function register(){
	$('#contenedor').load('register.php')
}
</script>



</body>
</html>