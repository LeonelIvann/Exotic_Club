<!DOCTYPE html>
<html lang="en" translate="no">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/club/style.css') }}" >
    <title>
        LIMMA Club
    </title>
</head>

<body>
    <header class="header-container">
        <div class="left-side">
            <span>
                <button class="btn-contact-left">
                    <a href="php/index.php">DESEO SER CONTACTADO</a>
                </button>
            </span>
        </div>
        <div class="center-side">
            <h2>LIMMA</h2>
        </div>
        <div class="right-side">
            <span>
                <button>
                    <a href="#contact">ENCUENTROS</a>
                </button>
            </span>
            <span>
                <button class="btn-contact-right">
                    <a href="#">DESEO SER CONTACTADO</a>
                </button>
            </span>
            <span>
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <a href="/login" >LOGIN</a>
                </button>
            </span>
        </div>
    </header>
    <main class="main" id="SUBIR">
        <div class="container-img-1">
            <div class="image-1">
                <h2 class="txt-img animate__animated animate__fadeIn">
                    PRIMER CLUB DE CARRERAS
                    <p class="sub-txt-img">
                        DE AUTOS DEPORTIVOS Y EXÓTICOS DE LATINOAMERICA<br>
                    </p>
                </h2>
                <a href="#segundo-objetivo" class="animate__animated animate__fadeIn">BAJAR</a>
            </div>
        </div>
        <div class="separador" id="segundo-objetivo"></div>
        <!-- div hecho para separar una seción de otra y a su vez con un id para hacerlo el objetivo del botón "bajar" -->
        <div class="container-iframes">
            <div class="container-primer-fila">
                <div class="video-1">
                    <div class="img-video-1">
                        <div style="padding: 56.25% 0 0 0; position: relative">
                            <iframe
                                src="https://player.vimeo.com/video/364901900?h=c2868d8ada&color=cdffcf&title=0&byline=0&portrait=0"
                                style=" position: absolute; top: 0; left: 0; width: 100%; height: 100%;" frameborder="0"
                                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="middle-iframe">
                    <h1 class="txt-m-iframe">
                        VIDEO DE MIEMBROS
                        <p>
                            no conduzca bajo efectos del alcohol y siempre en ambientes
                            controlados.
                        </p>
                    </h1>
                </div>
                <div class="video-3">
                    <div style="padding: 56.25% 0 0 0; position: relative">
                        <iframe
                            src="https://player.vimeo.com/video/243538183?h=927e56ad50&color=cdffcf&title=0&byline=0&portrait=0"
                            style=" position: absolute; top: 0; left: 0; width: 100% ;height: 100%;" frameborder="0"
                            allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-segunda-fila">
            <div class="box-1">
                <div class="box-1-1">
                    <div>
                        <h1>¿PORQUÉ UNIRTE?</h1>
                        <p>Lorem ipsum dolor sit amet  Numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore molestias libero quas nisi sapiente odio quam vero veritatis est. Minima.</p>
                    </div>
                    <div class="fmly-div">
                        <h1>FAMILIA LIMMA</h1>
                        <p>Lorem ipsum dolor sit amet  Numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore molestias libero quas nisi sapiente odio quam vero veritatis est. Minima.</p>
                    </div>
                </div>
            </div>
            <div class="box-2">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/eC9WwSKh3h8?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <a href="#contact" class="btn-box2 animate__animated animate__fadeInRight">BAJAR</a>
            </div>
            <div class="box-3">
                <h1>FAMILIA LIMMA</h1>
                <p>Lorem ipsum dolor sit amet  Numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore molestias libero quas nisi sapiente odio quam vero veritatis est. Minima.</p>
            </div>
        </div>
    <div class="separador" id="contact"></div>
        <div class="contacto">
            <div class="container-gmap">
                <div class="content-gmap">
                    <h1>
                        todos los ultimos viernes del mes, nos encontramos aquí.
                        <p>
                            concurrir con cuidado, respetando las leyes de transito, no
                            pongamos la vida de terceros en riesgo.
                        </p>
                    </h1>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6484.534049584707!2d-63.779479112774034!3d-35.6457922213842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95c49d3a302aee89%3A0xd55b037fa6af4f44!2sYPF%20Petrosurco%20Norte!5e0!3m2!1sen!2sar!4v1636509992293!5m2!1sen!2sar"
                        width="780" height="450" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-divisiones-footer animate__animated animate__fadeIn">
                <div class="division-1">
                    <a class="btnSubir" href="#SUBIR">SUBIR</a>
                </div>
                <div class="division-2">
                    <p>recuerde, corre bajo su propio riesgo.</p>
                </div>
            </div>
        </footer>
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://player.vimeo.com/api/player.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
</body>

</html>