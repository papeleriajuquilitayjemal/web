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

// Consulta SQL para obtener los datos de la tabla producto
$sql = "SELECT nombreP, precio FROM producto WHERE id_producto = 001";
$result = $conn->query($sql);
?>



<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <script src="app.js" async></script> <!--- Funcionlidad del carrito -->
    <title>Papeleria Juquilita </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <header class="barra-presentacion">
        <h1>Bienvenidos, tenemos todo en útiles</h1>
    </header>

    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg" style="background-color: #151618; color: #fff;">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#" style="color: #fff;">
                                    <img src="img/lapiz.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                                    <span style="font-family: 'Arial Black', sans-serif;">Papeleria
                                        Juquilita y Jemal</span>
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border-color: #fff;">
                                    <span class="navbar-toggler-icon" style="color: #fff;"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="contactenos.html" style="color: #fff;">Contactenos</a>
                                        </li>

                                        <li class="nav-item">
                                            <div class="dropdown">
                                                <span style="color: #ffffff;">Haz clic aquí para ver
                                                    más:</span>
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Haz clic aquí
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="lapices_y_mas.html">Lapices y mas</a>
                                                    <a class="dropdown-item" href="variado.html">Variado</a>
                                                    <a class="dropdown-item" href="libro.html">Libros</a>

                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                    <a class="navbar-brand" href="#" style="color: #050505;"></a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Bootstrap JS y jQuery (Asegúrate de incluir jQuery antes de Bootstrap JS) -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


            <section class="contenedor">
                <!-- Contenedor de elementos -->
                <div class="contenedor-items">
                    <div class="item">
                        <span class="titulo-item">Box </span> <!-- Aqui deben mostrarse lo datos -->
                        <img src="img/boxengasse.png" alt="" class="img-item">
                        <span class="precio-item">$25</span>  <!-- Aqui deben mostrarse lo datos -->
                        <button class="boton-item">Agregar al Carrito</button>
                    </div>
                    <div class="item">
                        <span class="titulo-item">English scribe</span> <!-- Aqui deben mostrarse lo datos -->
                        <img src="img/englishrose.png" alt="" class="img-item">
                        <span class="precio-item">$25</span> <!-- Aqui deben mostrarse lo datos -->
                        <button class="boton-item">Agregar al Carrito</button>
                    </div>
                    <div class="item">
                        <span class="titulo-item">Norma Nap</span>  <!-- Aqui deben mostrarse lo datos -->
                        <img src="img/knocknap.png" alt="" class="img-item">
                        <span class="precio-item">$35</span>   <!-- Aqui deben mostrarse lo datos -->
                        <button class="boton-item">Agregar al Carrito</button>
                    </div>
                    <div class="item">
                        <span class="titulo-item">BOOK Night</span>  <!-- Aqui deben mostrarse lo datos -->
                        <img src="img/lanight.png" alt="" class="img-item">
                        <span class="precio-item">$18</span>   <!-- Aqui deben mostrarse lo datos -->
                        <button class="boton-item">Agregar al Carrito</button>
                    </div>
                    <div class="item">
                        <span class="titulo-item">Norma All</span>  <!-- Aqui deben mostrarse lo datos -->
                        <img src="img/silverall.png" alt="" class="img-item">
                        <span class="precio-item">$32</span>  <!-- Aqui deben mostrarse lo datos -->
                        <button class="boton-item">Agregar al Carrito</button>
                    </div>
                    <div class="item">
                        <span class="titulo-item">Skin PAKC</span>
                        <img src="img/skinglam.png" alt="" class="img-item">
                        <span class="precio-item">$18</span>
                        <button class="boton-item">Agregar al Carrito</button>
                    </div>
                    <div class="item">
                        <span class="titulo-item">Scrit Blue</span>
                        <img src="img/midimix.png" alt="" class="img-item">
                        <span class="precio-item">$54</span>
                        <button class="boton-item">Agregar al Carrito</button>
                    </div>
                    <div class="item">
                        <span class="titulo-item">CAT NICHT</span>
                        <img src="img/sirblue.png" alt="" class="img-item">
                        <span class="precio-item">$32</span>
                        <button class="boton-item">Agregar al Carrito</button>
                    </div>
                    <div class="item">
                        <span class="titulo-item">Middlesteel</span>
                        <img src="img/middlesteel.png" alt="" class="img-item">
                        <span class="precio-item">$42</span>
                        <button class="boton-item">Agregar al Carrito</button>
                    </div>
                </div>

                <!-- Carrito de Compras -->
                <div class="carrito" id="carrito">
                    <div class="header-carrito">
                        <h2>Tu Carrito</h2>
                    </div>

                    <div class="carrito-items">

                    </div>
                    <div class="carrito-total">
                        <div class="fila">
                            <strong>Tu Total</strong>
                            <span class="carrito-precio-total">
                                $120.,00
                            </span>
                        </div>
                        <a href="carro/pago.html" class="btn-pagar" class="fa-solid fa-bag-shopping"><i>Pagar</i></a>
                    </div>
                </div>
            </section>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const dropdownMenu = document.querySelector("#dropdownMenuButton");

                    dropdownItems.forEach(item => {
                        item.addEventListener("click", function() {
                            // Aquí puedes añadir el comportamiento deseado para cada ventana
                            alert(`Haz clic en ${this.textContent}`);
                        });
                    });
                });
            </script>
        </div>
    </div>
</body>

</html>

