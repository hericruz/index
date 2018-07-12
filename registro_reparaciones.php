<?php

session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Reparaciones</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/device.min.js"></script>
    <link href="css2/bootstrap.min.css" rel="stylesheet">
    <link href="css2/style.css" rel="stylesheet">
  </head>

  <body>
    <div class="page">
      <!--
      ========================================================
                    HEADER
      ========================================================
      
      
      -->
      <header>
        <div class="container">
          <div class="brand">
           <img src="images/logo.png">
          </div><a href="callto:#" class="fa-phone">775-750-94-29</a>
        </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
              <ul data-type="navbar" class="sf-menu">
                <li ><a href="home.php">Home</a>
                </li>
                 <li class="active"><a href="" >Registro</a> 
                   <ul>
                    <li><a href="#"><img src="images/productos.png">Producto</a>
                      <ul>
                          <li><a href="lista_productos.php"><img src="images/ver.png">Ver</a></li>
                          <li><a href="registrar_productos.php"><img src="images/editar.png">Registrar</a></li>
                        </ul>
                      </li>
                     <li><a href="#"><img src="images/clientes.png">Clientes</a>
                      <ul>
                          <li><a href="lista_clientes.php"><img src="images/ver.png">Ver</a></li>
                          <li><a href="registrar_cliente.php"><img src="images/editar.png">Registrar</a></li>
                        </ul>
                      </li>
                       <li><a href="#"><img src="images/reparaciones.png">Reparaciones</a>
                      <ul>
                         <li><a href="lista_reparaciones.php"><img src="images/ver.png">Ver</a></li>
                          <li><a href="registro_reparaciones.php"><img src="images/editar.png">Registrar</a></li>
                        </ul>
                      </li>
                       <li><a href="#"><img src="images/usuarios.png">Usuarios</a>
                      <ul>
                          <li><a href="lista_usuarios.php"><img src="images/ver.png">Ver</a></li>
                          <li><a href="registra_usuarios.php"><img src="images/editar.png">Registrar</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                      <li ><a href="./">Ventas</a>
                        <ul>
                         <li><a href="ventas.php"><img src="images/Venta.png">Realizar</a></li>
                          <li><a href="historial_ventas.php"><img src="images/historial.png">Historial</a></li>
                        </ul>
                      </li>
                      <li ><a href="index-3.php">Acerca de </a></li>
                      <li ><a href="./">Ayuda</a></li>
                    
                      <li ><img src="images/usuario.png" align="rigth"></li>
                      <li><a ><?php echo $_SESSION["user"]; ?></a></li>
                       <li ><?php echo '<a href="index.html">Cerrar sesión</a>' ?></li>
                    
            </nav>
          </div>
        </div>
      </header>
      <!--
      ========================================================
                                  CONTENT
      ========================================================
   
      ========================================================
                                  FOOTER
      ========================================================
      -->
  
     
      
  
 <h3>Registro de reparaciones de equipo</h3>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <form method="POST" action="registro_reparaciones.php">
        <div class="form-group">
          <label for="codigo">
          Codigo
          </label>
          <input type="text" class="form-control" name="codigo">
        </div>
        <div class="form-group">
          <label for="marca">
          Marca
          </label>
          <input type="text" class="form-control" name="marca">
        </div>
        <div class="form-group">
          <label for="modelo">
          Modelo
          </label>
          <input type="text" class="form-control" name="modelo">
        </div>
        <div class="form-group">
          <label for="falla">
          Falla
          </label>
          <input type="text" class="form-control" name="falla">
        </div>
        <div class="form-group">
          <label for="accesorios">
          Accesorios
          </label>
          <input type="text" class="form-control" name="accesorios">
        </div>
        <div class="form-group">
          <label for="fecha">
          Fecha de entrada
          </label>
          <input type="text" class="form-control" name="fecha_ent">
        </div>
        <div class="form-group">
          <label for="fecha_salida">
          Fecha de salida
          </label>
          <input type="text" class="form-control" name="fecha_sal">
        </div>
         <div class="form-group">
          <label for="costo">
          Costo
          </label>
          <input type="text" class="form-control" name="costo">
        </div>
        <div class="form-group">
          <label for="cliente">
          Cliente
          </label>
          <input type="text" class="form-control" name="cliente">
        </div>
      
        <center><input type="submit" name="btn1" value="Registrar"  class="btn btn-success" /></center>
      </form>

    <?php 
      if(isset($_POST['btn1']))
      {

        include("abrir_conexion.php");
        
        $codigo = $_POST['codigo'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $falla = $_POST['falla'];
        $accesorios = $_POST['accesorios'];
        $fecha_ent = $_POST['fecha_ent'];
        $fecha_sal = $_POST['fecha_sal'];
        $costo = $_POST['costo'];
        $cliente = $_POST['cliente'];
        
$conexion->query("INSERT INTO $tabla_db3 (codigo,Marca,Modelo,Falla,accesorios,fecha_entrada,
        fecha_salida,costo,codigo_cliente) values ('$codigo','$marca','$modelo','$falla','$accesorios','$fecha_ent','$fecha_sal','$costo','$cliente')");
        

        include("cerrar_conexion.php");

      }
    ?>
    </div>
  </div>
</div>
    <script src="js/script.js"></script>
  </body>
</html>