<?php
// Verificamos si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["comentario"])) {

    // Obtenemos el comentario enviado por el usuario
    $comentario = $_POST["comentario"];

    // Creamos el archivo de texto si no existe
    if (!file_exists("comentarios.txt")) {
        fopen("comentarios.txt", "w");
    }

    // Abrimos el archivo en modo escritura y posicionamos el puntero al final del archivo
    $archivo = fopen("comentarios.txt", "a");
    fseek($archivo, 0, SEEK_END);

    // Escribimos el comentario en el archivo
    fwrite($archivo, $comentario . PHP_EOL);

    // Cerramos el archivo
    fclose($archivo);
}

// Leemos los comentarios del archivo y los mostramos en la página
if (file_exists("comentarios.txt")) {
    $archivo = fopen("comentarios.txt", "r");

    while (!feof($archivo)) {
        $linea = fgets($archivo);
        echo "<p>$linea</p>";
    }

    fclose($archivo);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <title>Acerca de</title>
    <link rel="icon" type="image/png" sizes="32x32" href="imagenes/paw-print.ico">
</head>
    <style>
        a {
             text-decoration: none !important;
         }
         .myBtn {
       font-size: 20px;
       padding: 10px;
       transition: all 0.3s ease-in-out;
     }
     
     .grow {
       transform: scale(1.5);
     }
     
     .negrita {
       font-weight: bold;
     }
     
     #topBtn{
       background-color: black;
     color: white;
     }
     .dropdown:hover .dropdown-menu {
         display: block;
       }
     
    </style>

<script>
    var originalImg1 = "img/service-thumbnail-1.jpg";
    var originalImg2 = "img/service-thumbnail-2.jpg";
    $(document).ready(function () {
        $(".img-fluid").mouseover(function () {
            $(this).attr("src", originalImg2);
        }).mouseleave(function () {
            var self = this;
            setTimeout(function () {
                $(self).attr("src", originalImg1);
            }, 1000);
        });
    });


    //Cambiar color de fondo de la pagina al hacer doble click en el titulo y volver a su estado original al hacer click
    $(document).ready(function () {
        $("h1.text-center.p-5.fw-bold").first().mouseover(function () {
            $(this).css("color", "#b2e8f9");
            $(this).css("font-size", "50px");
        }).mouseleave(function () {
            $(this).css("color", "black");
            $(this).css("font-size", "30px");
        });
        var originalColor;
        $("h1.text-center.p-5.fw-bold").first().dblclick(function () {
            originalColor = $(this).css("color");
            $(this).css("color", "black");
            $(this).css("background-color", "#b2e8f9");
        }).click(function () {
            $(this).css("color", originalColor);
            $(this).css("background-color", " #E8E8E8");
        });
    });

    //Al hacer doble click en el parrafo se oculta y estos se muestran al hacer click en el titulo
    $(document).ready(function () {
        $("p").dblclick(function () {
            $(this).hide();
        });
        $("h1").click(function () {
            $("p").show();
        });
    });

    //El boton se hace horizontal al pasar el mouse por encima y vuelve a su estado original al sacar el mouse
    $(document).ready(function () {
        $("button").mouseover(function () {
            $(this).animate({
                width: '+=500px'
            });
        }).mouseleave(function () {
            $(this).animate({
                width: '-=500px'
            });
        });
    });

    //Opacidad de las imagenes con click y doble click
    $(document).ready(function () {
        $(".img-fluid").click(function () {
            $(this).animate({
                opacity: 0.5
            }, 1000);
        }).dblclick(function () {
            $(this).animate({
                opacity: 1
            }, 1000);
        });
    });
</script>

