<?php session_start();
if(isset($_SESSION['usuario'])){
    include_once 'includes/templades/header_index_log.php';?>
        <section class="contenedor seccion">
        <h2 class="fw-300 centrar-texto">¿Quienes somos?</h2>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="img/mexico.svg" height="100px"alt="Icono Mexico">
                <h3>100% Mexicanos</h3>
                <p>Tamales realizados 100% por manos mexicanas, artesanales, de lo mejor de calidad a tu mesa, si querias una opción gourmet que ayude a los mexicanos, nos has encontrado.</p>
            </div>

            <div class="icono">
                <img src="img/hand-wash.svg"height="100px" alt="Icono higiene">
                <h3>Higiene</h3>
                <p>En Tolito Inc. estamos preocupados por tu seguridad y salud, por lo que nos esforzamos en cumplir con las mas extrictas normas de salubridad vigentes a la fecha.</p>
            </div>

            <div class="icono">
                <img src="img/binge-eating.svg"height="100px" alt="Icono sabor">
                <h3>Tu sabor favorito</h3>
                <p>No te limites a los típicos sabores, prueba y haz que tu paladar experimente nuevos sabores, te invitamos a conocer nuestro menú ampliado con el que disfrutaras un abanico de posibilidades.</p>
            </div>
        </div>
    </section>

    <main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto">Nuestra selección</h2>
    <hr>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <img src="img/anuncio1.jpg" alt="Tamal de piña">
                <div class="contenido-anuncio">
                    <h3>Piña exótica</h3>
                    <p>Exquisito tamal con base de piña de las islas Kawaii</p>
                    <div class="botonamarillo">
                        <button onclick="window.location.href='/anuncios.php'" class="colorbtna">Ver</button>
                    </div>
                </div>
            </div>

            <div class="anuncio">
                <img src="img/anuncio2.jpg" alt="Tamal de habanero">
                <div class="contenido-anuncio">
                    <h3>Habanero spicy</h3>
                    <p>Delicia culinaria, elaborada a base de chile habanero con toques de olivo</p>

                    <div class="botonamarillo">
                        <button onclick="window.location.href='/anuncios.php'" class="colorbtna">Ver</button>
                    </div>
                </div>
            </div>

            <div class="anuncio">
                <img src="img/anuncio3.jpg" alt="Tamal pastor">
                <div class="contenido-anuncio">
                    <h3>Tamal al pastor </h3>
                    <p>Recordemos dos de los mejores platillos de la comida mexicana con este homenaje</p>


                    <div class="botonamarillo">
                        <button onclick="window.location.href='/anuncios.php'" class="colorbtna">Ver</button>
                    </div>
            </div>
        </div>
    </main>

    <section class="imagen-contacto">
        <div class="contenedor contenido-contacto">
            <h2>¡Enorme variedad!</h2>
            <p>No te limites! tenemos una gran variedad de sabores, animate a probarlo</p>
        </div>
    </section>
<?php }else{
    include_once 'includes/templades/header_index.php';?>
	 <section class="contenedor seccion">
        <h2 class="fw-300 centrar-texto">¿Quienes somos?</h2>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="img/mexico.svg" height="100px"alt="Icono Mexico">
                <h3>100% Mexicanos</h3>
                <p>Tamales realizados 100% por manos mexicanas, artesanales, de lo mejor de calidad a tu mesa, si querias una opción gourmet que ayude a los mexicanos, nos has encontrado.</p>
            </div>

            <div class="icono">
                <img src="img/hand-wash.svg"height="100px" alt="Icono higiene">
                <h3>Higiene</h3>
                <p>En Tolito Inc. estamos preocupados por tu seguridad y salud, por lo que nos esforzamos en cumplir con las mas extrictas normas de salubridad vigentes a la fecha.</p>
            </div>

            <div class="icono">
                <img src="img/binge-eating.svg"height="100px" alt="Icono sabor">
                <h3>Tu sabor favorito</h3>
                <p>No te limites a los típicos sabores, prueba y haz que tu paladar experimente nuevos sabores, te invitamos a conocer nuestro menú ampliado con el que disfrutaras un abanico de posibilidades.</p>
            </div>
        </div>
    </section>

    <main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto">Nuestra selección</h2>
    <hr>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <img src="img/anuncio1.jpg" alt="Tamal de piña">
                <div class="contenido-anuncio">
                    <h3>Piña exótica</h3>
                    <p>Exquisito tamal con base de piña de las islas Kawaii</p>
                    <div class="botonamarillo">
                        <button onclick="window.location.href='/anuncios.php'" class="colorbtna">Ver</button>
                    </div>
                </div>
            </div>

            <div class="anuncio">
                <img src="img/anuncio2.jpg" alt="Tamal de habanero">
                <div class="contenido-anuncio">
                    <h3>Habanero spicy</h3>
                    <p>Delicia culinaria, elaborada a base de chile habanero con toques de olivo</p>

                    <div class="botonamarillo">
                        <button onclick="window.location.href='/anuncios.php'" class="colorbtna">Ver</button>
                    </div>
                </div>
            </div>

            <div class="anuncio">
                <img src="img/anuncio3.jpg" alt="Tamal pastor">
                <div class="contenido-anuncio">
                    <h3>Tamal al pastor </h3>
                    <p>Recordemos dos de los mejores platillos de la comida mexicana con este homenaje</p>


                    <div class="botonamarillo">
                        <button onclick="window.location.href='/anuncios.php'" class="colorbtna">Ver</button>
                    </div>
            </div>
        </div>
    </main>

    <section class="imagen-contacto">
        <div class="contenedor contenido-contacto">
            <h2>¡Enorme variedad!</h2>
            <p>No te limites! tenemos una gran variedad de sabores, animate a probarlo</p>
        </div>
    </section>
    <?php } ?>
    <?php include_once 'includes/templades/footer.php'?>