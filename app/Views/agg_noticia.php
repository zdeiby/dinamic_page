<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .btn-color{
            background:#00B0F6 !important;
        }
    </style>
    <title>Document </title>
</head>
<body>

<div class="container pb-4 text-center" style="padding-top:130px">
    <div class="row">
        <div class="col">
            <form method="">
                <label for="" class="pb-4 pt-4">Agregar Url de imagen</label>
                <input required class="form-control" type="text" name="url" id="url">   
                <label for="" class="pb-4 pt-4">Agregar titulo</label>
                <input required  class="form-control" type="text" name="titulo" id="titulo">
                <label for="" class="pb-4 pt-4">Agregar Texto</label>
                <textarea required class="form-control pt-4" name="texto" id="texto"></textarea>
                <button type="submit" class="btn btn-success btn-color mt-3">Enviar noticia</button>
            </form>
        </div>
        <div class="col" >
            <img id='urlActualizado' class="pb-2" width="80%" src="https://img.freepik.com/foto-gratis/resumen-superficie-texturas-muro-piedra-hormigon-blanco_74190-8189.jpg"/>
            <textarea style="border: none; text-align: center; font-size:18px;" readonly id="tituloActualizado" cols="auto" rows="2">titulo </textarea >

            <textarea style="border: none;" readonly id="textoActualizado" name="" id="" cols="auto" rows="10">Texto de la noticia</textarea>
        </div>
    </div>
</div>

   
<script>
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

  var url = document.getElementById('url');
  var urlActualizado = document.getElementById('urlActualizado');
  
  url.addEventListener('input', function() {
    var valor =url.value;
    urlActualizado.setAttribute('src', valor);
   // console.log(valor);
  });

</script>>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    
</body>
</html>