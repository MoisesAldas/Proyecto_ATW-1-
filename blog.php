<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <title>Blog</title>
  <link rel="icon" type="image/png" sizes="32x32" href="imagenes/paw-print.ico">
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

    .parte1 {
      text-align: justify;
    }

    .info {
      display: none;
    }

    .contenedor:hover .imagen {
      -webkit-transform: scale(1.3);
      transform: scale(1.1);
    }

    .contenedor {
      overflow: hidden;

    }

    /*estilos form comentarios, perritos y encuesta*/
    .form {
      margin: 20px;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    textarea {
      width: 100%;
      height: 100px;
      border: 1px solid #ccc;
      border-radius: 10px;
      resize: vertical;
    }

    .nombre {
      width: 100%;
      border-radius: 10px;
    }

    hr {
      margin: 20px 0;
      border: none;
      border-top: 1px solid #ccc;
    }

    .comentario {
      margin: 0 10px 10px;
      background-color: #fff;
      padding: 5px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .comentario p {
      margin: 0;
    }

    .comentario strong {
      display: block;
      margin-bottom: 5px;
      color: #555;
    }

    .imagenPerro {
      width: 420px;
      height: 300px;
      object-fit: cover;
      border-radius: 10px;
    }

    .contenedorPerro {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    #cambiar-imagen {
      padding-top: 10px;

    }

    .barra {
      background-color: #ddd;
      height: 20px;
      border-radius: 10px;
      margin-bottom: 10px;
      overflow: hidden;
    }

    .barra .progreso {
      background-color: #4CAF50;
      height: 100%;
      border-radius: 10px;
      text-align: center;
      color: white;
    }
  </style>
  <script>
    $(document).ready(function() {
      $('#boton1').mouseover(function() {
        $(this).css('background-color', 'black')
        $(this).css('color', '#b2e8f9')
      })
      $('#boton1').mouseout(function() {
        $(this).css('background-color', '#b2e8f9')
        $(this).css('color', 'black')
      })
    });

    $(document).ready(function() {
      $('#boton2').mouseover(function() {
        $(this).css('background-color', 'black')
        $(this).css('color', '#b2e8f9')
      })
      $('#boton2').mouseout(function() {
        $(this).css('background-color', '#b2e8f9')
        $(this).css('color', 'black')
      })
    });

    $(document).ready(function() {
      $('.boton3').mouseover(function() {
        $(this).css('background-color', 'black')
        $(this).css('color', '#b2e8f9')
      })
      $('.boton3').mouseout(function() {
        $(this).css('background-color', '#b2e8f9')
        $(this).css('color', 'black')
      })
    });
    $(document).ready(function() {
      $('.boton4').mouseover(function() {
        $(this).css('background-color', 'black')
        $(this).css('color', '#b2e8f9')
      })
      $('.boton4').mouseout(function() {
        $(this).css('background-color', '#b2e8f9')
        $(this).css('color', 'black')
      })
    });

    $(document).ready(function() {
      $('#enner').mouseover(function() {
        $(this).animate({
          width: '200px'
        });
      });
      $('#enner').mouseout(function() {
        $(this).animate({
          width: '150px'
        });
      });
    });


    $(document).ready(function() {
      $('#frase').mouseover(function() {
        $(this).css('color', '#b2e8f9');
        $(this).css("font-size", "40px");
      });
      $('#frase').mouseout(function() {
        $(this).css('color', 'black');
        $(this).css("font-size", "29px");
      });
    });

    $(document).ready(function() {
      $("#boton1").click(function() {
        console.log("Lesly");
        $(".info").animate({
          height: "toggle",
          opacity: "toggle"
        }, "slow");
      });
    });

    $(document).ready(function() {
      $('#compartir').mouseover(function() {
        $(this).css("font-size", "20px");
        $(this).css('background-color', '#b2e8f9');
        $(this).css("padding", "8px");
        $(this).css("border-radius", "10px");
      });
      $('#compartir').mouseout(function() {
        $(this).css("font-size", "16px");
        $(this).css('background-color', 'white');
      });
    });
  </script>
</head>

<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-lg px-4  " style="background-color:#b2e8f9 ;">
    <div class="container-fluid">
      <a class="navbar-brand " href="index.html"> <span class="fs-2 fw-bold" id="myTitle">AdoptME</span> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html" id="opcion1">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="blog.php" id="opcion2">Blog</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active " href="About_us.php" id="opcion3">Sobre nosotros</a>
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

  <!--Body--->

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-sm-12 text-center" style="background-color: #E8E8E8;">
        <h1 class="text-center p-5 fw-bold">BLOG</h1>
      </div>
      <div class="col-sm-12 ">
        <hr>
      </div>
      <div class="col-lg-6 col-sm-12 p-0">
      </div>
    </div>
    <div class="row p-5">
      <div class="col-lg-6 col-sm-12 parte1 pl-5 ">
        <h2 id="frase" class="text-center my-5 fw-bold">La adopción, una nueva oportunidad para
          los perros y gatos abandonados</h2>
        <div class="my-4">
          <div class="text-muted">
            <i class="bi bi-calendar3 mx-2 text-info"></i>
            Oct 21, 2020 at 12:05 pm
            <i class="bi bi-newspaper  mx-2 text-info"></i>
            Article
          </div>
        </div>
        <p class="fw-bolder ">
          El abandono y las pérdidas de perros y gatos constituyen el principal obstáculo de bienestar de los animales
          de compañía en nuestro país. Mientras los abandonos no disminuyen, la preocupación es mayor porque, además, la
          adopción no aumenta.
        </p>
        <div class="contenedor">
          <img class="img-fluid my-5 imagen" src="imagenes/blog1.jpg" alt="perritos">
        </div>
        <p class="text-muted ">
          Adoptar o comprar un perro supone asumir una responsabilidad. Cuando estés considerando la posibilidad de
          adoptar un perro y dejar que forme parte de tu vida, debes tener en cuenta que se convertirá en un miembro más
          de tu familia. Se adaptará a tu estilo de vida, y tu día a día se convertirá en el suyo.
          Antes de tomar la decisión definitiva, piénsatelo bien. La devolución de un animal tras ser adoptado le supone
          un estrés y un sufrimiento innecesarios que les perjudica de una manera que ni se merecen, ni es justa para
          ellos.
        </p>
        <p class="text-muted ">
          Adoptar una mascota va más allá de organizar tu hogar, comprar algunos artículos y proporcionarle techo y
          alimento. Requiere un compromiso total hacia otro ser vivo que ha sufrido y está esperando una segunda
          oportunidad para recibir el amor y cuidado que merece. Muchas personas deciden adoptar porque sienten un vacío
          y esperan llenarlo con la compañía de un animal. Otros
          sienten la motivación de hacer una “obra de buena fe”. Al final, lo importante es que con tu nuevo compañero
          disfrutarás de muchos momentos de alegría
        </p>
        <div class="contenedor">
          <img class="img-fluid my-5 imagen" src="imagenes/blog2.jpg" alt="gatitos">
        </div>
        <p class="text-muted ">
          Lo mismo pasa en gatos,
          hay muchas razones por las que adoptar un gato, y muchas más también para adoptar un gato mestizo. Porque
          adoras a los gatos, porque quieres empezar a compartir tu vida con un felino, porque no puedes vivir sin
          ellos, porque echas de menos a tu gato familiar... las razones son infinitas aunque todos los gatos parecen
          tener un comportamiento similar, los gatos mestizos
          tienen unas características muy diferentes dependiendo de su genética y raza. Por ello, los gatos mestizos
          tienen carácter y comportamientos muy diferentes de los gatos de raza y, por supuesto, únicos en cada
          ejemplar.
        </p>
        <p class="text-muted">

          Si es la primera vez que vas a adoptar un gato o perros en AdoptME puedes conocer todas las claves y requisitos
          previos para adoptar a un felino. Si, por el contrario, ya lo tienes claro, debes ir ya conociendolo y que
          se vaya acostumbrando a tu compañía y a su nuevo espacio de vida.

        </p>
        <p id="compartir" class="mx-2 my-5 text-muted text-center">
          ¡Compartir esta publicación!
          <a href="https://www.facebook.com/brandobermello.18?mibextid=LQQJ4d "><i class="bi bi-facebook mx-2 text-muted "></i></a>
          <a href="https://mobile.twitter.com/justinbieber"><i class="bi bi-twitter mx-2 text-muted "></i></a>
          <a href="https://www.instagram.com/justinbieber/"><i class="bi bi-instagram mx-2 text-muted"></i></a>
          <a href="https://www.google.com/"><i class="bi bi-google mx-2 text-muted"></i></a>
        </p>
      </div>
      <div class="col-lg-6 col-sm-12 align-items-center justify-content-center">
        <div class=" text-center p-5 mx-5 my-5" style="background-color: #E8E8E8;">
          <img id="enner" class="center-block img-fluid my-4" width="150px" src="imagenes/goat.webp" alt="persona">
          <h4>
            KEVIN AZUA
          </h4>
          <p class="text-muted">Marketer, blogger</p>
          <p class="text-muted">
            Trabajar en lo que más me apasiona: el mundo animal. Compagino mi trabajo colaborando como voluntario en
            protectoras, santuarios, reservas y cualquier evento o actividad relacionada.
          </p>
          <p id="redesK" class="mx-2 my-5 text-muted">
            <a href="https://www.facebook.com/brandobermello.18?mibextid=LQQJ4d"><i class="bi bi-facebook mx-2 text-muted "></i></a>
            <a href="https://mobile.twitter.com/justinbieber"><i class="bi bi-twitter mx-2 text-muted "></i></a>
            <a href="https://www.instagram.com/justinbieber/"><i class="bi bi-instagram mx-2 text-muted"></i></a>
            <a href="https://www.google.com/"><i class="bi bi-google mx-2 text-muted"></i></a>
          </p>
          <button id="boton1" type="button" class="btn mt-4 fw-semibold " style="background-color:#b2e8f9 ;">
            MAS INFORMACIÓN</button>
        </div>

        <div class="p-5 mx-5 my-5 info align-items-center justify-content-center" style="background-color: #E8E8E8;">
          <p class="text-muted">
            Me llamo Kevin Azua, soy un apasionado por los animales desde siempre. Mi vida ha estado rodeada de
            mascotas,
            desde
            mi primer perro hasta mi actual gato. Siempre me ha parecido importante educar a las personas sobre el
            cuidado,
            el bienestar de los animales y la importancia de la adopción, y es por eso que decidí crear este blog.
          </p>
          <p class="text-muted">
            Creo firmemente en la importancia de dar un hogar amoroso y seguro a todos los animales, y espero continuar
            dedicando mi vida a la promoción de la adopción responsable y la protección de los derechos de los animales.

            En mi blog, comparto mi conocimiento y experiencia sobre el cuidado de mascotas, la protección de especies
            en
            peligro de extinción, la alimentación y la salud de los animales, y la defensa de los derechos de los
            animales.
          </p>
        </div>

        <!-- ---------------- COMENTARIOS ------------------- -->
        <div class="p-5 mx-5 my-5" style="background-color: #E8E8E8;">
          <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['nombre'])) {
              $nombre = $_POST['nombre'];
            } else {
              $nombre = '';
            }
            if (isset($_POST['comentario'])) {
              $comentario = $_POST['comentario'];
            } else {
              $comentario = '';
            }
            $archivo = 'comentarios.txt';
            $contenido = file_get_contents($archivo);
            if (!empty($nombre) && !empty($comentario)) {
              $contenido .= "\n$nombre: $comentario";
              file_put_contents($archivo, $contenido);
            }
          }
          $archivo = 'comentarios.txt';
          $contenido = file_get_contents($archivo);
          $comentarios = explode("\n", $contenido);
          ?>

          <h4>Ingrese su comentario:</h4>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" class="nombre" id="nombre" name="nombre">
            <label for="comentario">Comentario:</label>
            <textarea id="comentario" name="comentario"></textarea>
            <center>
              <input type="submit" id="boton2" value="Enviar" class="text-center btn mt-4 fw-semibold " style="background-color:#b2e8f9 ;">
            </center>
          </form>
          <hr>
          <h4>Comentarios:</h4>
          <?php
          foreach ($comentarios as $comentario) {
            if (!empty($comentario)) {
              echo "<div class=\"comentario\"><strong>$comentario</strong></div>";
            }
          }
          ?>

        </div>
        <!-- ----------------- GALERÍA ------------------- -->
        <div class="p-5 mx-5 my-5" style="background-color: #E8E8E8;">
          <h4 class="text-center">Galería de perritos</h4>

          <?php
          $data = file_get_contents("https://dog.ceo/api/breeds/image/random");
          $resultado = json_decode($data, true);
          if ($resultado['status'] == "success") {
            $imagenUrl = $resultado['message'];
            echo "<div class='contenedorPerro'>";
            echo "<img id='imagen' src='$imagenUrl' class='imagenPerro'>";
            echo "<button id='cambiar-imagen' class='boton3 text-center btn mt-4 fw-semibold' style='background-color:#b2e8f9;' >Cambiar imagen</button>";
            echo "</div>";
          } else {
            echo "Ha ocurrido un error al obtener la imagen de perro";
          }
          ?>
        </div>
        <!-- ----------------- ENCUESTA ------------------- -->
        <div class="p-5 mx-5 my-5" style="background-color: #E8E8E8;">
          <h4>Encuesta</h4>
          <form method="post" action="" class="form">
            <p>¿Qué prefieres los perros o los gatos?</p>
            <input type="radio" name="mascota" value="perro"> Perros<br>
            <input type="radio" name="mascota" value="gato"> Gatos<br>
            <center>
              <input type="submit" name="submit" value="Votar" class="boton4 text-center btn mt-4 fw-semibold " style="background-color:#b2e8f9 ;">
            </center>
          </form>

          <?php
          if (isset($_POST['submit'])) {
            if (isset($_POST['mascota'])) {
              $mascota = $_POST['mascota'];
              $archivo = fopen("votos.txt", "a");
              fwrite($archivo, $mascota . "\n");
              fclose($archivo);
              echo "<center><p>Gracias por votar. Tu selección ha sido registrada.</p></center>";
            } else {
              echo "<center><p>Por favor, selecciona una mascota antes de votar.</p></center>";
            }
          }

          // Obtener los votos registrados en el archivo de texto
          $votos = file("votos.txt", FILE_IGNORE_NEW_LINES);
          $num_perros = 0;
          $num_gatos = 0;
          foreach ($votos as $voto) {
            if ($voto == "perro") {
              $num_perros++;
            } elseif ($voto == "gato") {
              $num_gatos++;
            }
          }
          // Calcular el porcentaje de votos para cada mascota
          $total_votos = count($votos);
          if ($total_votos > 0) {
            $porcentaje_perros = round(($num_perros / $total_votos) * 100, 2);
            $porcentaje_gatos = round(($num_gatos / $total_votos) * 100, 2);
          } else {
            $porcentaje_perros = 0;
            $porcentaje_gatos = 0;
          }
          // Mostrar las estadísticas de la encuesta
          echo "<h2>Estadísticas de la encuesta</h2>";
          echo "<p>Total de votos: " . $total_votos . "</p>";
          echo "<p>Porcentaje de votos para perros: " . $porcentaje_perros . "%</p>";
          echo "<div class='barra'>";
          echo "<div class='progreso' style='width: " . $porcentaje_perros . "%;'>";
          echo $porcentaje_perros . "%";
          echo "</div>";
          echo "</div>";
          echo "<p>Porcentaje de votos para gatos: " . $porcentaje_gatos . "%</p>";
          echo "<div class='barra'>";
          echo "<div class='progreso' style='width: " . $porcentaje_gatos . "%;'>";
          echo $porcentaje_gatos . "%";
          echo "</div>";
          echo "</div>";
          ?>
        </div>
      </div>
    </div>
  </div>




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
        <a href="https://www.facebook.com/brandobermello.18?mibextid=LQQJ4d" class="text-white me-4">
          <i class="bi bi-facebook"></i>
        </a>
        <a href="https://mobile.twitter.com/justinbieber" class="text-white me-4">
          <i class="bi bi-twitter"></i>
        </a>
        <a href="https://www.google.com/" class="text-white me-4">
          <i class="bi bi-google"></i>
        </a>
        <a href="https://www.instagram.com/justinbieber/" class="text-white me-4">
          <i class="bi bi-instagram"></i>
        </a>
        <a href="https://www.google.com/" class="text-white me-4">
          <i class="bi bi-linkedin"></i>
        </a>
        <a href="https://github.com/" class="text-white me-4">
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
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
            <p>
              Nos encargamos de darles un hogar seguro para todas las mascotas
              cuidamos y protegemos de ellas hasta que alguien desee adoptarlas. Puedes visitar el sitio y encontrar a
              tu amigo fiel
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->

          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Navegación</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
            <p>
              <a href="index.html" class="text-white">Home</a>
            </p>
            <p>
              <a href="About_us.html" class="text-white">Sobre nosotros</a>
            </p>
            <p>
              <a href="contact.html" class="text-white">Adopta ¡YA! </a>
            </p>
            <p>
              <a href="blog.php" class="text-white">Blog</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contactos</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
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
  <!-- Footer -->
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
        color: "blue",

      }, 300);
    });

    // Obtener el botón y la imagen
    const botonCambiarImagen = document.getElementById("cambiar-imagen");
    const imagen = document.getElementById("imagen");

    // Agregar un evento clic al botón
    botonCambiarImagen.addEventListener("click", function() {
      // Obtener una nueva imagen de la API
      fetch("https://dog.ceo/api/breeds/image/random")
        .then(response => response.json())
        .then(data => {
          // Actualizar la imagen en la página
          imagen.src = data.message;
        })
        .catch(error => console.error(error));
    });
  </script>
</body>

</html>