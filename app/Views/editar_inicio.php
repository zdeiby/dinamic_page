<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .img2{
            height: 300px !important;
            border-radius:2%  !important;
            width: 250px;
}
    </style>
</head>
<body>
<div class="container pb-3 text-center" style='padding-top:129px'>
   
    <div class="row">
        <div class="col">
            <form method="">
                <label for=""> <b >Ingrese imagenes</b></label><br>
                <label for="" class="mt-4">Ingrese la URL de la primera imagen</label>
                <input type="text" name="" id="url1" class="form-control mt-2">
                <label for="" class="mt-4">Ingrese la URL de la segunda imagen</label>
                <input type="text" name="" id="url2" class="form-control mt-2">
                <label for="" class="mt-4">Ingrese la URL de la tercera imagen</label>
                <input type="text" name="" id="url3" class="form-control mt-2">


                <label for="" class="mt-4"><b>Inserte el titulo</b></label>
                <input type="text" name="" id="titulo" class="form-control mt-4">
                <label for="" class="mt-4"><b>Inserte el texto</b></label>
                <textarea type="text" name="" id="texto" class="form-control mt-4"></textarea>

                <label for="" class="pt-4 pb-4">Inserte las imagenes para el segundo banner</label><br>
                <label for=""> <b >Ingrese imagenes</b></label><br>
                <label for="" class="mt-4">Ingrese la URL de la primera imagen</label>
                <input type="text" name="" id="url12" class="form-control mt-2">
                <label for="" class="mt-4">Ingrese la URL de la segunda imagen</label>
                <input type="text" name="" id="url22" class="form-control mt-2">
                <label for="" class="mt-4">Ingrese la URL de la tercera imagen</label>
                <input type="text" name="" id="url32" class="form-control mt-2">
                <button type="submit" style="background:#00B0F6 !important" class="btn btn-success btn-color mt-3">Guardar Cambios</button>
            </form>

        <!-- SEGUNDA PARTE -->
        </div> 
        
        <div class="col"><b>vista del inicio</b>
 
            <div id="carouselExampleControls" class="carousel slide mt-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img id="img1" src="https://img.freepik.com/foto-gratis/resumen-superficie-texturas-muro-piedra-hormigon-blanco_74190-8189.jpg" style='height:300px !important' class="d-block w-100 imagen " alt="..." style=' border-radius:5%'>
                    </div>
                <div class="carousel-item">
                    <img id="img2" src="https://img.freepik.com/foto-gratis/resumen-superficie-texturas-muro-piedra-hormigon-blanco_74190-8189.jpg" style='height:300px !important' class="d-block w-100 imagen " alt="..." style=' border-radius:5%'>
                    </div>
                        <div class="carousel-item">
                        <img id="img3" src="https://img.freepik.com/foto-gratis/resumen-superficie-texturas-muro-piedra-hormigon-blanco_74190-8189.jpg" style='height:300px !important' class="d-block w-100 imagen " alt="..." style=' border-radius:5%'>
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
              <!-- SEGUNDO BANNER-->
              <div class="container pt-4 text-center pb-4" >
                <textarea class='pb-4' id='tituloActualizado' style="color:#00B0F6 ;border: none; text-align: center; font-size:18px;" cols="55" readonly > ¿Quienes somos?</textarea>
                <div class="row" > 
                    <div class='col'>
                    <div class="container pt-4" >
                    <textarea style="border: none; font-size:18px;" id='textoActualizado'  class="form-control" readonly  rows="12">Somos una Unidad que pertenece a la Secretaría de Inclusión Social, Familia y Derechos Humanos de la Alcaldía de Medellín. Buscamos mejorar la calidad de vida de las familias de Medellín y fortalecerlas como grupo fundamental de formación de seres humanos. Además impulsamos la corresponsabilidad y la participación activa de la familia en la gestión de su propio desarrollo. Nuestro trabajo está direccionado por la Política Pública para la Familia de Medellín aprobada por el acuerdo 054 de 2011 del Concejo de Medellín.
                </textarea >
                    </div>
                    </div>
                    <div class='col'>
                    <div id="carouselExampleControls1" class="carousel slide mt-4" data-bs-ride="carousel">
                            <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img id="img12" src="https://img.freepik.com/foto-gratis/resumen-superficie-texturas-muro-piedra-hormigon-blanco_74190-8189.jpg" style='height:300px !important' class="d-block  imagen img2 " alt="..." style=' border-radius:5%'>
                        </div>
                    <div class="carousel-item">
                    <img id="img22" src="https://img.freepik.com/foto-gratis/resumen-superficie-texturas-muro-piedra-hormigon-blanco_74190-8189.jpg" style='height:300px !important' class="d-block  imagen img2" alt="..." style=' border-radius:5%'>
                    </div>
                    <div class="carousel-item">
                    <img id="img32" src="https://img.freepik.com/foto-gratis/resumen-superficie-texturas-muro-piedra-hormigon-blanco_74190-8189.jpg" style='height:300px !important' class="d-block  imagen img2" alt="..." style=' border-radius:5%'>
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
                    <!-- <img width="80%"src="https://cdnwordpresstest-f0ekdgevcngegudb.z01.azurefd.net/es/wp-content/uploads/2022/09/unidad-familia-4.jpg" alt=""> -->
                    </div>
                    <div class="row">
                    </div>
                </div>
                </div>
                </div>
        </div>
    </div>
</div>
    
<script>
  var url1 = document.getElementById('url1');
  var img1 = document.getElementById('img1');
  
  url1.addEventListener('input', function() {
    var valor =url1.value;
    img1.setAttribute('src', valor);
  //  console.log(valor);
  });

  var url2 = document.getElementById('url2');
  var img2 = document.getElementById('img2');
  
  url2.addEventListener('input', function() {
    var valor =url2.value;
    img2.setAttribute('src', valor);
  
  });

  var url3 = document.getElementById('url3');
  var img3 = document.getElementById('img3');
  
  url3.addEventListener('input', function() {
    var valor =url3.value;
    img3.setAttribute('src', valor);
   // console.log(valor);
  });

  // segundo banner

  var url12 = document.getElementById('url12');
  var img12 = document.getElementById('img12');
  
  url12.addEventListener('input', function() {
    var valor =url12.value;
    img12.setAttribute('src', valor);

  });

  var url22 = document.getElementById('url22');
  var img22 = document.getElementById('img22');
  
  url22.addEventListener('input', function() {
    var valor =url22.value;
    img22.setAttribute('src', valor);

  });

  var url32 = document.getElementById('url32');
  var img32 = document.getElementById('img32');
  
  url32.addEventListener('input', function() {
    var valor =url32.value;
    img32.setAttribute('src', valor);
   // console.log(valor);
  });

  //fin del segundo banner

  // titulo 

  var titulo = document.getElementById('titulo');
  var tituloActualizado = document.getElementById('tituloActualizado');
  
  titulo.addEventListener('input', function() {
    var valor =titulo.value;
    tituloActualizado.textContent = valor;
  //  console.log(valor);
  });

  var texto = document.getElementById('texto');
  var textoActualizado = document.getElementById('textoActualizado');
  
  texto.addEventListener('input', function() {
    var valor =texto.value;
    textoActualizado.textContent = valor;
    //console.log(valor);
  });



</script>>

</body>
</html>