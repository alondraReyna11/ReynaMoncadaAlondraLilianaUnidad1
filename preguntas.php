<?php
session_start();
require_once 'cdn.html';
include 'cnn.php';

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AYUDA</title>
    <!-- Font Awesome -->
    <link rel="icon" href="img/logo.png" type="image/x-icon" />
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"
  rel="stylesheet"
/>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
></script>
<!-- Carousel wrapper -->
</head>
<body>
 <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
  <!-- Container wrapper -->
  <div class="container-fluid">

    <!-- Navbar brand -->
    <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
        <img
          src="img/logo.png"
          height="40"
          alt="MDB Logo"
          loading="lazy"
        />
        <a class="nav-link" href="index.php"></a>
      </a>
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <!-- Link -->
        <li class="nav-item">
          <a class="nav-link" href="inicio.php">YABtravel</a>
        </li>

      </ul>

      <!-- Icons -->
      <ul class="navbar-nav d-flex flex-row me-1">
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="inicio.php"><i class="fas fa-house"></i>INICIO</a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="Galeria.php"><i class="fas fa-image"></i>GALERIA</a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="contacto.php"><i class="fas fa-headset"></i>CONTACTO</a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="preguntas.php"><i class="far fa-circle-question"></i></a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#" onclick="cerrarSesion()"><i class="fas fa-arrow-right-to-bracket"></i></a>
        </li>
      </ul>
    </div>
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<br>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10"><h1><center>Preguntas Frecuentes <i class="fas fa-question"></i></center></h1></div>
  <div class="col-md-1"></div>
</div>  
<hr>
<body>
<div class="row">
  <div class="col-md-4"><div class="accordion" id="accordionExample">
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">

          METODO DE PAGO <i class="fas fa-hand-holding-dollar"></i>
        </button>
      </h5>
    </div>
   
  </div>
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
          data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
          ¿Cuáles son las formas de pago?
        </button>
      </h5>
    </div>
    <div id="collapse5" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      Para realizar el pago de tu reserva, cuentas con las siguientes opciones: Transferencia
       bancaria, para lo cual se te proporcionará el número de cuenta, clabe interbancaria y código de referencia para pago. Depósito en efectivo en cualquiera de las sucursales bancarias o multicajeros de Banco Santander. Pago con tarjeta de crédito o débito mediante plataforma de PayPal con un cargo adicional del 6%. Es necesario que tengas una cuenta de PayPal personal para que nuestro ejecutivo envíe una solicitud de cobro a tu correo electrónico una vez que hayas confirmado tu reserva. Pago en efectivo en nuestra oficina ubicada
       en calle Nogalera #160 saltillo 2000 Para esta opción se requiere cita previamente.
      </div>
    </div>
  </div>
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
          data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          ¿Hay tarifas especiales para menores?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
    
Contamos con tarifas para menores, contemplando en esta categoría a los niños de 03 a 07 años al momento del viaje. Niños mayores de 07 años al momento del viaje, pagan tarifa de adulto. Niños menores de 03 años, se consideran infantes y no pagan (sentados en las piernas de un adulto). *Consultar restricciones de cada tour al momento de la reserva. **La agencia y demás prestadores de servicios podrán requerir en cualquier momento un documento oficial del menor para verificar que tiene la edad declarada, en caso contrario,
 la agencia tiene todo el derecho de cobrar la diferencia en el costo del tour.
      </div>
    </div>
  </div>
</div></div>
  <div class="col-md-4"><div class="accordion" id="accordionExample">
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
      DEVOLUCIONES Y CANCELACIONES <i class="fab fa-dropbox"></i>
        </button>
      </h5>
    </div>
    
  </div>
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingT">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
          data-target="#collapseT" aria-expanded="false" aria-controls="collapseTwo">
          ¿Puedo cancelar mi viaje y regresarme el dinero?Abrir Respuesta

        </button>
      </h5>
    </div>
    <div id="collapseT" class="collapse" aria-labelledby="headingT" data-parent="#accordionExample">
      <div class="card-body">

Todo cambio de nombre/fecha/hora/itinerario/cancelación y o modificación de su paquete tiene cargos adicionales sujetos a las condiciones de cada servicio. NO APLICAN cancelaciones ni reembolsos. En casos extremos, de enfermedad o muerte, las cancelaciones y reembolsos quedan sujetos a las condiciones de la tarifa o servicio comprado
 así como a las políticas de reservación del tercero que nos brinda el servicio.
      </div>
    </div>
  </div>
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
          data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
          ¿Cuanto tarda la devlucion de una cancelacion?Abrir Respuesta
        </button>
      </h5>
    </div>
    <div id="collapse6" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
    

Los depósitos de los reembolsos aprobados se realizan en un lapso de 4 a 5 días hábiles.
      </div>
    </div>
  </div>
</div></div>
  <div class="col-md-4"><div class="accordion" id="accordionExample">
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
     
      <i class="fas fa-lock"></i>
    
      </h5>
    </div>
  </div>
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingc">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
          data-target="#collapsec" aria-expanded="false" aria-controls="collapseTc">
          ¿Cómo protegés la seguridad de mi información personal??Abrir Respuesta?
        </button>
      </h5>
    </div>
    <div id="collapseC" class="collapse" aria-labelledby="headingTc" data-parent="#accordionExample">
      <div class="card-body">
      

En nuestra página web, tomamos en serio la seguridad de tu 
información personal. Utilizamos medidas de seguridad como el cifrado SSL para proteger tus datos durante la transmisión. Además, mantenemos nuestros sistemas actualizados y seguimos las mejores 
prácticas de seguridad para garantizar la protección de tu información.
      </div>
    </div>
  </div>
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
          data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
          ¿Que pasa con mis datos personales?Abrir Respuesta
        </button>
      </h5>
    </div>
    <div id="collapse7" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
     

Nos comprometemos a proteger y salvaguardar tus datos 
personales. Cumplimos con todas las leyes y regulaciones de protección de datos aplicables y tomamos medidas 
de seguridad para garantizar la confidencialidad y seguridad de tu información.
      </div>
    </div>
  </div>
</div></div>
</div>  
</body>
<BR></BR>
<!-- Footer -->
<br>
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->

  <div class="container p-4">

    <!-- Section: Social media -->
    <section class="mb-1">
      <!-- Facebook -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i></a>

      <!-- Google -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #25d366" href="#!" role="button">  <i class="fab fa-whatsapp"></i>

      <!-- Instagram -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>

     </section>
    <!-- Section: Social media -->



    <!-- Section: Text -->


  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © YABtravel Agencia de viajes
   2023
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript">

  function cerrarSesion(){
   Swal.fire({
  title: '¿Estas seguro de querer cerrar tu sesión?',
  text: "Tendras que iniciar sesión nuevamente!!!",
  background: 'white',
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#1F5003',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Cerrar sesión',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
    window.location = "login.php";
  }
})
  };

