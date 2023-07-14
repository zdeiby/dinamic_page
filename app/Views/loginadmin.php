<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 
<style>
body {
    background: url("https://pbs.twimg.com/media/Ecmr0oVWoAYxKUc.jpg") no-repeat center center fixed;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
}

.color {
    background: white;
    font-size: 16px;
    padding-top: 14px;
    padding-bottom: 14px;
    color: #468847;
}

.log {
    background: white;
    border-radius: 12px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.img-fill {
    object-fit: cover;
    height: 100%;
    border-radius: 12px;
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

</style>
    <title>Document</title>
</head>
<body>

<div class="container log pb-3 pt-3">
    <div class="row">
        <div class="col-md-6 upload-button position-relative">
            <img  class="img-fluid img-fill" src="<?php echo base_url('uploads/login.jpg'); ?>" alt="">
        <input type="file" id="fileInput2">
    </div>
        <div class="col-md-6 text-center">
            <div class="container well form-group pt-4 pb-4" style="background: white; border-radius: 2%; border: 1px solid #e3e3e3;">
                <div class="text-center pb-3" style="border-radius: 2%;">
                    <div class="panel-heading">
                    </div>

                    
                    <div class="panel-body">
                        <img width="50%" src="<?php echo base_url('uploads/logo.png'); ?>" alt="">
                    </div>
                </div>

                <div class="form-group mt-3 mb-4">
                <label class="pb-2" for=""><b>Usuario</b></label>

                    <input id="documento" name="documento" type="text" class="form-control" placeholder="Digite su usuario" />
                </div>
                <div class="form-group">
                <label class="pb-2" for=""><b>Contraseña</b></label>

                    <input id="contrasena" name="contrasena" type="password" class="form-control" placeholder="Digite su Contraseña" />
                </div>
                <div class="text-center">
                    <br />
                    <button name="enviar" id="enviar" class="btn w-100" style="color: white; background-color: #00B0F6;">Ingresar</button>
                   <!-- <label class="pt-2" for="">¿Ha olvidado la contraseña?</label> -->
                  <a href="../../ufm/index.php"> <button name="enviar" id="enviar" class="btn mt-4" style="color: white; background-color: #00B0F6;">Volver</button></a> 

                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<script>$('#fileInput2').on('change', function() {  //para cargar imagenes del banner superior
     // e.preventDefault();

          var formData = new FormData();
          formData.append('formData', $('#fileInput2')[0].files[0]);
          formData.append('slug','login.jpg');

          console.log(formData); // Mueve esta línea aquí

          $.ajax({
              url: "add-img",
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

$('#enviar').click(function(){
  let documento= $('#documento').val();
  let contrasena=$('#contrasena').val();
    console.log(documento, contrasena);

    $.ajax({
        url:'sendinfo',
        method: "POST",
        data:{
            documento:documento,
            contrasena:contrasena
        },
        success:function(response){
           if(response =="success"){
            window.location.href="../../../ufm/index.php";
                
           }

        },
        error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
    })
})

    </script>


</body>
</html>
