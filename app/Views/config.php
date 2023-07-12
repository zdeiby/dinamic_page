<?php 
$nombre=' ';
try{
  $nombre=$datosNav['nombre'];
}catch (Exception){

}
?>
<?php if($nombre !=' '){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .flex{
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-between;
            align-items: baseline;
            /* align-content: center; */
            flex-wrap: nowrap;
            
        }
        .form-check-input {
       
        width: 1.2em !important;
        height: 1.2em !important;
       
}
.list-group-item:hover{
    background:#00B0F6; !important;
    color:white  !important;
    cursor: pointer;
}
    </style>
</head>
<body>
<div class="container pb-4 text-center" style="padding-top:130px">

<div class="row">

<div class="col-auto ">
      
        <ul class="list-group ">
        <li value="0" id="datos" class='list-group-item  text-dark ' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Datos Personales&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
        <li value="0" id="menu" class='list-group-item  text-dark  ' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agregar Menu borrados&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
          <li value="10" class='list-group-item  text-dark'  id="cerrarSeccion2" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;salir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
         <!-- <li value="20" class='list-group-item  text-dark  ' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;30%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
          <li value="30" class='list-group-item  text-dark  ' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;40%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
          <li value="40" class='list-group-item  text-dark  ' > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;50%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
          <li value="50" class='list-group-item  text-dark  ' > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;60%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
          <li value="60" class='list-group-item  text-dark  '> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;70%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
          <li value="70" class='list-group-item  text-dark  ' > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;80%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
          <li value="80" class='list-group-item  text-dark  mb-2 '> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;90%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></li>
-->
          
        </ul>
        
</div>

<div class="col bodyDatos">
    <h5>Información</h5>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Deiby</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Cedula</th>
      <td>1035283403</td>
    </tr>
   
  </tbody>
</table>
    </div>

    <div class="col addNav">

    </div>  
</div>     
</div>
</div>



<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<script>
    $('#datos').click(function(){
        $('.bodyDatos').show();
        $('.addNav').hide();
    })
    $('#menu').click(function(){
        $('.bodyDatos').hide();
        var container = $(".addNav");

// Verifica si el contenido ya existe antes de insertarlo
if (!container.html().includes("Agregar menu borrados")) {
  container.append(`
<label class="pt-3" style="font-size:20px"> Agregar menu borrados</label>
<form>
    <ul class="navbar-nav ">
                <li class="nav-item dropdown " onmouseover="showSubMenu(this)" >
               
                    <div class="flex">

                       <b class="" style=""> <input type="checkbox" class="form-check-input" name="" id="radio"></b>
                       <label class="nav-link dropdown " id="navbarDropdown" role="button" data-bs="dropdown" aria-expanded="false" >
                             Inicio
                       </label>
                    </div>
                   
                        <ul class="dropdown-menu submenu text-center " aria-labelledby="navbarDropdown"> 
                       
                            <li> <div class="flex"><b class=" " style=""> <input type="checkbox" class="form-check-input" name="" id="radio"></b>inicio  </div>  </li>
                           <li><div class="flex"><b class=" " style=""> <input type="checkbox" class="form-check-input" name="" id="radio"></b>Modificar  </div>  </li>
                     
                    </ul>
                    
                </li>
                <li class="nav-item dropdown " onmouseover="showSubMenu(this)" >
                <div class="flex">
                    <b class="delete " style=""><input type="checkbox" class="form-check-input" name="" id="radio"></b> 
                        <label class="nav-link dropdown " id="navbarDropdown" role="button" data-bs="dropdown" aria-expanded="false" >
                           ¿Quienes somos?
                        </label>
                        </div>
                        <ul class="dropdown-menu submenu text-center " aria-labelledby="navbarDropdown">
                            <li><div class="flex"><b class=" " style=""> <input type="checkbox" class="form-check-input" name="" id="radio"></b>Contactenos</div></li>
                            <li><div class="flex"><b class=" " style=""> <input type="checkbox" class="form-check-input" name="" id="radio"></b>Unidad Familia</div></li>
                        </ul>
                </li>
                <li class="nav-item dropdown " onmouseover="showSubMenu(this)" >
                       <div class="flex">
                         <b class="delete " style=""><input type="checkbox" class="form-check-input" name="" id="radio"></b> <label class="nav-link dropdown " id="navbarDropdown" role="button" data-bs="dropdown" aria-expanded="false" >
                           Noticias
                         </label>
                       </div>
                        <ul class="dropdown-menu submenu text-center " aria-labelledby="navbarDropdown">
                            <li><div class="flex"><b class=" " style=""> <input type="checkbox" class="form-check-input" name="" id="radio"></b>Noticias</div></li>
                            <li><div class="flex"><b class=" " style=""> <input type="checkbox" class="form-check-input" name="" id="radio"></b> Noticia </div></li>
                        </ul>
                </li>
                  
                <li class="nav-item dropdown " onmouseover="showSubMenu(this)" >
                       <div class="flex">
                         <b class="delete " style=""><input type="checkbox" class="form-check-input" name="" id="radio"></b> <label class="nav-link dropdown " id="navbarDropdown" role="button" data-bs="dropdown" aria-expanded="false" >
                            Multimedia
                        </label>
                       </div>
                        <ul class="dropdown-menu submenu text-center " aria-labelledby="navbarDropdown">
                            <li><div class="flex"><b class=" " style=""> <input type="checkbox" class="form-check-input" name="" id="radio"></b>Fotos</div></li>
                            <li><div class="flex"><b class=" " style=""> <input type="checkbox" class="form-check-input" name="" id="radio"></b>Videos</div></li>
                       <!--     <li><a class="dropdown-item liT" otos"> Fotos <b  class="delete " >x</b></li> -->
                            <li><div class="flex"><b class=" " style=""> <input type="checkbox" class="form-check-input" name="" id="radio"></b>Videos</div></li>
                          </ul>
                </li>
        </ul>
        
        <button class="btn btn-primary custom-button">Enviar</button>`);
}else{
   
}
      $('.addNav').show();
    })

    $('#cerrarSeccion2').click(function(){
let session="true";
    $.ajax({

      method: "POST",
      url: "../../../ufm/index.php/destroy",
      data: {session:session},
      success: function (response) {
        location.reload();
        console.log(response);
      }
    });
 })
</script>

</body>
</html>
<?php }else{
    header("Location:". base_url('index.php/login'));
    exit;
} ?>