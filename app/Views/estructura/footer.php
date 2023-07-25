<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   
<footer class="footer " style='background:#00B0F6'>
    <div class="container  elemento-lectura text-center">
        <div class="addmodulos">
            <label class=" pt-2" for="" style="color:white">Agregar modulos</label>
            <div class="col"> <input type="checkbox"  id="modulo1" <?php  echo($datosfooter[0]['val1']=='true')?'checked':''  ?>> 
                <input type="checkbox" name="2" id="modulo2" <?php  echo($datosfooter[0]['val2']=='true')?'checked':''  ?>> 
                <input type="checkbox" name="3" id="modulo3" <?php  echo($datosfooter[0]['val3']=='true')?'checked':''  ?>>
            </div>
            <button id="guardar" class="mb-4 btn btn-light" style="background: #00B0F6 !important; color:white">Guardar</button>
        </div>
        <div class="row">
            <div class="col text-light modulo1 "  style="display:none">
            <h5 id="m1titulo" contenteditable="true" class="mb-4"><?php echo $datosfooter[1]['val1']?></h5>
           <p id="m1texto1" contenteditable="true"><?php echo $datosfooter[1]['val2']?></p>
           <p id="m1texto2" contenteditable="true"  class="mb-4"><?php echo $datosfooter[1]['val3']?></p>
           <button id="guardarm1" class="mb-4 btn btn-light" style="background: #00B0F6 !important; color:white">Guardar</button>

            </div>
            <div class="col text-light modulo2 "  style="display:none">
            <h5 id="m2titulo" contenteditable="true" class="mb-4"><?php echo $datosfooter[2]['val1']?></h5>
           <p id="m2texto1" contenteditable="true"><?php echo $datosfooter[2]['val2']?></p>
           <p id="m2texto2" contenteditable="true"  class="mb-4"><?php echo $datosfooter[2]['val3']?></p>
           <button id="guardarm2" class="mb-4 btn btn-light" style="background: #00B0F6 !important; color:white">Guardar</button>

            </div>
            
            <div class="col text-light modulo3 "  style="display:none">
            <h5 id="m3titulo" contenteditable="true" class="mb-4"><?php echo $datosfooter[3]['val1']?></h5>
           <p id="m3texto1" contenteditable="true"><?php echo $datosfooter[3]['val2']?></p>
           <p id="m3texto2" contenteditable="true"  class="mb-4"><?php echo $datosfooter[3]['val3']?></p>
           <button id="guardarm3" class="mb-4 btn btn-light" style="background: #00B0F6 !important; color:white">Guardar</button>

            </div>
        </div>
    </div>
</footer>
    <script>


        $('#guardarm1').click(function(){
            let m1titulo=$('#m1titulo').text();
            let m1texto1=$('#m1texto1').text();
            let m1texto2=$('#m1texto2').text();

            console.log(m1texto1,m1titulo,m1texto2)
            
            $.ajax({
                   url: "../../../../../ufm/index.php/addm1",
                   method: "POST",
                   data:{
                    m1titulo:m1titulo,
                    m1texto1:m1texto1,
                    m1texto2:m1texto2,
                         },
                   success: function(response) {
                 //  console.log(response)
                //  location.reload();
                   },
                   error: function(xhr, status, error) {
                       // Manejar errores en la petición AJAX
                     //  console.log(xhr.responseText);      
                   }
  });
        })
        $('#guardarm2').click(function(){
            let m2titulo=$('#m2titulo').text();
            let m2texto1=$('#m2texto1').text();
            let m2texto2=$('#m2texto2').text();

            console.log(m2texto1,m2titulo,m2texto2)
            $.ajax({
                   url: "../../../../../ufm/index.php/addm2",
                   method: "POST",
                   data:{
                    m2titulo:m2titulo,
                    m2texto1:m2texto1,
                    m2texto2:m2texto2,
                         },
                   success: function(response) {
                 //  console.log(response)
                //  location.reload();
                   },
                   error: function(xhr, status, error) {
                       // Manejar errores en la petición AJAX
                     //  console.log(xhr.responseText);      
                   }
  });
        })
        $('#guardarm3').click(function(){
            let m3titulo=$('#m3titulo').text();
            let m3texto1=$('#m3texto1').text();
            let m3texto2=$('#m3texto2').text();

            console.log(m3texto1,m3titulo,m3texto2)
            $.ajax({
                   url: "../../../../../ufm/index.php/addm3",
                   method: "POST",
                   data:{
                    m3titulo:m3titulo,
                    m3texto1:m3texto1,
                    m3texto2:m3texto2,
                         },
                   success: function(response) {
                 //  console.log(response)
                //  location.reload();
                   },
                   error: function(xhr, status, error) {
                       // Manejar errores en la petición AJAX
                     //  console.log(xhr.responseText);      
                   }
  });
        })


        $(document).ready(function() {
            let val1 = $('#modulo1').prop('checked') ? 'true' : 'false';
            let val2 = $('#modulo2').prop('checked') ? 'true' : 'false';
            let val3 = $('#modulo3').prop('checked') ? 'true' : 'false';
           if(val1 == 'true'){
            $('.modulo1').css('display', '');
           }
           if(val1 == 'false'){
            $('.modulo1').css('display', 'none');
           }
           if(val2 == 'true'){
            $('.modulo2').css('display', '');
           }
           if(val2 == 'false'){
            $('.modulo2').css('display', 'none');
           }
           if(val3 == 'true'){
            $('.modulo3').css('display', '');
           }
           if(val3 == 'false'){
            $('.modulo3').css('display', 'none');
           }
        })
           

           $('#guardar').click(function(){ 
            
            let val1 = $('#modulo1').prop('checked') ? 'true' : 'false';
            let val2 = $('#modulo2').prop('checked') ? 'true' : 'false';
            let val3 = $('#modulo3').prop('checked') ? 'true' : 'false';
          
            $.ajax({
                   url: "../../../../../ufm/index.php/addfooter",
                   method: "POST",
                   data:{val1:val1,
                    val2:val2,
                    val3:val3
                         },
                   success: function(response) {
                 //  console.log(response)
                  location.reload();
                   },
                   error: function(xhr, status, error) {
                       // Manejar errores en la petición AJAX
                     //  console.log(xhr.responseText);      
                   }
  });
           })


     
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>