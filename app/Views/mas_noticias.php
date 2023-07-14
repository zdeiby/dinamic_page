<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>

    .scrollable-container {
        max-height: 500px;
        overflow-y: auto;
    }

    .foto {
        border-radius: 5px;
    }
    .notice{
      
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-content: stretch;
        justify-content: space-between;
        align-items: center;
        border: 2px solid #00B0F6; 
        border-radius:10px;
        background:#00B0F6;
        color:white;
    }
    .notice:hover{
        border: 2px solid #008CC3; 
        background:#008CC3;
    }
    .notice{
        cursor: pointer;
    }
   .editar{
    background:#008CC3 !important;
    border:1px solid white !important;
   }
   .editar:hover{
    background:#00B0F6 !important;
    border:1px solid white !important;
   }

   
</style>
</head>
<body>
<div class="show"></div>
<div class="container pb-3 text-center" style='padding-top:129px'>
<h5 class="pt-2 pb-4 elemento-lectura">Todas paginas</h5>
<?php foreach($noticias as $noticia) { ?>
    <div class="row divNoticia pb-2 elemento-lectura" >
        <div class='col notice <?php echo $noticia["id"]?>' data-nu='<?php echo json_encode($noticia); ?>'> 
            <img width="20%" src="<?php echo $noticia['url'] ?>" class="foto" alt="" />
            <p><b><?php echo $noticia['titulo'] ?></b></p>
                        <p> <b>Fecha: </b><?php echo $noticia['created_at'] ?></p>
                        <div class=''>
                        <button  class="btn btn-success editar" data-noticia='<?php echo json_encode($noticia); ?>' data-toggle="modal" data-target="#exampleModal">Editar</button>
                        <button type="submit" data-id='<?php echo json_encode($noticia); ?>'  id="<?php echo $noticia['id']?>  "class="eliminar btn btn-danger">x</button>
                    </div>
        </div>
    </div>

   <?php } ?> 
</div>
<div class="result"></div>

<!-- Modal -->

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
//abrir noticia
$(".notice").click(function(event){
    if ($(event.target).closest("button").length === 0) {
        let noticiaU = $(this).data('nu');
        let slug = noticiaU.slug;
      //  console.log(slug);
        window.location.href = `noticias/${slug}`;
    }
});

//ELIMINAR    
$(".eliminar").click(function() {
    let noticia = $(this).data('id');
    let id = noticia.id;
   
    $.ajax({
        url: "mi-controlador/mi-metodo",
        method: "POST",
        data: { id: id },
        success: function(response) {
            $(`.${id}`).hide(); // Ocultar el botón
           
            
        },
        error: function(xhr, status, error) {
            // Manejar errores en la petición AJAX
          //  console.log(xhr.responseText);
        }
    });
});


       

        $(".eliminar").hover(  //hover en jquery
            function() {
                $(this).css({"color":"red","font-size":"20px", "cursor": "pointer"});
            },
            function() {
                $(this).css({"color":"","font-size":""}); // Restaurar el color original
            }
        );

    $(".editar").click(function() {
    let noticia = $(this).data("noticia");
    console.log(noticia)
    let id = noticia.id;
    let url = noticia.url;
    let titulo = noticia.titulo;
    let contenido = noticia.texto;
   // console.log(contenido)

    $('.show').html(`
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label>ID</label>
                            <input type="text" value="${id}" class="form-control" name="id" id="" readonly>
                            <label>Imagen URL</label>
                            <input type="text" class="form-control" name="url" id="" value="${url}">
                            <label>Titulo</label>
                            <input type="text" class="form-control" name="titulo" id="" value="${titulo}">
                            <label>Contenido</label>
                            <textarea type="text" class="form-control" name="texto" id="">${contenido}</textarea>
                            <input type="text" class="form-control" name="prueba" id="">

                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary cerrar" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    `);
});
   

</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

