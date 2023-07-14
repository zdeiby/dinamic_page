<?php 
$nombre=' ';
try{
  $nombre=$datosNav['nombre'];
}catch (Exception){

}
?>

<?php $tof='tru'; ?>  <!-- true or false -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
    .fixed-top {
      position: fixed;
      top: -4px !important;
      right: 0;
      left: 0;
      z-index: 1030;
    }

    .submenu {
      display: none;
      position: absolute;
      z-index: 1;
    }

    .submenu.show {
      display: block;
    }

    .nav {
      position: relative;
      background:#ffff;
      border-bottom: 2px solid #00B0F6;
    }

    .sub {
      background: #ffffff;
      opacity: 1;
      text-decoration: none;
      color: inherit;
    }

    .liT elemento-lectura:hover {
      background: #e5e5e5;
    }

    li {
      list-style: none;
    }

    a {
      text-decoration: none;
      color: black !important;
    }

    .div1 {
      background: #ffffff;
      opacity: 1;
      border: 2px solid #e5e5e5;
      border-radius: 8%;
    }

    .navbar>.container, .navbar>.container-fluid {
      display: flex;
      justify-content: center;
      align-items: center;
      padding-top: 13px !important;
    }

    .custom-button {
      border: 1px solid #00B0F6 !important;
      background: #00B0F6 !important;
    }

    .custom-button:hover {
      background: #008CC3 !important;
    }
    .tamano{
        font-size:20px;
    }
    .img2{
    height: 300px !important;
    border-radius:2% !important;
}
.nav-link:hover{
  border-bottom:1px solid #00B0F6 !important;
}
.delete{
  color:white;
}
.changeColor{
  color:red;
  display: flex;
  flex-direction: column-reverse;
  flex-wrap: wrap;
  align-content: center;
  cursor: pointer;
}
.borrar:hover{
  background:#f56464 !important;
  border:2px solid #f56464 !important;
}
.btn-editar:hover{
  background:#00B0F6 !important;
  border:2px solid #00B0F6 !important;
}

.btn-lectura:hover{
  background:#00B0F6 !important;
  border:2px solid #00B0F6 !important;
}
.activo{
  background:green !important;
  border:2px green !important;
}
#speak-btn{
 background: #b3e0f2 !important;
 width: 3%;
 border-radius:50%;
 z-index: 9999 !important;
 
}
#speak-btn:hover{
 background: #00B0F6 !important;
}
.profile{
  width: 30px;
  border-radius:50%;
}
.nombre{
  
  font-size:17px;
}
  </style>
    <title>Document</title>
</head>
<body>
<div>
<nav class="navbar navbar-expand-md navbar-light fixed-top nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../../../ufm/index.php">
                <img src="https://cdnwordpresstest-f0ekdgevcngegudb.z01.azurefd.net/es/wp-content/uploads/2022/03/Open-Graph-.png" alt="" width="150" height="100">
            </a>
            <button id="myButton" class="navbar-toggler" type="button">
            <span class="navbar-toggler-icon"></span>
          </button>
       

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav tamano">
                  <?php foreach ($nav as $value) { ?>
                <li class="nav-item dropdown inicio d1"  onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                       <b class="delete ">x</b>
                <label class="nav-link dropdown " dato="m1"  id="navbarDropdown"  role="button" data-bs="dropdown" aria-expanded="false" contenteditable="<?php echo $tof ?>">
                          <label id="m1"  class="elemento-lectura"><?php echo $value->nombre ?></label>
              </label>
                        <ul class="dropdown-menu submenu text-center div1" aria-labelledby="navbarDropdown">
                            <li class="sd1"><b  class="delete b" >x</b><a id="sm1" dato="sm1" class="dropdown-item liT elemento-lectura " href="../../../ufm/index.php/<?php echo $value->opcion ?>/<?php  echo $value->slug ?>"contenteditable="<?php echo $tof ?>"><?php echo $value->submenu ?></a></li>
                           <!-- <li class="sd2"><b  class="delete b" >x</b><a dato="sm2" class="dropdown-item liT elemento-lectura " href="../../../ufm/index.php/editar-inicio"contenteditable="<?php echo $tof ?>">Modificar inicio</a></li> -->
                          </ul>
                    </li>
                    <?php   } ?>
       
                 
                
               
            </div>
 <?php echo ( $nombre == ' ' ) ? '<a href="../../../ufm/index.php/login"><button type="button" class="btn btn-primary custom-button ">Login UFM</button></a>'
                   :
                   '<ul class="navbar-nav tamano">
                    <li class="nav-item dropdown" onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">  
                     <label class="nombre">' .$nombre. ' </label><img class="profile" src="https://avatars.githubusercontent.com/u/111442309?v=4" >
                      </a>
                        <ul class="dropdown-menu submenu text-center div1" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item liT" href="../../../ufm/index.php/config">Configuración</a></li>
                            <li><a class="dropdown-item liT " id="cerrarSeccion">Salir</a></li>
                        </ul>
                    </li>
                </ul>' ?>
         
               
     




          
                  
            
        </div>
    </nav>
</div>


