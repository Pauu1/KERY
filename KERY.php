<?php
//abro la conexion
$con = mysqli_connect("localhost","paulina","","kery") or die ('Error en la conexion de servidor');

//Le pido algo a la base de datos
$sql="INSERT INTO usuarios
VALUES (
    '".$_POST['nombre']."',
    '".$_POST['apellido_paterno']."',
    '".$_POST['usuario']."',
    '".$_POST['contraseña']."',
    '".$_POST['correo']."' )";


$resultado=mysqli_query($con,$sql) or die('Error en el query database');
mysqli_close($con);
echo "El registro se ha metido en la base de datos"

?>