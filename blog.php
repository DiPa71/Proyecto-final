<?php
session_start();
if(isset($_SESSION['usuario'])){
include_once 'includes/templades/headerloget.php';
}else{
include_once 'includes/templades/header.php';
}?>


    <main class="contenedor seccion contenido-centrado">
        <h1 class="fw-300 centrar-texto">Nuestros Blog de Ayuda</h1>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="img/blog1.jpg" alt="Entrada de blog">
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Recomendaciones de nuestro chef</h4>
                </a>
                <p>Escrito el: <span> 20/10/2019 </span> por: <span> Juan Angel </span> </p>
                <p>¿Consejos para comer diferene? Nuestro chef especializado tiene la respuesta que buscas</p>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="img/blog2.jpg" alt="Entrada de blog">
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Franquicia de Tolito ¡Obten una Ya!</h4>
                </a>
                <p>Escrito el: <span> 20/10/2019 </span> por: <span> Pablo Cabrera </span> </p>
                <p>Adquiere una franquicia de Tolito Inc. ahora mismo, ¡enterate como!</p>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="img/blog3.jpeg" alt="Entrada de blog">
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>¿Como hacen los chef profecionales</h4>
                </a>
                <p>Escrito el: <span> 20/10/2019 </span> por: <span> Ian Arias </span> </p>
                <p>Averigua como hacen los chef para hacer su labor dia con dia y obten ayuda de ellos</p>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="img/tolito2.png" alt="Entrada de blog">
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>¿Conoces las sucursales de tolito?</h4>
                </a>
                <p>Escrito el: <span> 20/10/2019 </span> por: <span> Oscar garcia </span> </p>
                <p>Conoce todas las sucursales de tolito y obten beneficion, cupones y mas</p>
            </div>
        </article>
    </main>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2020 &copy; </p>
        </div>
    </footer>
</body>
</html>
