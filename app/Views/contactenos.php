

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document</title>
    <style>
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
    .delete{
        cursor: pointer;
    }

    </style>
</head>
<body>
<div class="container text-center" style="padding-top: 149px">
    <div class="container text-center">
        <button class="btn btn-primary" style="background:#00B0F6; border:none;" data-toggle="modal" data-target="#exampleModal">Agregar nueva sede</button>
    </div>

    <!-- MODAL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Punto de atención</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> 
     <form method=""> 
                <div class="modal-body">
                    <label>Ingresa el barrio</label>
                    <input type="text" class="form-control" name="barrio" id="url">
                    <label>Ingresa la dirección</label>
                    <input type="text" class="form-control" name="direccion" id="url">
                </div>
                <form method=""> 
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary cerrar" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary save" style="background:#00B0F6 !important">Save changes</button>
                </div>
</form > 
    </form>
            </div>
        </div>
    </div>
    <!-- END MODAL -->

    <h5 class="text-center pt-3 pb-3 elemento-lectura" id="titulo">PUNTOS DE ATENCIÓN</h5>
    <table class="table text-center">
        <thead></thead>
        <tbody>
            <?php foreach ($direcciones as $direccion) { ?>
            <tr class="<?php echo $direccion['id'] ?>">
                <td class="elemento-lectura " ><?php echo $direccion['barrio'] ?> - <?php echo $direccion['direccion'] ?></td><td class="delete" data-direccion='<?php echo json_encode($direccion); ?>'><?php echo($tof =="true")?'x':''?></td>
            </tr>
            <?php } ?>
            
        </tbody>
    </table>
</div>

<div class="col">
<div class="upload-button position-relative">
         <img width='100%' src="<?php echo base_url('uploads/imgContactenos.jpg'); ?>" alt="">
         <input type="file" id="fileInput1" >
        </div>
</div>
</div>
<div class="col text-center pb-3 ">
    <?php if( $tof==='true') { 
      echo '
        <form>
      <button class="btn btn-primary actualizar2 mb-4 mt-4" style="background:#00B0F6 !important">Guardar</button>
       </form>';
    }
    ?>
</div>
<script>
         $('#fileInput1').on('change', function() {  //para cargar imagenes del banner superior
     // e.preventDefault();

          var formData = new FormData();
          formData.append('formData', $('#fileInput1')[0].files[0]);
          formData.append('slug','imgContactenos.jpg');

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


    $(".delete").click(function() {
    let noticia = $(this).data('direccion');
    let id = noticia.id;
 if($(this).text() =="x"){
     $.ajax({
         url: "contactenosdelete",
         method: "POST",
         data: { id: id },
         success: function(response) {
             $(`.${id}`).hide(); // Ocultar el botón
            console.log(response)
       
         },
         error: function(xhr, status, error) {
             // Manejar errores en la petición AJAX
           //  console.log(xhr.responseText);
         }
     });
    }
});


</script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>