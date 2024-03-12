<?php
  // Código para registro de cliente  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $ciudad = $_POST["ciudad"];
    $direccion = $_POST["direccion"];
    $nombre_usuario = $_POST["nombre_usuario"];
    $contrasena = $_POST["contrasena"];

    // Configuración de la conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "papeleria";

    // Crear la conexión
    $connection = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($connection->connect_error) {
        die("Error de conexión: " . $connection->connect_error);
    }

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO cliente(nombreC, apellidosC, correoE, telefono, ciudad, direccion, id_cliente, contrasena) VALUES 
    ('$nombre', '$apellidos', '$correo', '$telefono','$ciudad', '$direccion', '$nombre_usuario', '$contrasena')";

    // Verificar Registro
    if ($connection->query($sql) === TRUE) {
        echo '<script>alert("Registro exitoso");</script>';
        header("Location: Index.php"); // Redirigir a la página de bienvenida
        exit(); // Asegúrate de salir del script después de redirigir
    } else {
        echo "Error al registrar: " . $connection->error;
    }

    // Cerrar la conexión
    $connection->close();
}

?>

