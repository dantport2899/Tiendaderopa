<?php
//conectar con la base de datos
require("connect_db.php");

$id = $_POST['id'];
   

          
$sqlborrar="DELETE from pedidos where id=$id";
$resborrar=mysqli_query($conexion, $sqlborrar);
           
if($resborrar)
    {
        echo '<script>alert ("Descuento eliminado")</script>';
    }else
    {
        echo "Error de eliminacion<br>" .mysqli_error($conexion);
    }

echo "<script>location.href='../administrador/pedidos.php'</script>";

mysqli_close($conexion);



 ?>