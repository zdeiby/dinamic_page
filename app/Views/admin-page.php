
<!DOCTYPE html>
<html>
<head>
  <title>Noticias</title>
  <style>
    .scrollable-container {
      max-height: 500px;
      overflow-y: auto;
    }

    .foto {
      border-radius: 5px;
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




    .hover-container {
  position: relative;
  display: inline-block;
}

.image-container {
  position: relative;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* Cambia el color de fondo a transparente */
  opacity: 0;
  transition: opacity 0.3s;
  pointer-events: none; 
}

.overlay-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 16px;
  
}

.image-container:hover .overlay {
  opacity: 1;
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
</head>
<body>
    
  <div class="container " style='padding-top:125px'>

  <!--<img src="https://www.unidadfamiliamedellin.com.co/unidadfamiliamedellin/resources/img/head.png" width="100%" height="100"  class='pb-2'> -->
    <div class="row hover-container">
        <div class="col image-container upload-button position-relative">
            <img class="" width="100%" height="350px" src="<?php echo base_url('uploads/nuevaPagina1.jpg'); ?>" alt="Imagen"/>
            <input type="file" id="nuevaPagina1" >
            <div class="overlay">
                <p class="overlay-text">Click para cambiar imagen</p>
            </div>
        </div>
    </div>
  
    <div class="row text-center pt-4 pb-4">
        <label for="" contenteditable='<?php echo $tof; ?>' id="titulonew"> <?php echo $home[5]['titulo']?> </label>
    </div>
    <div class="row text-center pb-4">
        <label for="" contenteditable='<?php echo $tof; ?>' id="textonew"> <?php echo $home[5]['texto']?> </label>
    </div>
    <div class="col text-center pb-3">
    <?php if( $tof==='true') { 
      echo '<form>
      <button class="btn btn-primary actualizarnew"  style="background:#00B0F6 !important">Guardar</button>
      </form>';
    }
    ?>
    </div>

  </div>

  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
     $('#nuevaPagina1').on('change', function() {
     // e.preventDefault();

          var formData = new FormData();
          formData.append('formData', $('#nuevaPagina1')[0].files[0]);
          formData.append('slug','nuevaPagina1.jpg')

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
    $('.actualizarnew').click(function(){
       let titulonew= $('#titulonew').text();
       let textonew= $('#textonew').text();
       
       
       $.ajax({
        url:"adminedit",
        method: "POST",
        data: {
            titulonew:titulonew,
            textonew:textonew
        },
        success:function(response){
          console.log(response)
         
        }
      })

      })



</script>

</body>
</html>
