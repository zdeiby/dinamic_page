

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    </style>
</head>
<body>
<div class="container text-center mt-4 mb-4" style='padding-top:149px'>
    <h5 class='mb-4 elemento-lectura' id="titulo1" contenteditable='<?php echo $tof; ?>'><?php echo $home[2]['titulo']?></h5>
    <label class='mb-4 elemento-lectura' id="texto1" contenteditable='<?php echo $tof; ?>'><?php echo $home[2]['texto']?></label>
         <h5 class='mb-4 elemento-lectura' id="titulo2" contenteditable='<?php echo $tof; ?>'><?php echo $home[3]['titulo']?></h5>
    <label class='mb-4 elemento-lectura' id="texto2" contenteditable='<?php echo $tof; ?>'><?php echo $home[3]['texto']?></label>
         <div class="upload-button position-relative">
         <img width='100%' src="<?php echo base_url('uploads/imgUFM.jpg'); ?>" alt="">
         <input type="file" id="fileInput1" >
        </div>
         <h5 class='mb-4 elemento-lectura' id="titulo3" contenteditable='<?php echo $tof; ?>'><?php echo $home[4]['titulo']?></h5>
    <label class='mb-4 elemento-lectura' id="texto3" contenteditable='<?php echo $tof; ?>'><?php echo $home[4]['texto']?></label>
    
</div>
<div class="col text-center pb-3 ">
    <?php if( $tof==='true') { 
      echo '
  
      <button class="btn btn-primary actualizar2 mb-4" style="background:#00B0F6 !important">Guardar</button>
         ';
    }
    ?>
</div>
<script>

$(document).ready(function() {
    $('#fileInput1').on('change', function() {  //para cargar imagenes del banner superior
     // e.preventDefault();

          var formData = new FormData();
          formData.append('formData', $('#fileInput1')[0].files[0]);
          formData.append('slug','imgUFM.jpg');

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
});



     $('.actualizar2').click(function(){
       let titulo1= $('#titulo1').text();
       let texto1= $('#texto1').text();
       let titulo2= $('#titulo2').text();
       let texto2= $('#texto2').text();
       let titulo3= $('#titulo3').text();
       let texto3= $('#texto3').text();
       
       
       $.ajax({
        url:"ufmedit",
        method: "POST",
        data: {
            titulo1:titulo1,
            texto1:texto1,
            titulo2:titulo2,
            texto2:texto2,
            titulo3:titulo3,
            texto3:texto3
        },
        success:function(response){
          console.log(response)
          location.reload();
        }
      })

      })
      
      
</script>
</body>
</html>