<br>
<div style="background-color: #00B0F6; width: 100%; height: 40px; font-size: 25px; color: #ffffff !important" class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between border-bottom fixed-top">
  <div class="elemento-lectura">Unidad Familia Medellin</div>
  <div class="mobile-buttons">
  <label style="font-size: 15px; background: #008CC3; border: 2px solid #008CC3; border-radius: 5px" class="btn-lectura">Lectura automatica</label>
    <label style="font-size: 15px; background: #008CC3; border: 2px solid #008CC3; border-radius: 5px" class="borrar">Eliminar</label>
    <a style="text-decoration: none; color: white !important; padding-left: 4px"><label style="font-size: 15px; background: #008CC3; border: 2px solid #008CC3; border-radius: 5px" class="btn-editar">Agregar menú</label></a>
  </div>
</div>

<style>
  @media (max-width: 767px) {
    .mobile-buttons {
      display: none;
    }
  }
</style>

<div>
    <span id="selected-text" value="hola">holaa</span>
    <button id="speak-btn" style="padding: 0; border: none; background: none;">
    <img src="<?php echo base_url('uploads/triangulo.png'); ?>" alt="" style="width: 20%; height: auto;">
    </button>

</div>



<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="<?php echo TALK; ?> "></script>
<script src="<?php echo AUTO; ?> "></script>
<script>
    function showSubMenu(elem) {
        elem.querySelector('.submenu').classList.add('show');
    }
    function hideSubMenu(elem) {
        elem.querySelector('.submenu').classList.remove('show');
    }
    var button = document.getElementById('myButton');
  var heading = document.getElementById('navbarSupportedContent');

  // Variable para mantener el estado del botón
  var cond = false;

  // Agregar o quitar la clase al hacer clic en el botón

  button.addEventListener('click', function() {
    if (cond) {
      heading.classList.remove('show');
      cond = false;
    } else {
      heading.classList.add('show');
      cond = true;
    }
  });

    $('.delete').hide();  //borrar oculto
    $('.add').hide();
    
    $('.borrar').click(function(){
      $('.add').hide();
      $('.inputs').hide();
      $('.collapse').append(`
                 <form class="inputs" method="">  
                 <label ></label>
                 <button type="submit" class="btn btn-primary custom-button bton2">Ver menú</button>     
                 </form>`);
      $('.delete').addClass('changeColor');
     $('.delete').show(); 
     $('.add').hide();
     $(document).ready(function () {
      let confirmar=confirm("¿Estas seguro que quieres eliminar items?");
      if(confirmar){ 
        $('.tamano li b').click(function () {
             $(this).next('label').hide();
              $(this).hide();
              console.log($(this).next('label'));   
              sessionStorage.setItem('menu','');
              sessionStorage.setItem($(this).next('label').attr('dato'),$(this).next('label').text());
            })
  

        $('.tamano .b ').click(function () {
          if(confirmar){
              $(this).next('a').hide();
              $(this).hide();
              console.log($(this).next('label'));  
              sessionStorage.setItem($(this).next('a').attr('dato'),$(this).next('a').text());
             
          }
        });
      }
    });
    })

   let datos=false;

if(sessionStorage.getItem('audio')=='true' ){
  $('.btn-lectura').attr("class","activo");
  $('.activo').click(function(){
    $('.activo').attr("class","btn-lectura")
    sessionStorage.setItem('audio', 'false');
    $('.btn-lectura').text('Lectura automatica');
    location.reload();
   })
   
}

 $('.btn-lectura').click(function(){
  $('.btn-lectura').attr("class","activo")
    sessionStorage.setItem('audio', 'true');
    $('.activo').text('Lectura automatica activa');
    location.reload();
   })

    


    $('.btn-editar').click(function(){
    
              
                 $('.collapse').append(`
                 <form class="inputs" method="">  
                 <label ></label>
            
                 <div class="row">
                 <div class="col"> 
                 <br>
                 <br>
                 <br>
                  <input type="text" id="menu" placeholder="Ingresa un nuevo menu"><br>
                  <input type="radio" name="opcion" value="1" required>Tipo Inicio<br>
                  <input type="radio" name="opcion" value="2">Tipo Noticia<br>
                 </div>
                 <div class="col">  
                 <br>
                 <br>
                 <br> 
                 <button type="submit" class="btn btn-primary custom-button bton">Guardar</button> 
                 </div>     
                 </div>      
                 </form>`);


           


          $('.bton').click(function(e){
          var opcion = $('input[name="opcion"]:checked').val();
          console.log(opcion)
            if(opcion !==undefined){
               let menu = $('#menu').val();
          

  
         //  console.log(menuText,menu);
           // e.preventDefault();
              $.ajax({
                  url: "../../../../../ufm/index.php/mi-controlador/aprobar",
                  method: "POST",
                  data:{menu:menu,
                    opcion:opcion
                        },
                  success: function(response) {
                  console.log(response)
                  location.reload();

                  },
                  error: function(xhr, status, error) {
                      // Manejar errores en la petición AJAX
                    //  console.log(xhr.responseText);
                  }
              });
            }
           
            
          })
    })
    

 //Cerrar session

 $('#cerrarSeccion').click(function(){
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
