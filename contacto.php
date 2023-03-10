<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Contacto</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="icon" type="image/png" sizes="32x32" href="imagenes/paw-print.ico">
</head>

<style>
  .validar {
    border: 2px solid red;
  }

  .color {
    color: red;
  }

  .validar2 {
    border: 1px solid silver;
  }

  .error {
    display: none;
    color: red;
  }
</style>
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

  #topBtn {
    background-color: black;
    color: white;
  }

  .dropdown:hover .dropdown-menu {
    display: block;
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

  #topBtn {
    background-color: black;
    color: white;
  }
</style>

<body>
  <!--NAV-->
  <nav class="navbar navbar-expand-lg px-4  " style="background-color:#b2e8f9 ;">
    <div class="container-fluid">
      <a class="navbar-brand " href="index.html"> <span class="fs-2 fw-bold" id="myTitle">AdoptME</span> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link active " href="About_us.html" id="opcion3">Sobre nosotros</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active " href="modulopagos.html" id="opcion4">Donaciones</a>
            </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="opcion4" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Mascotas
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="gatos.html">Gatos</a></li>
              <li><a class="dropdown-item" href="perros.html">Perros</a></li>

            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">

          <a href="contacto.php"><button type="button" class="btn   fw-semibold myBtn"
              style="background-color:#b2e8f9 ;border-color: #151515;" id="Contactos">Contacto</button> </a>
        </form>
      </div>



    </div>
  </nav>
  <!--HEADER-->

  <div class="row">
    <div class="col-lg-12 col-sm-12 text-center" style="background-color: rgb(229, 234, 235);">
      <h1 class="text-center p-5 fw-bold">CONTACTO</h1>

    </div>
    <div class="col-lg-12 col-sm-12 p-0">
    </div>
  </div>
  <!--CONTACTOS-->
  <div class="container-fluid">
    <div class="row p-5">
      <div class="col-lg-4 col-sm-12 order-lg-1 order-md-1 order-sm-1 border-end border-start fw-bold text-center">
        <p style="color: #60BAD6;">Telefono</p>
        <p>+593 0969380735</p>
        <p>+593 0993913409</p>
      </div>
      <div class="col-lg-4 col-sm-12 order-lg-2 order-md-2 order-sm-2 border-end border-start fw-bold text-center">
        <p style="color: #60BAD6;">E-mail</p>
        <p>adoptme@gmail.com</p>
      </div>
      <div class="col-lg-4 col-sm-12 order-lg-3 order-md-3 order-sm-3 border-end border-start fw-bold text-center">
        <p style="color: #60BAD6;">Ubicacion</p>
        <p>Santo Domingo - Ecuador</p>
      </div>
    </div>
  </div>
  <!--FORMULARIO-->
  <form action="contacto.php" id="" method="POST">
    <div class="container" style="padding: 40px; background-color: rgb(229, 234, 235);">
      <form action="" id="formulario_validar">

        <div class="row mt-3">
          <div class="col-sm-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control mt-1" placeholder="Nombre" name="nombre" id="nombre" />
              <div class="error" id="mensaje1">Ingrese su nombre</div>
            </div>
            <div class="form-group mt-2">
              <label for="">Mensaje</label>
              <textarea name="mensaje" id="mensaje" class="form-control mt-1"
                placeholder="Ingrese su mensaje"></textarea>
              <div class="error" id="mensaje2">
                Ingrese su mensaje min 10 caracteres
              </div>
            </div>
            <div class="form-group">
              <label for="nombre" class="mt-2">Edad</label>
              <input type="tel" class="form-control mt-1" placeholder="Edad" name="edad" id="edad" />
              <div class="error" id="mensaje20">Ingrese su edad</div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="form-group">
              <label for="nombre">Correo</label>
              <input type="email" class="form-control mt-1" placeholder="Correo" name="correo" id="correo" />
              <div class="error" id="mensaje4">Ingrese su correo</div>
            </div>
            <div class="form-group">
              <label for="">Contrase??a</label>
              <input type="password" class="form-control mt-1" placeholder="contra" id="contra" name="contra"/>
              <div class="error" id="mensaje3">Ingrese su contrase??a</div>
            </div>

            <div class="row mt-3 justify-content-between">
              <div class="col-sm-3 col-lg-3 col-xl-3 col-xxl-3">
                <label for="">Eliga su sexo:</label>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" name="sexo" id="sexo" value="Hombre"class="form-check-input mr-2 " />
                    Hombre
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" name="sexo" id="sexo" value="Mujer" class="form-check-input mr-2 " />
                    Mujer
                  </label>
                  <div class="error" id="mensaje">Escoja el sexo</div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="form-group">
                  <label for="">Paises</label>

                  <select name="lugar" id="lugar" class="form-control form-select ">
                    <option value="0">Seleccione una opcion</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Colombia">Colombia</option>
                  </select>
                  <div class="error" id="mensaje">Escoja un pais </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3 justify-content-center">
          <div class="">
            <div class="form-check">
              <div class="d-grid col-sm-12 col-xs-12 col-lg-12 col-xxl-12 mx-auto"></div>
            </div>
          </div>

          <div class="d-grid mt-2 col-sm-4 col-xs-12 mx-auto">
            <input class="btn btn-primary" type="submit" name="enviar" value="Enviar" formaction="contacto.php">
            </button>
          </div>
        </div>
      </form>
    </div>

    <div class="container-fluid " style="margin:0 !important ;padding:0px !important;">

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
                  cuidamos y protegemos de ellas hasta que alguien desee adoptarlas. Puedes visitar el sitio y encontrar
                  a
                  tu amigo fiel
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->

              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold">Navegaci??n</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px" />
                <p>
                  <a href="#" class="text-white">Home</a>
                </p>
                <p>
                  <a href="#" class="text-white">Sobre nosotros</a>
                </p>
                <p>
                  <a href="#" class="text-white">Adopta ??YA! </a>
                </p>
                <p>
                  <a href="#" class="text-white" ">Blog</a>
                      </p>
                    </div>
                    <!-- Grid column -->
          
                    <!-- Grid column -->
                    <div class=" col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
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
          ?? 2020 Copyright:
          <a class="text-white" href="https://mdbootstrap.com/">Universidad de las Fuerzas Armadas del Ecuador</a>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->

    </div>



    <script>
      $(document).ready(function () {
        $("#edad").keypress(function (e) {
          if (e.which < 48 || e.which > 57) {
            return false;
          } else {
            return true;
          }
        });

        $("#nombre").keypress(function (e) {
          if (e.which < 48 || e.which > 57) {
            return true;
          } else {
            return false;
          }
        });

        $("#Enviar").click(function () {
          let nombre = $("#nombre").val();
          let count = nombre.length;
          let mensaje = $("#mensaje").val();
          let countmensaje = mensaje.length;
          let contra = $("#contra").val();
          let correo = $("#correo").val();
          let edad = $("#edad").val();
          let radio = $("input[type = 'radio']:checked");
          let sel = $("#lugar option:selected");

          if (nombre == "" || count < 5) {
            $("#nombre").addClass("validar");
            $("#mensaje1").fadeIn();

          } else {
            $("#mensaje1").fadeOut();
            $("#nombre").addClass("validar2");
          }
          if (mensaje == "" || mensaje.length < 10) {
            $("#mensaje").addClass("validar");
            $("#mensaje2").fadeIn();

          } else {
            $("#mensaje").addClass("validar2");
            $("#mensaje2").fadeOut();
          }
          if (edad == "") {
            $("#mensaje20").fadeIn();
            $("#edad").addClass("validar");

          } else {
            $("#edad").addClass("validar2");
            $("#mensaje20").fadeOut();
          }

          if (correo.indexOf("@", 0) == -1 || correo == "") {
            $("#mensaje4").fadeIn();

            $("#correo").addClass("validar");


          } else {
            $("#correo").addClass("validar2");
            $("#mensaje4").fadeOut();
          }
          if (contra == "") {
            $("#contra").addClass("validar");
            $("#mensaje3").fadeIn();

          } else {
            $("#contra").addClass("validar2");
            $("#mensaje3").fadeOut();
          }

          if (radio.length == 0) {
            $("#mensaje6").fadeIn();

            return false;
          } else {
            $("#mensaje6").fadeOut();
          }

          if ($("#lugar").val() == 0) {
            alert("Escoja un pais");
            return false;
          } else {
          }
        });
      });
      //NAV

      $("#opcion1").mouseover(function () {
        $(this).addClass("negrita");
      });

      $("#opcion2").mouseover(function () {
        $(this).addClass("negrita");
      });
      $("#opcion3").mouseover(function () {
        $(this).addClass("negrita");

      });

      $("#opcion4").mouseover(function () {
        $(this).addClass("negrita");

      });

      $("#opcion5").mouseover(function () {
        $(this).addClass("negrita");

      });

      $("#opcion1").mouseout(function () {
        $(this).removeClass("negrita");
      });

      $("#opcion2").mouseout(function () {
        $(this).removeClass("negrita");
      });

      $("#opcion3").mouseout(function () {
        $(this).removeClass("negrita");
      });

      $("#opcion4").mouseout(function () {
        $(this).removeClass("negrita");
      });
      $("#opcion5").mouseout(function () {
        $(this).removeClass("negrita");
      });

      $(".myBtn").hover(
        function () {
          $(this).addClass("grow");
        },
        function () {
          $(this).removeClass("grow");
        }
      );

      $("#myTitle").mouseover(function () {

        $("#myTitle").animate({
          width: "450px",
          color: "blue",

        }, 300);
      });

      //php

    </script>

</body>

</html>
<?php
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$nombre = $_POST["nombre"];
            $mensaje = $_POST["mensaje"];
			$edad = $_POST["edad"];
            $correo = $_POST["correo"];
            $contra = str_replace(",", ".", $_POST["contra"]);
            $sexo = $_POST["sexo"];
            $lugar = $_POST["lugar"];

            $correo_limpio = str_replace(",", ".", $correo);

			// Abre el archivo en modo "a" (append) para agregar datos al final del archivo
			$archivo = fopen("datosCT.txt", "a");

			// Escribe los datos en el archivo separados por comas
			fwrite($archivo, "$nombre,$mensaje,$edad,$correo_limpio,$contra,$sexo,$lugar\n");

			// Cierra el archivo
			fclose($archivo);

			echo "<p>Los datos se han registrado correctamente.</p>";
		}
	?>