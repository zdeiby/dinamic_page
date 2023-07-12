

<!DOCTYPE html>
<html lang="en">
<head>
<script>
      window.onload = function() {
        // Verificar la compatibilidad del navegador con la síntesis de voz
        if ('speechSynthesis' in window) {
          var msg = new SpeechSynthesisUtterance();
          var voices = speechSynthesis.getVoices();

          // Establecer el texto a reproducir
          msg.text = 'Selecciona el texto que desees y con gusto lo leeré';

          // Establecer la voz que se utilizará (opcional)
          msg.voice = voices[0]; // Puedes ajustar el índice según las voces disponibles en tu navegador

          // Reproducir el mensaje de voz
          speechSynthesis.speak(msg);
        }
      };
    </script>
  <title>Encabezado con navegación completa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    .fixed-top {
      position: fixed;
      top: -4px !important;
      right: 0;
      left: 0;
      z-index: 1030;
    }

    .submenu {
      display: none;
      position: absolute;
      z-index: 1;
    }

    .submenu.show {
      display: block;
    }

    .nav {
      position: relative;
      background:#ffff;
      border-bottom: 2px solid #00B0F6;
    }

    .sub {
      background: #ffffff;
      opacity: 1;
      text-decoration: none;
      color: inherit;
    }

    .liT:hover {
      background: #e5e5e5;
    }

    li {
      list-style: none;
    }

    a {
      text-decoration: none;
      color: black !important;
    }

    .div1 {
      background: #ffffff;
      opacity: 1;
      border: 2px solid #e5e5e5;
      border-radius: 8%;
    }

    .navbar>.container, .navbar>.container-fluid {
      display: flex;
      justify-content: center;
      align-items: center;
      padding-top: 13px !important;
    }

    .custom-button {
      border: 1px solid #00B0F6 !important;
      background: #00B0F6 !important;
    }

    .custom-button:hover {
      background: #008CC3 !important;
    }
    .tamano{
        font-size:20px;
    }
    .img2{
    height: 300px !important;
    border-radius:2%  !important;
}
.upload-button {
        position: relative;
    }

    .upload-button::before {
    
        position: absolute;
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
        width: 30px;
        height: 30px;
        border: 2px solid #000;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        cursor: pointer;
    }

    .upload-button input[type="file"] {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }

    .carousel-container {
  width: 100%;
  height: 400px;
}

.carousel-container .carousel-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}


  </style>
</head>
<body>

<div class="container" style="padding-top: 110px;" id="text-input">
    <img src="https://www.unidadfamiliamedellin.com.co/unidadfamiliamedellin/resources/img/head.png" width="100%" height="100" class="pb-2">
    <div class="row">
        <div class="col">
            <div id="carouselExampleControls" class="carousel slide mt-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="upload-button position-relative">
                            <img src="<?php echo base_url('uploads/fileInput1.jpg'); ?>" style="height: 400px !important; border-radius: 5%;" class="d-block w-100 imagen" alt="...">
                            <input type="file" id="fileInput1" >
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="upload-button position-relative">
                            <img src="<?php echo base_url('uploads/fileInput2.jpg'); ?>" style="height: 400px !important; border-radius: 5%;" class="d-block w-100 imagen" alt="...">
                            <input type="file" id="fileInput2">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="upload-button position-relative">
                            <img src="<?php echo base_url('uploads/fileInput3.jpg'); ?>" style="height: 400px !important; border-radius: 5%;" class="d-block w-100 imagen" alt="...">
                            <input type="file" id="fileInput3">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

  


<div class="container pt-4 text-center pb-4">
  <h3 class="pb-4  elemento-lectura" style="color:#00B0F6" contenteditable="<?php echo $tof ?>" id='titulo'><?php echo $home[0]['titulo']?></h3>
  <div class="row">
    <div class="col-md-6">
      <div class="container pt-4 elemento-lectura">
        <p contenteditable="<?php echo $tof ?>" id="texto">
        <?php echo $home[0]['texto']?> 
        </p>
      </div>
    </div>
    <div class="col-md-6">
      <div id="carouselExampleControls1" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="upload-button position-relative">
              <img src="<?php echo base_url('uploads/fileInputC1.jpg'); ?>" style="height:400px !important; border-radius:5%;" class="d-block w-100 imagen" alt="...">
              <input type="file" id="fileInputC1">
            </div>
          </div>
          <div class="carousel-item">
            <div class="upload-button position-relative">
              <img src="<?php echo base_url('uploads/fileInputC2.jpg'); ?>" style="height:400px !important; border-radius:5%;" class="d-block w-100 imagen" alt="...">
              <input type="file" id="fileInputC2">
            </div>
          </div>
          <div class="carousel-item">
            <div class="upload-button position-relative">
              <img src="<?php echo base_url('uploads/fileInputC3.jpg'); ?>" style="height:400px !important; border-radius:5%;" class="d-block w-100 imagen" alt="...">
              <input type="file" id="fileInputC3">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>
