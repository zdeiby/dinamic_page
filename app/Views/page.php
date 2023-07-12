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
      <div class="col-sm-8">
        <label class="mb-3 elemento-lectura">ÚLTIMAS NOTICIAS</label>
        <img class="pb-2" width="100%" src=" <?php echo $noticias['url'] ?>"/>
        <label class="pb-3 elemento-lectura"><b>Creada por:</b> nombre  <?php echo $noticias['created_at'] ?></label>
        <h5 class="text-center pb-3 elemento-lectura"><?php echo $noticias['titulo'] ?> </h5>
        <p class=" elemento-lectura">
        <?php echo $noticias['texto'] ?>
        </p>
      </div>
      <div class="col">
        <div class="row">
          <div class="col elemento-lectura"><label>Otras Noticias</label></div>
          <div class="col text-primary elemento-lectura"><a href="../mas-noticias"><label><b style='color:#00B0F6'>Ver todas las noticias</b></label></a></div>
        </div>
        <div class="scrollable-container pt-3 elemento-lectura">
          <?php $arreglo=array_reverse($noti);
           $primerElemento = true; 
           
           foreach($arreglo as $noticia){
            if ($primerElemento) {
              $primerElemento = false;
              continue;
          } ?>
          <div class="select" data-datos='<?php echo json_encode($noticia); ?>'>
          <label class="pb-3"><b><?=$noticia['titulo']?> </b></label>
          <img class="foto pb-3" width="90%" src="<?=$noticia['url']?>"/>
          <p class="parrafo"><?= substr($noticia['texto'], 0,100)?>...</p>
        </div>
      <?php } ?>
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
