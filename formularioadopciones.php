<?php
// Función para validar un campo requerido
function validarCampo($campo) {
    if (empty($campo)) {
        return "Este campo es obligatorio";
    } else {
        return "";
    }
}

// Función para validar el correo electrónico
function validarEmail($email) {
    if (empty($email)) {
        return "Este campo es obligatorio";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Ingrese un correo electrónico válido";
    } else {
        return "";
    }
}

// Función para validar el número de teléfono
function validarTelefono($telefono) {
    if (empty($telefono)) {
        return "Este campo es obligatorio";
    } elseif (!preg_match("/^[0-9]{10}$/", $telefono)) {
        return "Ingrese un número de teléfono válido (10 dígitos)";
    } else {
        return "";
    }
}

// Verificamos si se ha enviado el formulario
if (isset($_POST['enviar'])) {

    // Validamos los campos del formulario
    $nombreError = validarCampo($_POST['nombre']);
    $emailError = validarEmail($_POST['email']);
    $telefonoError = validarTelefono($_POST['telefono']);
    $direccionError = validarCampo($_POST['direccion']);
    $tipoMascotaError = validarCampo($_POST['tipo_mascota']);
    $razonAdopcionError = validarCampo($_POST['razon_adopcion']);

    // Si todos los campos son válidos, guardamos los datos en el archivo
    if (empty($nombreError) && empty($emailError) && empty($telefonoError) && empty($direccionError) && empty($tipoMascotaError) && empty($razonAdopcionError)) {

        // Guardamos los datos en el archivo "datos_adopciones.txt"
        $archivo = fopen("datos_adopciones.txt", "a");
        fwrite($archivo, $_POST['nombre'] . "|" . $_POST['email'] . "|" . $_POST['telefono'] . "|" . $_POST['direccion'] . "|" . $_POST['tipo_mascota'] . "|" . $_POST['razon_adopcion'] . "\n");
        fclose($archivo);

        // Mostramos un mensaje de éxito
        echo "<p>Los datos se han guardado correctamente, nos contactaremos contigo</p>";

    }
}
?>

<!DOCTYPE html>
<html>
<html lang="es">
<head>
	<title>Formulario de adopción de mascotas</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
 
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="icon" type="image/png" sizes="32x32" href="imagenes/paw-print.ico">
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<style>
        /*
        Estilos del nav
        */
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
      /*
        Estilos form
        */
		body {
			background-color: #F2F2F2;
		}
		h1 {
			text-align: center;
			color: #333;
		}
		.form {
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0px 2px 10px rgba(0,0,0,0.2);
			padding: 20px;
			margin: 50px auto;
			max-width: 770px;
		}
		label {
			display: block;
			margin-bottom: 5px;
			color: #333;
		}
		input[type="text"], input[type="email"], input[type="tel"], select, textarea {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: none;
			background-color: #F2F2F2;
			color: #333;
			font-size: 16px;
			resize: none;
		}
		input[type="submit"], input[type="reset"], input[type="button"] {
   background-color: #333;
   color: #fff;
   border: none;
   border-radius: 5px;
   padding: 10px 20px;
   font-size: 16px;
   cursor: pointer;
   margin-bottom: 20px;

		}
		input[type="submit"]:hover, input[type="reset"]:hover, input[type="button"]:hover {
			background-color: #555;
		}
    img {
    max-width: 80%;

    margin: 0 auto;
    display: block;

    }


/* Estilos para pantallas medianas */
@media screen and (min-width: 768px) and (max-width: 991px) {
    .form {
        max-width: 750px;
    }
    input[type="submit"], input[type="reset"] {
        width: 100%;
    }
}

/* Estilos para pantallas pequeñas */
@media screen and (max-width: 767px) {
    .form {
        margin: 30px auto;
        padding: 10px;
    }
    input[type="submit"], input[type="reset"] {
        width: 100%;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    input[type="text"], input[type="email"], input[type="tel"], select, textarea {
        width: 100%;
        padding: 8px;
    }
    .form-control {
        padding: 6px;
    }
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
                  <li class="nav-item">
                    <a class="nav-link active "href="modulopagos.html" id="opcion4">Donaciones</a>
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
    <div class="form">
    <h1>Formulario de adopción de mascotas</h1>
	<form action="formularioadopciones.php" method="POST">
        <div class="row">
      <div class="col-md-6">
        <div class="form-group"
		<label for="nombre">Nombre completo:</label>
		<input type="text" name="nombre">
		<?php if(isset($nombreError)): ?>
			<label style="color: red;"><?php echo $nombreError; ?></label>
		<?php endif; ?>
		<br>
        </div>
        <div class="form-group">
		<label for="email">Correo electrónico:</label>
		<input type="email" name="email">
		<?php if(isset($emailError)): ?>
			<label style="color: red;"><?php echo $emailError; ?></label>
		<?php endif; ?>
		<br>
        </div>
        <div class="form-group">
		<label for="telefono">Teléfono:</label>
		<input type="tel" name="telefono">
		<?php if(isset($telefonoError)): ?>
			<label style="color: red;"><?php echo $telefonoError; ?></label>
		<?php endif; ?>
		<br>
        <img src="imagenes/petform.jpeg" alt="Pet" width=300" height="200">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
		<label for="direccion">Dirección:</label>
		<input type="text" name="direccion">
		<?php if(isset($direccionError)): ?>
			<label style="color: red;"><?php echo $direccionError; ?></label>
		<?php endif; ?>
		<br>
        </div>
        <div class="form-group">
		<label for="tipo_mascota">Tipo de mascota:</label>
		<select name="tipo_mascota">
			<option value="">--Seleccione--</option>
			<option value="perro"<?php if(isset($_POST['tipo_mascota']) && $_POST['tipo_mascota'] == 'perro') echo ' selected'; ?>>Perro</option>
			<option value="gato"<?php if(isset($_POST['tipo_mascota']) && $_POST['tipo_mascota'] == 'gato') echo ' selected'; ?>>Gato</option>
			<option value="otro"<?php if(isset($_POST['tipo_mascota']) && $_POST['tipo_mascota'] == 'otro') echo ' selected'; ?>>Otro</option>
		</select>
		<?php if(isset($tipoMascotaError)): ?>
			<label style="color: red;"><?php echo $tipoMascotaError; ?></label>
		<?php endif; ?>
		<br>
        <div class="form-group">
		<label for="razon_adopcion">Razón de la adopción:</label>
		<textarea name="razon_adopcion"></textarea>
		<?php if(isset($razonAdopcionError)): ?>
			<label style="color: red;"><?php echo $razonAdopcionError; ?></label>
		<?php endif; ?>
		<br>
     
        <div style="text-align: center;">
		<input type="submit" name="enviar" value="Enviar datos">
		<input type="reset" name="borrar" value="Borrar datos">
		<input type="submit" name="ver" formaction="ver_datos_adopciones.php" value="Visualizar datos">
        
    
    

        </div>
        
      </div>
      
    </div>
    
  </form>
  
</div>

</div>
</div>

</div>


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
                    <a href="blog.php" class="text-white">Blog</a>
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
</body>
<script>


$(document).ready(function () {


  $("#myTitleM").hover(function () {
    $(this).addClass("grow");

  },
    function () {
      $(this).removeClass("grow");
    })




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

  $("#Contactos").mouseover(function () {
    <!--Cambiar el fondo de color negro con letra blanca-->
    $(this).css("background-color", "black");
    $(this).css("color", "white");
  });

  $("#Contactos").mouseout(function () {
    $(this).remove(css());
    ;
  });

  $("#topBtn").click(function () {
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
</html>