<div class="col text-center pb-3">
    <?php if( $tof==='true') { 
      echo '
      <form>
      <button class="btn btn-primary actualizar" style="background:#00B0F6 !important">Guardar</button>
      </form>     ';
    }
    ?>
    </div>

       <!-- <img width="80%"src="https://cdnwordpresstest-f0ekdgevcngegudb.z01.azurefd.net/es/wp-content/uploads/2022/09/unidad-familia-4.jpg" alt=""> -->
    </div>
    <div class="row">
    </div>
  </div>
</div>
</div>





<!----- FOOTER ------>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>
      $('.actualizar').click(function(){
       let titulo= $('#titulo').text();
       let texto= $('#texto').text();
       
       
       $.ajax({
        url:"index.php/editar",
        method: "POST",
        data: {
            titulo:titulo,
            texto:texto
        },
        success:function(response){
          console.log(response)
        }
      })

      })
      


      $(document).ready(function() {
    $('#fileInput1').on('change', function() {  //para cargar imagenes del banner superior
     // e.preventDefault();

          var formData = new FormData();
          formData.append('formData', $('#fileInput1')[0].files[0]);
          formData.append('slug','fileInput1.jpg');

          console.log(formData); // Mueve esta línea aquí

          $.ajax({
              url: "index.php/add-img",
              method: "POST",
              data: formData,
              processData: false,
              contentType: false,
              success: function(response) {
                  console.log(response);
                 window.location.reload();
              },
              error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
          });
    });
    $('#fileInput2').on('change', function() {
     // e.preventDefault();

          var formData = new FormData();
          formData.append('formData', $('#fileInput2')[0].files[0]);
          formData.append('slug','fileInput2.jpg')

          console.log(formData); // Mueve esta línea aquí

          $.ajax({
              url: "index.php/add-img",
              method: "POST",
              data: formData,
              processData: false,
              contentType: false,
              success: function(response) {
                  console.log(response);
                 window.location.reload();
              },
              error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
          });
    });
    $('#fileInput3').on('change', function() {
     // e.preventDefault();

          var formData = new FormData();
          formData.append('formData', $('#fileInput3')[0].files[0]);
          formData.append('slug','fileInput3.jpg');

          console.log(formData); // Mueve esta línea aquí

          $.ajax({
              url: "index.php/add-img",
              method: "POST",
              data: formData,
              processData: false,
              contentType: false,
              success: function(response) {
                  console.log(response);
                 window.location.reload();
              },
              error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
          });
    });
    $('#fileInputC1').on('change', function() {  //para cargar imagenes del banner superior
     // e.preventDefault();

          var formData = new FormData();
          formData.append('formData', $('#fileInputC1')[0].files[0]);
          formData.append('slug','fileInputC1.jpg');

          console.log(formData); // Mueve esta línea aquí

          $.ajax({
              url: "index.php/add-img",
              method: "POST",
              data: formData,
              processData: false,
              contentType: false,
              success: function(response) {
                  console.log(response);
                 window.location.reload();
              },
              error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
          });
    });
    $('#fileInputC2').on('change', function() {
     // e.preventDefault();

          var formData = new FormData();
          formData.append('formData', $('#fileInputC2')[0].files[0]);
          formData.append('slug','fileInputC2.jpg')

          console.log(formData); // Mueve esta línea aquí

          $.ajax({
              url: "index.php/add-img",
              method: "POST",
              data: formData,
              processData: false,
              contentType: false,
              success: function(response) {
                  console.log(response);
                 window.location.reload();
              },
              error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
          });
    });
    $('#fileInputC3').on('change', function() {
     // e.preventDefault();

          var formData = new FormData();
          formData.append('formData', $('#fileInputC3')[0].files[0]);
          formData.append('slug','fileInputC3.jpg');

          console.log(formData); // Mueve esta línea aquí

          $.ajax({
              url: "index.php/add-img",
              method: "POST",
              data: formData,
              processData: false,
              contentType: false,
              success: function(response) {
                  console.log(response);
                 window.location.reload();
              },
              error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
          });
    });
});

    </script>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>