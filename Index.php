<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "papeleria";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si se han enviado los datos del formulario
if (isset($_POST['nombre_usuario']) && isset($_POST['contrasena'])) {
    // Obtener los datos del formulario
    $nombre_usuario = $_POST['nombre_usuario'];
    $contrasena = $_POST['contrasena'];

    // Consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT * FROM cliente WHERE id_cliente ='$nombre_usuario' AND contrasena = '$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuario autenticado correctamente
        header("Location: Inicio\papeleria\libretas.php"); // Redirigir a la página de bienvenida
        exit(); // Asegúrate de salir del script después de redirigir
    } else {
        // Usuario no encontrado o contraseña incorrecta
        echo "Nombre de usuario o contraseña incorrectos";
    }
} else {
    // Los datos del formulario no se han enviado
    echo "Por favor, complete el formulario de inicio de sesión";
}

$conn->close();
?>  



<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
</head>

<body>
    <h1>Juquilita y Jemal</h1>

    <div id="contenedor">
        <div id="central">
            <div id="login">
                <div class="titulo">
                  <p>¡Bienvenido!</p>
                </div>
                <!-- Formulario -->
                <form id="loginform" action="Index.php" method="POST">
                    <input type="text" id="nombre_usuario" name="nombre_usuario" placeholder="Usuario" required>
                    <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>
                    <!-- <button type="submit" title="Ingresar">Inicio de sesión</button> -->
                    <input type="submit" value="Iniciar sesion">
                </form>
                <!-- Mas opciones -->
                <div class="pie-form">
                    <a href="registro_cliente.html">¿No tienes cuenta? Regístrate</a>
                </div>

            </div>
        </div>
    </div>
    
<style>
    /*Estilos de Index.html  */

    body {
        font-family: 'Overpass', sans-serif;
        font-weight: normal;
        font-size: 100%;
        color: #05669b;
        margin: 0;
        background: linear-gradient(135deg, #3264d8, #0df192);
        /* Fondo degradado lineal */
    }

    h1{
        margin: 0 auto;
        text-align: center;
        margin-top: 40px;
        color: black;
        font-size: 50px;
    }

    #contenedor {
        display: flex;
        align-items: center;
        justify-content: center;

        margin: 0;
        padding: 0;
        min-width: 100vw;
        min-height: 100vh;
        width: 100%;
        height: 100%;
    }

    #central {
        max-width: 320px;
        width: 100%;
    }

    .titulo {
        font-size: 3rem;
        /* Tamaño de fuente ajustado */
        color: #eaf2f8;
        /* Color del texto */
        text-align: center;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
        /* Sombra del texto */
    }


    #login {
        width: 0 auto;
        padding: 50px 30px;
        background-color: #1b2e47;

        -webkit-box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.15);
        box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.15);

        border-radius: 3px 3px 3px 3px;
        -moz-border-radius: 3px 3px 3px 3px;
        -webkit-border-radius: 3px 3px 3px 3px;

        box-sizing: border-box;
    }

    #login input {
        font-family: 'Overpass', sans-serif;
        font-size: 110%;
        color: #1b262c;

        display: block;
        width: 100%;
        height: 40px;

        margin-bottom: 10px;
        padding: 5px 5px 5px 10px;

        box-sizing: border-box;

        border: none;
        border-radius: 3px 3px 3px 3px;
        -moz-border-radius: 3px 3px 3px 3px;
        -webkit-border-radius: 3px 3px 3px 3px;
    }

    #login input::placeholder {
        font-family: 'Overpass', sans-serif;
        color: #341b3a;
    }

    form input [type = 'submit'] {
        font-family: 'Overpass', sans-serif;
        font-size: 110%;
        color: #1b262c;
        width: 100%;
        height: 40px;
        border: none;

        border-radius: 3px 3px 3px 3px;
        -moz-border-radius: 3px 3px 3px 3px;
        -webkit-border-radius: 3px 3px 3px 3px;

        background-color: #bbe1fa;

        margin-top: 10px;
    }

    #login button:hover {
        background-color: #5a7281;
        color: #bbe1fa;
    }

    .pie-form {
        font-size: 90%;
        text-align: center;
        margin-top: 15px;
    }

    .pie-form a {
        display: block;
        text-decoration: none;
        color: #bbe1fa;
        margin-bottom: 3px;
    }

    .pie-form a:hover {
        color: #888f94;
    }

    .inferior {
        margin-top: 10px;
        font-size: 90%;
        text-align: center;
    }

    .inferior a {
        display: block;
        text-decoration: none;
        color: #bbe1fa;
        margin-bottom: 3px;
    }

    .inferior a:hover {
        color: #3282b8;
    }
</style>

</body>
</html>

