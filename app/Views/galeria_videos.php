<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .scrollable-container {
      max-height: 500px;
      overflow-y: auto;
    }

    .imagen {
      border-radius: 5px;
      width:150px;
    }

    .parrafo {
      width: 90%;
     
    }

    .notice {
      border-bottom: 2px solid rgb(0, 176, 246) !important;
      border-top: 2px solid rgb(0, 176, 246) !important;
      width: 60%;
    }

    .divNoticia {
      display: flex;
      justify-content: center;
    }
    .fondo{
      background:#00B0F6 !important;
    }
   
    .activo{
      border:2px #008CC3 !important;
      background:#008CC3 !important;
    }
    .ocultar{
      background: #00B0F6;
      width:30px;
      border-radius: 7px;
      display:flex;
      justify-content: space-around;
      font-size:20px;
      font-weight: 1000;
      cursor:pointer;
      
    }
    .ocultar:hover{
      background: #008CC3;
    }
    .masVideos , .fondo{
      cursor:pointer;
    }
  
    
  </style>
</head>
<body>
    
<div class="container pt-4" style='padding-top:120px !important'>
  <div class="row">
      <div class="col-auto">
      
        <ul class="list-group avance- ">
        <li value="0"  class='list-group-item fondo text-light activo elemento-lectura' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Avance&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
        <li value="0"  class='list-group-item fondo text-light  elemento-lectura' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
          <li value="10" class='list-group-item fondo text-light  elemento-lectura' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;20%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
          <li value="20" class='list-group-item fondo text-light  elemento-lectura' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;30%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
          <li value="30" class='list-group-item fondo text-light  elemento-lectura' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;40%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
          <li value="40" class='list-group-item fondo text-light  elemento-lectura' > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;50%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
          <li value="50" class='list-group-item fondo text-light  elemento-lectura' > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;60%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
          <li value="60" class='list-group-item fondo text-light  elemento-lectura'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;70%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
          <li value="70" class='list-group-item fondo text-light  elemento-lectura' > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;80%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
          <li value="80" class='list-group-item fondo text-light  mb-2 elemento-lectura'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;90%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
          <div class="contenedor" ><div class="ocultar">-</div></div>
          
        </ul>
        <div class="contenedor" ><div class="ocultar mostrar">+</div></div>
      </div>
 
    
  
    
      <div class="col elemento-lectura" id="videoContainer" data-defaultvalue="Haz clic aquí para reproducir el video">
  <?php
    $videoId = (end($multimedia)['url']);
    echo '<iframe width="95%" height="450px" src="https://www.youtube.com/embed/' . $videoId . '?autoplay=1" frameborder="0" allowfullscreen></iframe>';
  ?>
  <h5 class="text-center mt-1 mb-3 elemento-lectura"><?php echo (end($multimedia)['name']); ?></h5>
</div>


  <div class="col-sm-2 scrollable-container text-center mb-4 elemento-lectura">
<?php 

$arreglo=array_reverse($multimedia);
  foreach ($arreglo as $info) { ?>
    
      <div class="masVideos" data-info='<?php echo json_encode($info)?>'>
        
        <?php

          $videoId =$info["url"]; // Reemplaza "VIDEO_ID" por el ID del video de YouTube que deseas mostrar

          $thumbnailUrl = "https://img.youtube.com/vi/" . $videoId . "/maxresdefault.jpg";
          echo '<img style="width:100%" src="' . $thumbnailUrl . '" alt="Miniatura del video">';
        ?>
       <label for="" class='pb-2'> <?php echo $info["name"] ?></label><br>
      </div>
     <?php   } ?>   
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
if(sessionStorage.getItem('audio')=='true'){
// Crea un objeto de síntesis de voz
var synthesis = window.speechSynthesis;

// Variable para el temporizador
var temporizador;

// Función para reproducir el texto

function reproducirTexto() {
  var mensaje = document.getElementById("videoContainer").getAttribute("data-defaultvalue");
  var utterance = new SpeechSynthesisUtterance(mensaje);
  synthesis.speak(utterance);
}

// Función para iniciar el temporizador y reproducir el texto
function iniciarTemporizador() {
  detenerReproduccion(); // Detener la reproducción actual antes de iniciar una nueva

  temporizador = setTimeout(function() {
    reproducirTexto();
  }, 10); // Esperar 2 segundos antes de reproducir el texto
}

// Función para detener la reproducción y limpiar el temporizador
function detenerReproduccion() {
  synthesis.cancel();
  clearTimeout(temporizador);
}

// Obtén el elemento del video container
var videoContainer = document.getElementById("videoContainer");

// Asocia los eventos mouseover y mouseout al elemento del video container
videoContainer.addEventListener("mouseover", iniciarTemporizador);
videoContainer.addEventListener("mouseout", detenerReproduccion);
}

    $('.mostrar').hide();
  $('.ocultar').click(function(){
    $('.avance-').hide();
    $('.mostrar').show();
  })

  $('.mostrar').click(function(){
    $('.avance-').show();
    $('.mostrar').hide();
    
  })

  $('.masVideos').click(function(){
   let info= $(this).data('info');
    window.location.href = `./galeria-videos/${info.slug}` ;

  })

  $('.fondo').click(function(){
    $(this).addClass('activo');
  })

</script>
</body>
</html>