<body>
    <div class="contenerdor">
        <nav class="navbar navbar-expand-lg px-4  " style="background-color:#b2e8f9 ;">
            <div class="container-fluid">
              <a class="navbar-brand " href="index.html" > <span class="fs-2 fw-bold" id="myTitle">AdoptME</span> </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
             
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" id="opcion1">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="blog.html" id="opcion2">Blog</a>
                      </li>
                    
                      <li class="nav-item">
                        <a class="nav-link active "href="About_us.html" id="opcion3">Sobre nosotros</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="opcion4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Mascotas
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="gatos.html">Gatos</a></li>
                          <li><a class="dropdown-item" href="perros.html">Perros</a></li>
                          
                        </ul>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                     
                      <a href="contact.html"><button type="button" class="btn   fw-semibold myBtn" style="background-color:#b2e8f9 ;border-color: #151515;" id="Contactos">Contacto</button> </a>
                    </form>
                  </div>
    
    
    
            </div>
          </nav>

    <main class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center" style="background-color: #E8E8E8;">
                <h1 class="text-center p-5 fw-bold">SOBRE NOSOTROS</h1>

            </div>
            <div class="col-lg-6 col-sm-12 p-0">
            </div>
        </div>
        </div>
        </div>
        <div class="row">
            <section class="container-fluid">
                <div class="row p-4">
                    <div class="col-sm-12 col-md-6 col-lg-6 p-4">
                        <div class="container d-flex justify-content-center mb-4 pt-4">
                            <img src="img/service-thumbnail-1.jpg" class="img-fluid rounded" id="img1" alt="tum1">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-4 p-4">
                        <div class="container justify-content-center float-start">
                            <h1 class="text-dark">De que pueden disfutar por primer su acceso</h1>
                            <p class="text-dark">En AdopMe estamos al tanto de que la limpieza de nuestras mascotas es
                                ideal y crucial no solo para el aspecto de estas, sino para prevenirlas de ciertas
                                bacterias
                                que pueden causar diversos tipos de enfermedades en nuestras mascotas, nuestra tienda
                                ofrece al
                                publico que adquiere nuestras mascotas un acceso a limpieza con todo incluido por ser
                                adquiridor
                                de nuestros ejemplares, pregunta a nuestros desarrolladores de este maravilloso programa
                                por mas
                                información.
                            </p>
                            <hr>
                            Acuda a los <cite title="Contactos">Contactos para responder dudas e inquietudes</cite>
                            <br><br>
                            <a href="contact.html"><button type="button" class="btn   fw-semibold "
                                    style="background-color:#b2e8f9 ;">Contacto</button> </a>
                            </a></button>
                        </div>
                    </div>
                </div>
                <div>
                    <h2>Deja tu comentario</h2>
                    <form method="post">
                        <textarea name="comentario" rows="4" cols="50"></textarea>
                        <br>
                        <input type="submit" value="Enviar">
                    </form>
                </div>
    </main>
    <section class="container-fluid">
        <div class="row p-4" style="background-color: #60BAD6">
            <div class="col-sm-12 col-md-6 col-lg-6 p-4">
                <div class="container d-flex justify-content-center mb-4 pt-4">
                    <img src="img/service-thumbnail-1.jpg" class="img-fluid rounded" id="img1" alt="tum1">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 mb-4 p-4">
                <div class="container justify-content-center float-start">
                    <h1 class="text-light">Los servicios que ofrecemos</h1>
                    <p class="text-light">En MoisesAdopMe velamos por el aspecto de nuestras mascotas contamos con
                        los mejores servicios en estilistas perrunos, dichos estilistas nos ofrecen una variedad
                        extensa de estilos que los usuarios que adquieran nuestras mascotas pueden pedir bajo un
                        cierto costo, todo depende de la complejidad de diseño que querramos para nuestros amigos
                        de cuatro patas.
                    </p>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row bg-light p-4">
            <div class="col-sm-12 col-md-6 col-lg-6 mb-4 p-4">
                <div class="container justify-content-center mb-4 p-4">
                    <h1 class="text-dark">Disfruta de todos los beneficios</h1>
                    <p class="text-dark">En AdopMe estamos al tanto de que la limpieza de nuestras mascotas es
                        ideal y crucial no solo para el aspecto de estas, sino para prevenirlas de ciertas bacterias
                        que pueden causar diversos tipos de enfermedades en nuestras mascotas, nuestra tienda ofrece al
                        publico que adquiere nuestras mascotas un acceso a limpieza con todo incluido por ser adquiridor
                        de nuestros ejemplares, pregunta a nuestros desarrolladores de este maravilloso programa por mas
                        información.
                    </p>
                    <hr>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 mb-4 p-4">
                <div class="container d-flex justify-content-center mb-4 p-4">
                    <img src="img/service-thumbnail-2.jpg" class="img-fluid float-end rounded" id="img2" alt="tum1">
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white mt-5 " style="background-color:  #151515">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4" style="background-color:  #151515">
            <!-- Left -->
            <div class="me-5">
                <span>Buscanos en nuestras redes sociales:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="text-white me-4">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="bi bi-google"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="bi bi-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">Sobre nosotros</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            Nos encargamos de darles un hogar seguro para todas las mascotas
                            cuidamos y protegemos de ellas hasta que alguien desee adoptarlas. Puedes visitar el sitio y
                            encontrar a tu amigo fiel
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->

                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Navegación</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#!" class="text-white">Home</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Sobre nosotros</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Adopta ¡YA! </a>
                        </p>
                        <p>
                            <a href="blog.html" class="text-white">Blog</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contactos</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p><i class="fas fa-home mr-3"></i> Santo Domingo </p>
                        <p><i class="fas fa-envelope mr-3"></i> adoptme@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> +593 0969380735</p>
                        <p><i class="fas fa-print mr-3"></i> +593 0993913409</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">Universidad de las Fuerzas Armadas del Ecuador</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script>
        //NAV

$("#opcion1").mouseover(function() {
          $(this).addClass("negrita");
        });

        $("#opcion2").mouseover(function() {
          $(this).addClass("negrita");
        });
        $("#opcion3").mouseover(function() {
          $(this).addClass("negrita");
          
        });

        $("#opcion4").mouseover(function() {
          $(this).addClass("negrita");
        
        });

        $("#opcion5").mouseover(function() {
          $(this).addClass("negrita");
          
        });

        $("#opcion1").mouseout(function() {
          $(this).removeClass("negrita");
        });

        $("#opcion2").mouseout(function() {
          $(this).removeClass("negrita");
        });

        $("#opcion3").mouseout(function() {
          $(this).removeClass("negrita");
        });

        $("#opcion4").mouseout(function() {
          $(this).removeClass("negrita");
        });
        $("#opcion5").mouseout(function() {
          $(this).removeClass("negrita");
        });

        $(".myBtn").hover(
            function() {
              $(this).addClass("grow");
            },
            function() {
              $(this).removeClass("grow");
            }
          );

          $("#myTitle").mouseover(function() {
           
           $("#myTitle").animate({
             width: "450px",
             color:"blue",
             
           }, 300);
         });

    </script>
</body>

</html>