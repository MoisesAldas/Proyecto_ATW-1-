
<?php
    error_reporting(E_ERROR | E_PARSE);
    $vNombre = $_POST['Nombre'];
    $vApellido = $_POST['Apellido'];
    $vTipoTarjeta= $_POST['tipoTarjeta'];
    $vNumeroTarjeta = $_POST['numTarjeta'];
    $vFechaVencimiento = $_POST['fechaV'];
    $vCodigoSeguridad = $_POST['codigoCVV'];
    $vDonacion = $_POST['donacion'];
   
 
    // guardar todos los datos en un archivo txt
    $fichero = "datosDonaciones.txt";
    $identificador = fopen($fichero, 'a+');
    $datosDonantes = "\n" . $vNombre . " " . $vApellido . " " . $vTipoTarjeta . " " . $vNumeroTarjeta . " " . $vFechaVencimiento . " " . $vCodigoSeguridad . " " . $vDonacion ;
    fwrite($identificador, $datosDonantes);
    fclose($identificador);
    // redireccionar a la pagina de agradecimiento
   
    ?> 


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="styleDonaciones.css" />
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="icon" type="image/png" sizes="32x32" href="imagenes/paw-print.ico">
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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

  /*    dame muchos estilos para la parte de donaciones se encuentre todo centado */
    .donaciones{
        display: flex;
        justify-content: center;
        
        height: 95vh;
        background-image: url( "imagenes2/job562-nunoon-05.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .car{
        margin-top: 40px;
        padding: 20px;
    }
 </style>
 
</head>
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
                    <a class="nav-link active" href="blog.php" id="opcion2">Blog</a>
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
  
    </div>
    <div class="container-fluid  donaciones">
      <div class="row">
        <div class="col-12">
          <div class="card car">
            <div class="card-body ">
              <h1 class="card-title" style="font-weight: bold;">Gracias por tu donación  <?php echo  "$vNombre " . "$vApellido";?> </h1>
              <p class="card-text">Tu donación nos ayudará a seguir ayudando a los animales</p>
              <a href="index.html" class="btn btn-primary boton-mascota">Volver al inicio</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid " style="margin:0 !important ;padding:0px !important;">

        <!-- Footer -->
        <footer
                class="text-center text-lg-start text-white mt-5 "
                style="background-color:  #151515"
                >
          <!-- Section: Social media -->
          <section
                   class="d-flex justify-content-between p-4"
                   style="background-color:  #151515"
                   >
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
                  <hr
                      class="mb-4 mt-0 d-inline-block mx-auto"
                      style="width: 60px; background-color: #7c4dff; height: 2px"
                      />
                  <p>
                    Nos encargamos de darles un hogar seguro para todas las mascotas 
                    cuidamos y protegemos de ellas hasta que alguien desee adoptarlas. Puedes visitar el sitio y encontrar a tu amigo fiel 
                  </p>
                </div>
                <!-- Grid column -->
      
                <!-- Grid column -->
              
                <!-- Grid column -->
      
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">Navegación</h6>
                  <hr
                      class="mb-4 mt-0 d-inline-block mx-auto"
                      style="width: 60px; background-color: #7c4dff; height: 2px"
                      />
                  <p>
                    <a href="#" class="text-white" >Home</a>
                  </p>
                  <p>
                    <a href="#" class="text-white" >Sobre nosotros</a>
                  </p>
                  <p>
                    <a href="#" class="text-white" >Adopta ¡YA! </a>
                  </p>
                  <p>
                    <a href="blog.php" class="text-white" >Blog</a>
                  </p>
                </div>
                <!-- Grid column -->
      
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">Contactos</h6>
                  <hr
                      class="mb-4 mt-0 d-inline-block mx-auto"
                      style="width: 60px; background-color: #7c4dff; height: 2px"
                      />
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
          <div
               class="text-center p-3"
               style="background-color: rgba(0, 0, 0, 0.2)"
               >
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/"

               >Universidad de las Fuerzas Armadas del Ecuador.</a
              >
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
      
      </div>
    </div>

      <script>



        $(document).ready(function() {


          $("#myTitleM").hover(function() {
              $(this).addClass("grow");

            },
            function() {
              $(this).removeClass("grow");
            })




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

        $("#Contactos").mouseover(function() {
         
          $(this).css("background-color", "black");
          $(this).css("color", "white");});

          $("#Contactos").mouseout(function() {
                  $(this).remove(css());
                  ;});

          $("#topBtn").click(function() {
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
          });

          $(".contenerdor").hide().fadeIn(2000)
    

          var images = ['imagenes/gallery-original-8.jpg', 'imagenes/gallery-original-1.jpg', 'imagenes/gallery-original-2.jpg'];
          var i = 0;

          function changeImg() {
          $("#myImg").attr("src", images[i]);
          i = (i + 1) % images.length;
        }
        setInterval(changeImg, 3000);

        $("#braili").slideDown(3000);

        $(".perro1").hide().mouseover().fadeIn(5000);

      });

      </script>


  
</body>



</html>


    