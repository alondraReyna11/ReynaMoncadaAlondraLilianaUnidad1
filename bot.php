<?php
session_start();
require_once 'cdn.html';
include 'cnn.php';

?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAT TRAVELS | YAB</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
          src="img/log.png"
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
          <a class="nav-link" href="salir.php"><i class="fas fa-arrow-right-to-bracket"></i></a>
        </li>
      </ul>

    </div>
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<hr>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-6"> 
    <!-- Gallery -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="img/maa.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img      src="img/ti.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
    src="img/mt.jpg"
class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
    src="img/pue.jpg"
class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
    src="img/mty.jpg"
class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
    src="img/acapulco.jpg"
class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
    <img
    src="img/aero.jpg"
class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
    <img
    src="img/hotel.png"
class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
  <hr>
  
</div>
<!-- Gallery -->     
   </div>
  <div class="col-md-4">
   
  <div class="wrapper">
        <div class="title">YABtravel Chatbot</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hola, quieres ayuda?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Escribeme.." required>
                <button id="send-btn">ENVIAR</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script></body>
</html></div>
</div>
<hr>

<body style="background-image: url('summer.png'); background-repeat: no-repeat; background-size: cover;">


</html>

