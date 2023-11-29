<?php
// Conectarse a la base de datos
$host = 'localhost';
$dbname = 'libreria';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}

// Obtener los libros desde la base de datos
try {
    $stmt = $pdo->query("SELECT * FROM libros");
    $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error al obtener los libros: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DCT Librería - Libros</title>

    <!-- Enlaces a Bootstrap y CSS-->
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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item active">
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

    <!-- Sección de Libros -->
    <section id="libros" class="my-5">
        <div class="container text-center">
            <h2 class="display-4">Explora Nuestra Colección de Libros</h2>
            <p class="lead">Sumérgete en historias cautivadoras de diversos géneros.</p>
            
            <!-- Mostrar los libros desde la base de datos -->
            <?php
                foreach ($books as $book) {
                    echo '<div class="card mb-3">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $book['titulo'] . '</h5>';
                    echo '<p class="card-text">Autor: ' . $book['autor'] . '</p>';
                    echo '</div></div>';

                }
            ?>
        </div>
    </section>

    <!-- Enlaces a Bootstrap y JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Pie de página -->
    <footer id="footer" class="bg-dark text-white py-3">
        <div class="container">
            <p>&copy; Todos los derechos reservados - Creado por Dawny Chalas Telemaco | 2022-1014</p>
        </div>
    </footer>

</body>

</html>
