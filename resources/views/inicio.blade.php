<!DOCTYPE html>
<html lang="es">
<!--Se especifica el lenguaje-->
<html>

<head>

    <link rel="stylesheet" href="/static/css/estilos.css">
    <meta charset="utf-8">
    <!--codificacion del lenguaje-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="/static/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="/static/owl/owl.theme.default.min.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <title>
        TicOSolutions
    </title>

</head>

<body>

    <header>
        <div class="menu">

            <div class="contenedor">
                <a href="/">
                    <p class="logo">TicOSolutions</p>
                </a>
                <img class="menu-icon" src="/static/imagenes/menu.png">
                <nav>
                    <ul>
                        <li><a href="#servicios">Servicios</a></li>
                        <li><a href="#portafolio">Portafolio</a></li>
                        <li><a href="#contacto">Contacto</a></li>
                        <li><a href="/">Blog</a></li>
                    </ul>
                </nav>

            </div>

        </div>
        <center>
            <div class="contenedor" id="contenedor-titulo-flex">
                <div class="contenedor-titulo">
                    <div class="segundo-logo">
                        <h1 id="uno">TicOSolutions</h1>
                    </div>
                    <h2 id="uno">Soluciones en Informática</h2>
                </div>
            </div>
        </center>

        <script>
            setTimeout(()=>{
                const tl = gsap.timeline();
                tl.to("#uno", { duration: .5, y: 0, opacity: 1,  ease: 'expo' })
                // tl.to("#x", { duration: .5, scale: 1, opacity: 1, ease: 'expo' },'-=.5');
                // tl.to("#dos", { delay: 3, duration: .5, y: '-100%', opacity: 0,  ease: 'expo' })
                // tl.to("#uno", { duration: .75, x: '-100%', opacity: 0, ease: 'expo' }, '-=.3');
    
            }, 1000)
        </script>
        
    </header>

    <!--Contenido principal de la pagina-->
    <main>

        <section id="servicios">
            <div class="contenedor">
                <h3>Servicios</h3>
                <div class="contenedor-servicios">
                    <div class="servicios blue">
                        <h4>Desarrollo Web</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Placeat eaque ratione dignissimos. Incidunt autem ipsam aperiam iure, aliquid, 
                            facilis quisquam sint rem minima ab inventore consectetur consequuntur, officiis expedita delectus?
                            <img class="perfil" src="/static/imagenes/webdesign.png" style="width:90px;height:90px;">
                            <img class="ondas" src="/static/imagenes/waves.png">
                        </p>
                    </div>
                    <div class="servicios purple">
                        <h4>Posicionamiento</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Placeat eaque ratione dignissimos. Incidunt autem ipsam aperiam iure, aliquid, 
                            facilis quisquam sint rem minima ab inventore consectetur consequuntur, officiis expedita delectus?
                            <img class="perfil" src="/static/imagenes/webdesign.png" style="width:90px;height:90px;">
                            <img class="ondas" src="/static/imagenes/waves.png">
                        </p>
                    </div>
                    <div class="servicios blue">
                        <h4>Mantenimiento</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Placeat eaque ratione dignissimos. Incidunt autem ipsam aperiam iure, aliquid, 
                            facilis quisquam sint rem minima ab inventore consectetur consequuntur, officiis expedita delectus?
                            <img class="perfil" src="/static/imagenes/webdesign.png" style="width:90px;height:90px;">
                            <img class="ondas" src="/static/imagenes/waves.png">
                        </p>
                    </div>
                    <div class="servicios purple">
                        <h4>Diseño Gráfico</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Placeat eaque ratione dignissimos. Incidunt autem ipsam aperiam iure, aliquid, 
                            facilis quisquam sint rem minima ab inventore consectetur consequuntur, officiis expedita delectus?
                            <img class="perfil" src="/static/imagenes/webdesign.png" style="width:90px;height:90px;">
                            <img class="ondas" src="/static/imagenes/waves.png">
                        </p>
                    </div>
                    <div class="servicios blue">
                        <h4>Instalaciones</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Placeat eaque ratione dignissimos. Incidunt autem ipsam aperiam iure, aliquid, 
                            facilis quisquam sint rem minima ab inventore consectetur consequuntur, officiis expedita delectus?
                            <img class="perfil" src="/static/imagenes/webdesign.png" style="width:90px;height:90px;">
                            <img class="ondas" src="/static/imagenes/waves.png">
                        </p>
                    </div>
                    <div class="servicios purple">
                        <h4>Armado de equipos</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Placeat eaque ratione dignissimos. Incidunt autem ipsam aperiam iure, aliquid, 
                            facilis quisquam sint rem minima ab inventore consectetur consequuntur, officiis expedita delectus?
                            <img class="perfil" src="/static/imagenes/webdesign.png" style="width:90px;height:90px;">
                            <img class="ondas" src="/static/imagenes/waves.png">
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="portafolio">
            <div class="contenedor">
                <h3>Portafolio</h3>
                <div class="owl-carousel owl-theme">
                    <div class="item"><img src="/static/imagenes/tico.png"></div>
                    <div class="item"><img src="/static/imagenes/contacto.png"></div>
                    <div class="item"><img src="/static/imagenes/blog.png"></div>
                    <div class="item"><img src="/static/imagenes/posts.png"></div>
                    <div class="item"><img src="/static/imagenes/dash.png"></div>
                    <div class="item"><img src="/static/imagenes/pc_2.jpg"></div>
                </div>
            </div>
        </section>

        <section id="contacto">
            <div class="contenedor">
                <h3>Contacto</h3>
                <div class="contacto-info">
                    <div class="mail"><img src="/static/imagenes/mail-icon.png">c.j.q.h.99@gmail.com</div>
                    <div class="whatsapp"><img src="/static/imagenes/whatsapp-icon.png">+52 618 179 6590</div>
                </div>
            </div>
        </section>
        <section id="que-esperas">
            <div class="contenedor">
                <h3>¿Qué esperas para trabajar con nosotros?</h3>
                <a href="mailto:c.j.q.h.99@gmail.com">Charlemos</a>
            </div>
        </section>
    </main>
    <footer>
        <div class="contenedor">
            <div class="redes">
                <a href="https://www.facebook.com//"><img src="/static/imagenes/facebook.png"></a>
                <a href="https://twitter.com/"><img src="/static/imagenes/twitter.png" width="24" height="24"></a>
                <a href="mailto:c.j.q.h.99@gmail.com"><img src="/static/imagenes/gmail.png" width="24" height="24"></a>
            </div>
            <div class="parrafo">
                <p> © 2021 TicOSolutions | Soluciones en Informática.
                    Todos los derechos reservados </p>
            </div>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
        </script>
    <script src="/static/owl/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
    <script>

        $(document).ready(function () {

            $(window).scroll(function () {
                scroll = $(window).scrollTop();
                if (scroll > 100) {
                    $('.menu').css({ "position": "fixed" });
                    $('.menu').css({ "width": "100%" });
                    $('.menu').css({ "top": "0" });
                    $('.menu').css({ "background": "#370bd4cb" });
                    $('.menu a').css({ "color": "#fff" });
                    $('.logo').css({ "color": "#fff" });
                    // $('.menu').css({ "box-shadow": "rgba(0, 0, 0, 0.22) 6px 1px 1px" });
                    $('.menu').css({ "z-index": "100" });
                } else {
                    $('.menu').css({ "position": "relative" });
                    $('.menu').css({ "background": "transparent" });
                    $('.menu').css({ "box-shadow": "0 0 0" });
                    $('.menu a').css({ "color": "#fff" });
                    $('.logo').css({ "color": "#fff" });
                }
            })

            $('.menu-icon').click(function () {
                $('header nav').slideToggle();
            })

        })

    </script>

</body>