<!DOCTYPE html>
<html>
<head>
  <title>Noticias</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
  </style>
</head>
<body>
    
  <div class="container " style='padding-top:105px'>
  <img src="https://www.unidadfamiliamedellin.com.co/unidadfamiliamedellin/resources/img/head.png" width="100%" height="100"  class='pb-2'>
    <div class="row"> 
        
    <?php foreach ($home as $value) { 
        if($url == $value->slug){ ?>
      <div class="col-sm-8"> 

     <img class="pb-2" width="100%" src="<?php echo $value->url ?>"/>
        <label class="pb-3 elemento-lectura"></label>
        <h5 class="text-center pb-3 elemento-lectura" ><?php echo $value->titulo ?> </h5>
        <p class=" elemento-lectura" >
        <?php echo $value->texto ?>
        </p>
        <div class="text-center pb-4 pt-4">
        <button style="background:#00B0F6; border:none;" type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
          Editar
        </button>
      </div>  
      </div>
      
      <!-- MODAL PARA EDITAR -->

  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form>
      <div class="modal-body">
        
            <input type="text" style="display:none" name="id" value="<?php echo $value->id_textos?>">
            <label>Imagen URL</label>
            <input type="text" class="form-control" name="url" id="url" value="<?php echo $value->url?>">
            <label>Titulo</label>
            <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $value->titulo?>">
            <label>Texto</label>
            <input type="text" class="form-control" name="texto" id="texto" value="<?php echo $value->texto?>">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
    </div>
  </div>
</div>

      <!-- FIN MODAL PARA EDITAR -->
       
           
     <?php   
      }
    }
    ?>
<div class="col">
        <div class="row"><div class="col elemento-lectura"><label><b style='color:#00B0F6'></b></label></div>  </div>
          <div class="col text-primary elemento-lectura"><label><b style='color:#00B0F6'>Otras vistas</b></label></div>
         <div class="scrollable-container pt-3 elemento-lectura">
            <?php foreach ($home as $value) { ?>
          <div class="select" data-datos='<?php echo json_encode($value); ?>'>
          <label class="pb-3"><b><?php echo $value->titulo ?></b></label>
          <img class="foto pb-3" width="100%" src="<?php echo $value->url ?>"/>
          <p class="parrafo"><?php echo substr($value->texto, 0,100) ?> </p>
        </div>
    <?php   
      }
    ?>
          </div>
        </div>
    
    </div>
  </div> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
     $(".select").click(function(){
         let noticia=$(this).data('datos');
        // console.log(noticia)
         window.location.href = `${noticia.slug}` ;

     })
</script>
</body>
</html>
