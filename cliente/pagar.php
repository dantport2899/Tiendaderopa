
<?php

//cargar la sesion
session_start();

include('../fun/connect_db.php');
include('../fun/paypalconfig.php');

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Detalles del Producto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="../lib/animate/animate.min.css" rel="stylesheet">
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- <link href="css/style.css" rel="stylesheet"> -->
        <link href="../css/hoverimages.css" rel="stylesheet">

        <!-- JS Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>   
 
        

  </head>
  <body>
  
  
        <!-- Insertar navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                <a class="navbar-brand pr-3" href="#" style="font-family: Bodoni FS; font-size: 45px;" >ANA LEAL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"  href="cliente-index.php" style="text-transform: uppercase;">Inicio</a>
                        </li>
                        
                        <li class="nav-item px-4">
                            <a class="nav-link " href="ropaboda.php" style="text-transform: uppercase;">Ropa&nbsp;de&nbsp;boda</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="ropaocasion.php" style="text-transform: uppercase;">Ropa&nbsp;de&nbsp;ocasión</a>
                        </li>
                        <li class="nav-item px4">
                            <a class="nav-link" href="ropaoferta.php" style="text-transform: uppercase;">Ropa&nbsp;en&nbsp;oferta</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="#ELFOOTER" style="text-transform: uppercase;">Contáctanos</a>
                        </li>
                        <ul class="navbar-nav ml-auto mb-2 mb-md-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="text-transform: uppercase;"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['username']; ?>
                                </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="usuario.php">Ir a perfil</a></li>
                                        <li><a class="dropdown-item" href="pedidos.php">Revisar pedidos</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal">Cerrar sesión</a></li>
                                    </ul>
                            </li>
                        </ul>

                        </li>
                        <ul class="navbar-nav ml-auto mb-2 mb-md-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="text-transform: uppercase;"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Carrito[<?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']); ?>]
                                </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item"  href="carrito.php" >Ver Carrito</a></li>
                                        <li><a class="dropdown-item" href="../fun/vaciarcarrito.php">Limpiar carrito</a></li>
                                    </ul>
                            </li>
                        </ul>
                        
                    </ul>
                    </ul> 
                </div>
            </nav>
            <br><br><br><br><br><br><br>

            <!-- Modal para cerrar sesión -->
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel">¿Cerrar sesión?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <p>Cualquier pedido no confirmado se cancelará</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" onclick="window.location.href='../index.php'" onclick="window.location.href='../fun/desconectar.php'">Cerrar sesión</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Insertar navbar -->


        <?php
            if($_POST)
            {
                $total=0;
                $SID=$_SESSION['idusuario'];
                $correo=$_POST['email'];
                $clavetrnsaccion="ssdadasf";
                $direccion=$_POST['direccion'];
                $i=0;


                foreach ($_SESSION['CARRITO'] as $indice=>$producto) 
                {
                    $total=$total+($producto['CANTIDAD']*$producto['PRECIO']);
                    $i++;
                }

                settype($i,"string");
                $usuario=$_SESSION['username'];
                $descripcion="El usuario: " .$usuario. " compro " .$i. " productos";

                $sql="INSERT INTO `pedidos` (`idpedidos`, `clavetransaccion`, `paypaldatos`, `idusuario`, `correo`, `total`, `fecha`, `fechaentrega`, `descripcion`, `direccion`, `status`) 
                VALUES (NULL, '$clavetrnsaccion', '', '$SID', '$correo', '$total', NOW(), NULL, '$descripcion', '$direccion', 'Pendiente')" ;

                $result=mysqli_query($conexion, $sql);
                if($result)
                    {

                    }else
                    {
                        echo "Error de registro<br>" .mysqli_error($conexion);
                    }

                $ultimoID = $conexion->insert_id;

                foreach ($_SESSION['CARRITO'] as $indice=>$producto) 
                {
                    $sql2="INSERT INTO `carrito` (`idcarrito`, `idpedido`, `idprenda`, `preciounitario`, `cantidad`, `vendido`) 
                    VALUES (NULL, '$ultimoID', '".$producto['ID']."', '".$producto['PRECIO']."', '".$producto['CANTIDAD']."', '0')";
                    $result2=mysqli_query($conexion, $sql2);

                    if($result2)
                    {
                    
                    }else
                    {
                        echo "Error de registro<br>" .mysqli_error($conexion);
                    }
                    
                }
     
            }
        ?>

    

    <div class="jumbotron text-center">
        <h1 class="display-4">¡Paso final!</h1>
        <hr class="my-4">
        <p class="lead"> Estas a punto de pagar con paypal la cantidad de: 
            <h4>$<?php echo number_format($total,2)?></h4>
            <br>
            <?php
            
            $currency = "MXN";
            $productPrice = $total;
            
            ?>
            <?php include 'paypalcheckout.php'; ?>

        </p>
        
        <p>Los productos seran enviados una vez se procese el pago<br>
            <strong>(Para aclaraciones contactarnos por nuestros correos o redes sociales)</strong>
        </p>
           
        
    </div>

          

  
    <br><br><br><br><br><br>

    <!-- Modal para cerrar sesión -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel">¿Cerrar sesión?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <p>Cualquier pedido no confirmado se cancelará</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" onclick="window.location.href='../fun/desconectar.php'" onclick="window.location.href='../fun/desconectar.php'">Cerrar sesión</button>
                    </div>
                </div>
            </div>
        </div>
   
   <!-- Inicio de Footer -->
   <footer class="footer mt-auto py-3 bg-light bg-dark text-white">
            <div class="container">
                <form action="">
                <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                <!--Grid column-->
                    <div class="col-auto">
                        <p class="pt-2">
                        <strong>Suscríbete a nuestro newsletter</strong>
                        </p>
                    </div>
                <!--Grid column-->

                <!--Grid column-->
                    <div class="col-md-5 col-12">
                    <!-- Email input -->
                        <div class="form-outline form-white mb-4">
                        <input type="email" id="mailforNewsletter" class="form-control" placeholder="Ingresa tu email"/>
                        </div>
                    </div>
                <!--Grid column-->

                <!--Grid column-->
                    <div class="col-auto">
                    <!-- Submit button -->
                        <button type="submit" class="btn btn-outline-light mb-4">
                        Subscribirse
                        </button>
                    </div>
                <!--Grid column-->
                    </div>
                <!--Grid row-->
                </form>

            </div>
            
            
            <!-- Texto sobre los detalles del negocio o empresa -->
            <div class="container">
                <p style="text-align: center;">Descripción breve del negocio y sobre qué detalles tiene.</p>
                <hr>
            </div>

            <!-- Texto sobre los links de contacto y otros links útiles -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto" id="ELFOOTER">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Contacto
                </h6>
                <p><i class="fas fa-home me-3"></i> Dirección del negocio</p>
                <p><i class="fas fa-envelope me-3">&nbsp;analeal@example.com</i></p>
                <p><i class="fas fa-phone me-3"></i> Numero de teléfono</p>
                <p><i class="fab fa-facebook me-3"></i> Página de Facebook</p>
            </div>
        </footer>
        
      
  </body>
</html>