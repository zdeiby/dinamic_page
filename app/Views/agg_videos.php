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
    <title>Document</title>
</head>
<body>

<div class="container pb-4 text-center" style="padding-top:130px">
    <div class="row">
        <div class="col">
            <form method="">
                <label for="" class="pb-4 pt-4">Agregar Url de video</label>
                <input required class="form-control" type="text" name="url" id="url" value=''>   
                <label for="" class="pb-4 pt-4">Agregar titulo del video</label>
                <input required  class="form-control" type="text" name="titulo" id="titulo">
                <button type="submit" class="btn btn-success btn-color mt-3">Enviar Video</button>
            </form>
        </div>
        <div class="col">
            <iframe id='urlActualizado' width="80%" height="250" src="" title="Python en una hora para principiantes!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <textarea style="border: none; text-align: center; font-size:18px;" readonly id="tituloActualizado" cols="auto" rows="2">titulo </textarea >
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

  
  var url = document.getElementById('url');
  var urlActualizado = document.getElementById('urlActualizado');
  
  url.addEventListener('input', function() {
    var valor =url.value;


// Leer la cadena desde alguna fuente (por ejemplo, entrada del usuario)

// Comprobar si la cadena comienza con "v=" y contiene "?" o "&"
if (valor.includes("v=") && (valor.includes("?") || valor.includes("&"))) {
  // Obtener el índice del carácter después de "v="
  var startIndex = valor.indexOf("v=") + 2;

  // Obtener el índice del carácter de terminación ("?" o "&")
  var endIndex = valor.indexOf("&", startIndex);

  if (endIndex === -1) {
    endIndex = valor.indexOf("?", startIndex);
  }

  // Obtener la subcadena entre "v=" y el carácter de terminación
  var subcadena = valor.substring(startIndex, endIndex !== -1 ? endIndex : valor.length);

  console.log("La cadena cumple con los criterios especificados.", subcadena);
  urlActualizado.setAttribute('src',`https://www.youtube.com/embed/${subcadena}`);
  url.value=subcadena;

} else {
  console.log("La cadena no cumple con los criterios especificados.");
}

  });

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    
</body>
</html>