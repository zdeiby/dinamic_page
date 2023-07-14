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
        <h5 class="text-center pb-3 elemento-lectura"><?php echo $value->titulo ?> </h5>
        <p class=" elemento-lectura">
        <?php echo $value->texto ?>
        </p>
      </div>
      
       
           
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
          <img class="foto pb-3" width="90%" src="<?php echo $value->url ?>"/>
          <p class="parrafo"><?php echo $value->texto ?> </p>
        </div>
    <?php   
      }
    ?>
          </div>
        </div>
    
    </div>
  </div> 
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
