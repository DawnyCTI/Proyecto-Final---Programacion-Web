<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DCT Librería</title>

    <!-- Enlaces a Bootstrap y CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">

</head>

<body>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">DCT Librería</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="libro.php">Libros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="autores.php">Autores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>

                
            </ul>
        </div>
    </nav>

    <!-- Sección de Bienvenida -->
    <section id="bienvenida" class="my-5">
        <div class="container text-center">
            <h1 class="display-4">Bienvenido a DCT Librería</h1>
            <p class="lead">Tu destino para descubrir nuevos mundos a través de la lectura.</p>

            <!-- Carrusel de Imágenes -->
            <div id="carruselBienvenida" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/img1.jpg" class="d-block w-100" alt="Imagen 1">
                    </div>
                    <div class="carousel-item">
                        <img src="img/img2.jpg" class="d-block w-100" alt="Imagen 2">
                    </div>
                    <div class="carousel-item">
                        <img src="img/img3.jpg" class="d-block w-100" alt="Imagen 3">
                    </div>
                    <div class="carousel-item">
                        <img src="img/img4.jpg" class="d-block w-100" alt="Imagen 4">
                    </div>
                    <div class="carousel-item">
                        <img src="img/img5.jpg" class="d-block w-100" alt="Imagen 5">
                    </div>
                    <div class="carousel-item">
                        <img src="img/img6.jpg" class="d-block w-100" alt="Imagen 6">
                    </div>
                    <div class="carousel-item">
                        <img src="img/img7.jpg" class="d-block w-100" alt="Imagen 7">
                    </div>
                    <div class="carousel-item">
                        <img src="img/img8.jpg" class="d-block w-100" alt="Imagen 8">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carruselBienvenida" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carruselBienvenida" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Enlace a la sección de Libros -->
    <section id="libros" class="my-5">
        <div class="container text-center">
            <h2 class="display-4">Explora Nuestra Colección de Libros</h2>
            <p class="lead">Sumérgete en historias cautivadoras de diversos géneros.</p>
            <a class="btn btn-primary btn-lg" href="libros.php">Ver Libros</a>
        </div>
    </section>

    <!-- Enlace a la sección de Autores -->
    <section id="autores" class="my-5">
        <div class="container text-center">
            <h2 class="display-4">Descubre a los Maestros de la Pluma</h2>
            <p class="lead">Conoce a los talentosos autores detrás de tus libros favoritos.</p>
            <a class="btn btn-primary btn-lg" href="autores.php">Ver Autores</a>
        </div>
    </section>

    <!-- Enlace a la sección de Contacto -->
    <section id="contacto" class="my-5">
        <div class="container text-center">
            <h2 class="display-4">Contacta con Nosotros</h2>
            <p class="lead">¿Preguntas, comentarios o sugerencias? Estamos aquí para escucharte.</p>
            <a class="btn btn-primary btn-lg" href="contacto.php">Contacto</a>
        </div>
    </section>

    <!-- Enlaces a Bootstrap y JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <footer id="footer" class="bg-dark text-white py-3">
        <div class="container">
            <p>&copy; Todos los derechos reservados - Creado por Dawny Chalas Telemaco | 2022-1014</p>
        </div>
    </footer>
</body>

</html>
