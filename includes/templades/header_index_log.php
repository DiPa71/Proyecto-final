<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="chrome">
    <title>Tamales tolito</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="main.js"></script>
</head>
<body>

    <header class="site-header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.php">
                    <img src="img/tolito2.png" height="70px" alt="Logotipo de Tolito">
                </a>

                <div class="mobile-menu">
                    <a href="#navegacion">
                        <img src="img/barras.svg" alt="Icono Menu">
                    </a>
                </div>

                <nav id="navegacion" class="navegacion">
                    <a href="index.php">Inicio</a>
                    <a href="anuncios.php">Tienda</a>
                    <a href="blog.php">Blog</a>
                    <a href="contacto.php">Contacto</a>
                    <a href="carrito.php"><i class="fa fa-shopping-cart"></i>  Carrito</a>
                    <a href="favoritos.php"><i class="fa fa-heart"></i>  Favoritos / Deseados</a>
                    <a href="uporfile.php"> <i class="fa fa-user"></i> Perfil de <?php echo $_SESSION['usuario']?></a>
                </nav>
            </div>

            <h1>El tamal de tus sueños, a unos clicks de tu mesa ¡Conócenos!</h1>
            <a href="nosotros.php" class="nosotros d-block">Nosotros</a>
        </div>
    </header>