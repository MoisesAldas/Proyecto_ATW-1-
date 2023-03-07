<!DOCTYPE html>
<html>
<head>
	<title>Visualizar datos</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
 
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="icon" type="image/png" sizes="32x32" href="imagenes/paw-print.ico">
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
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
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
		}
		h1 {
			text-align: center;
			color: #333;
            margin-top: 20px;
            margin-bottom: 20px;
		}
		table {
			margin: 0 auto;
			border-collapse: collapse;
			width: 90%;
			max-width: 800px;
			background-color: #fff;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
			border-radius: 5px;
			overflow: hidden;
            margin-bottom: 30px;
		}
		th, td {
			padding: 10px;
			text-align: left;
		}
		th {
			background-color: #333;
			color: #fff;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
        
		.view {
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0px 2px 10px rgba(0,0,0,0.2);
			padding: 20px;
			margin: 50px auto;
			max-width: 1000px;
		}

        .table-view {
  overflow-x: auto;
}
    #contador {
    
    background-color: #333;
    color: #fff;
    padding: 20px;
    border-radius: 5px;
    font-size: 16px;
    margin: 0 auto;
	border-collapse: collapse;
	width: 20%;
	max-width: 800px;
	overflow: hidden;
    text-align: center;
  }

    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
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
                    <a class="nav-link active" href="blog.html" id="opcion2">Blog</a>
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
      <div class="view">
	<h1>Visualizar datos</h1>
	<table>
		<tr>
			<th>Nombre</th>
			<th>Correo electrónico</th>
			<th>Teléfono</th>
			<th>Dirección</th>
			<th>Tipo de mascota</th>
			<th>Razón de la adopción</th>
		</tr>
        <img src="imagenes/familypet.jpeg" alt="Pet" width=250" height="200">
		<?php
		$archivo = fopen("datos_adopciones.txt", "r") or die("No se pudo abrir el archivo.");

		while (!feof($archivo)) {
			$linea = fgets($archivo);

			if ($linea != "") {
				$datos = explode("|", $linea);
				echo "<tr>";
				echo "<td>" . $datos[0] . "</td>";
				echo "<td>" . $datos[1] . "</td>";
				echo "<td>" . $datos[2] . "</td>";
				echo "<td>" . $datos[3] . "</td>";
				echo "<td>" . $datos[4] . "</td>";
				echo "<td>" . $datos[5] . "</td>";
				echo "</tr>";
			}
		}

		fclose($archivo);
        
		?>
        <div id="contador"></div>     
        
	</table>

    
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
                    <a href="blog.php" class="text-white"   ">Blog</a>
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
    // Obtener la tabla
const table = document.querySelector('table');

// Obtener el número de filas en la tabla
const numRows = table.rows.length - 1; // Restar 1 para excluir la fila de encabezado

// Obtener el elemento del contador
const contador = document.querySelector('#contador');

// Establecer el valor del contador
contador.textContent = `Total de personas registradas: ${numRows}`;
table.insertAdjacentElement('afterend', contador);
</script>
</html>
