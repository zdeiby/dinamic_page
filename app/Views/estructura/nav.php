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
            <a class="navbar-brand" href="../../ufm/index.php">
                <img src="https://cdnwordpresstest-f0ekdgevcngegudb.z01.azurefd.net/es/wp-content/uploads/2022/03/Open-Graph-.png" alt="" width="150" height="100">
            </a>
            <button id="myButton" class="navbar-toggler" type="button">
            <span class="navbar-toggler-icon"></span>
          </button>
       

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav tamano">
                <li class="nav-item dropdown inicio d1"  onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                       <b class="delete ">x</b>
                <label class="nav-link dropdown " dato="m1"  id="navbarDropdown"  role="button" data-bs="dropdown" aria-expanded="false" contenteditable="<?php echo $tof ?>">
                          <label id="m1"  class="elemento-lectura"><?php echo $nav[0]['nombre'] ?></label>
              </label>
                        <ul class="dropdown-menu submenu text-center div1" aria-labelledby="navbarDropdown">
                            <li class="sd1"><b  class="delete b" >x</b><a id="sm1" dato="sm1" class="dropdown-item liT elemento-lectura " href="../../../ufm/index.php"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $nav[5]['nombre'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                           <!-- <li class="sd2"><b  class="delete b" >x</b><a dato="sm2" class="dropdown-item liT elemento-lectura " href="../../../ufm/index.php/editar-inicio"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Modificar inicio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li> -->
                          </ul>
                    </li>
                    <li class="nav-item dropdown  d2" onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                    <b class="delete ">x</b> <label class="nav-link dropdown "  dato="m2"  id="navbarDropdown" role="button" data-bs="dropdown" aria-expanded="false" contenteditable="<?php echo $tof ?>">
                    <label id="m2" class="elemento-lectura" ><?php echo $nav[1]['nombre'] ?></label>
              </label>
                        <ul class="dropdown-menu submenu text-center div1" aria-labelledby="navbarDropdown">
                            <li class="sd3"><b  class="delete b" >x</b><a dato="sm3" id="sm3" class="dropdown-item liT elemento-lectura " href="../../../ufm/index.php/contactenos"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $nav[7]['nombre'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            <li class="sd4"><b  class="delete b" >x</b><a dato="sm4" id="sm4"class="dropdown-item liT elemento-lectura " href="../../../ufm/index.php/ufm"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $nav[8]['nombre'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown d3" onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                         <b class="delete text-center">x</b> <label class="nav-link dropdown "   dato="m3" id="navbarDropdown" role="button" data-bs="dropdown" aria-expanded="false"contenteditable="<?php echo $tof ?>">
                         <label id="m3" class="elemento-lectura">  <?php echo $nav[2]['nombre'] ?></label>
              </label>
                        <ul class="dropdown-menu submenu div1" aria-labelledby="navbarDropdown">
                            <li class="sd5"><b  class="delete b" >x</b><a dato="sm5" id="sm5" class="dropdown-item liT elemento-lectura " href="../../../ufm/index.php/noticias"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $nav[9]['nombre'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            <li class="sd6"><b  class="delete b" >x</b><a dato="sm6" id="sm6" class="dropdown-item liT elemento-lectura " href="../../../ufm/index.php/agg-noticia"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $nav[10]['nombre'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown  d4" onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                    <b class="delete ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x</b> <label class="nav-link dropdown "  dato="m4"  id="navbarDropdown" role="button" data-bs="dropdown" aria-expanded="false"contenteditable="<?php echo $tof ?>">
                    <label id="m4" class="elemento-lectura"><?php echo $nav[3]['nombre'] ?></label>
              </label>
                        <ul class="dropdown-menu submenu text-center div1" aria-labelledby="navbarDropdown">
                            <li class="sd7"><b  class="delete b" >x</b><a dato="sm7" id="sm7" class="dropdown-item liT elemento-lectura " href="../../../ufm/index.php/galeria"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $nav[11]['nombre'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            <li class="sd8"><b  class="delete b" >x</b><a dato="sm8" id="sm8" class="dropdown-item liT elemento-lectura " href="../../../ufm/index.php/galeria-videos"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $nav[12]['nombre'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                       <!--     <li><a class="dropdown-item liT elemento-lectura" href="../../../ufm/index.php/agg-fotos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agregar Fotos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b  class="delete " >x</b></a></li> -->
                            <li class=" sd9"><b  class="delete b" >x</b><a dato="sm9" id="sm9" class="dropdown-item liT elemento-lectura a" href="../../../ufm/index.php/videos-agg"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $nav[13]['nombre'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                          </ul>
                    </li>
        
                    <li class="nav-item dropdown showadd d5" onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)" contenteditable="false">
                    <b class="delete ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x</b> <label class="nav-link dropdown "  dato="m5"  id="navbarDropdown" role="button" data-bs="dropdown" aria-expanded="false">
                    <label id="m5" class="elemento-lectura"><?php echo $nav[4]['nombre'] ?></label>
              </label>
                 
                        <ul class="dropdown-menu submenu text-center div1" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item liT elemento-lectura li1" id="sm10" href="../../../ufm/index.php/nuevapagina">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $nav[14]['nombre'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                         <!--   <li><b  class="delete b" >x</b><a class="dropdown-item liT elemento-lectura li2" href="../../../ufm/index.php/galeria-videos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li> -->
                       <!--     <li><a class="dropdown-item liT elemento-lectura" href="../../../ufm/index.php/agg-fotos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agregar Fotos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b  class="delete " >x</b></a></li> -->
                         <!--   <li><b  class="delete b" >x</b><a  class="dropdown-item liT elemento-lectura a lit elemento-lectura3" href="../../../ufm/index.php/videos-agg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;editar apartado&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li> -->
                          </ul>
                          
                    </li>
            
                </ul>
               
            </div>
 <?php echo ( $nombre == ' ' ) ? '<a href="../../../ufm/index.php/login"><button type="button" class="btn btn-primary custom-button ">Login UFM</button></a>'
                   :
                   '<ul class="navbar-nav tamano">
                    <li class="nav-item dropdown" onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label class="nombre">' .$nombre. ' </label>&nbsp;&nbsp;<img class="profile" src="https://avatars.githubusercontent.com/u/111442309?v=4" >
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
    <a style="text-decoration: none; color: white !important; padding-left: 4px"><label style="font-size: 15px; background: #008CC3; border: 2px solid #008CC3; border-radius: 5px" class="btn-editar">Editar Menu</label></a>
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
  
 let m5= $('#m5').text(sessionStorage.getItem('menu'));

 $('.li1').text(sessionStorage.getItem('menu'));
 $('#m1').text();
 let m1Show=sessionStorage.getItem('m1');

  console.log(m1Show)
   if(sessionStorage.getItem('menu')==''){
    $('.showadd').hide();
   }

   if(sessionStorage.getItem('m1') !==null  ){
    //$('#m1').text(sessionStorage.getItem('m1'));
    $('.d1').hide();
   }
   if(sessionStorage.getItem('m2') !==null  ){
    //$('#m1').text(sessionStorage.getItem('m1'));
    $('.d2').hide();
   }
   if(sessionStorage.getItem('m3') !==null  ){
    //$('#m1').text(sessionStorage.getItem('m1'));
    $('.d3').hide();
   }
   if(sessionStorage.getItem('m4') !==null  ){
    //$('#m1').text(sessionStorage.getItem('m1'));
    $('.d4').hide();
   }
//-----------------------------------------------------------------------------------
   if(sessionStorage.getItem('sm1') !==null  ){   //esconder menu y sub menu1
    //$('#m1').text(sessionStorage.getItem('m1'));
    $('.sd1').hide();
   }
  // if(sessionStorage.getItem('sm2') !==null  ){
    //$('#m1').text(sessionStorage.getItem('m1'));
   // $('.sd2').hide();
  // } 
   if(sessionStorage.getItem('sm1') !==null /* && sessionStorage.getItem('sm2') !==null*/){
    $('.d1').hide();
   } //fin 
//---------------------------------------------------------------------------------------------
   if(sessionStorage.getItem('sm3') !==null  ){
    //$('#m1').text(sessionStorage.getItem('m1'));
    $('.sd3').hide();
   }
   if(sessionStorage.getItem('sm4') !==null  ){
    //$('#m1').text(sessionStorage.getItem('m1'));
    $('.sd4').hide();
   } 
   if(sessionStorage.getItem('sm3') !==null && sessionStorage.getItem('sm4') !==null){
    $('.d2').hide();
   }
   //---------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------
if(sessionStorage.getItem('sm5') !==null  ){
    //$('#m1').text(sessionStorage.getItem('m1'));
    $('.sd5').hide();
   }
   if(sessionStorage.getItem('sm6') !==null  ){
    //$('#m1').text(sessionStorage.getItem('m1'));
    $('.sd6').hide();
   } 
   if(sessionStorage.getItem('sm5') !==null && sessionStorage.getItem('sm6') !==null){
    $('.d3').hide();
   }
   //---------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------
if(sessionStorage.getItem('sm7') !==null  ){
    //$('#m1').text(sessionStorage.getItem('m1'));
    $('.sd7').hide();
   }
   if(sessionStorage.getItem('sm8') !==null  ){
    //$('#m1').text(sessionStorage.getItem('m1'));
    $('.sd8').hide();
   } 
   if(sessionStorage.getItem('sm9') !==null  ){
    //$('#m1').text(sessionStorage.getItem('m1'));
    $('.sd9').hide();
   } 
   if(sessionStorage.getItem('sm7') !==null && sessionStorage.getItem('sm8') !==null && sessionStorage.getItem('sm9') !==null){
    $('.d4').hide();
   }
   //---------------------------------------------------------------------------------------------

    $('.delete').hide();  //borrar oculto
    $('.add').hide();
    
    $('.borrar').click(function(){
      $('.add').hide();
      $('.inputs').hide();
      $('.collapse').append(`
                 <form class="inputs" method="">  
                 <label >&nbsp;</label>
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
      var nombre = '<?php echo $tof; ?>';
      $('.delete').hide();
      $('.bton2').hide();
        datos=!datos;
        
        let enviar=datos.toString();
        console.log(enviar);
        if(enviar === 'true' && $('#m5').text() == '' ){
                $('.navbar-nav').attr('contenteditable',enviar);
               
                 $('.collapse').append(`
                 <form class="inputs" method="">  
                 <label >&nbsp;</label>
            
                 <div class="row">
                 <div class="col"> 
                  <input type="text" id="menu" placeholder="Ingresa un nuevo menu"><br>
                 </div>
                 <div class="col">   
                 <button type="submit" class="btn btn-primary custom-button bton">Guardar</button> 
                 </div>     
                 </div>      
                 </form>`);
          }else{
            $('.navbar-nav').attr('contenteditable',enviar);
            $('.collapse').append(`
                 <form class="inputs" method="">  
                 <button type="submit" class="btn btn-primary custom-button bton">Guardar</button>      
                 </form>`);
          }

          $('.bton').click(function(e){
            let menu = $('#menu').val();
            let menuText=$('#menu').text();
            sessionStorage.setItem('menu',menu);
            let m1= $('#m1').text();
            let m2= $('#m2').text();
            let m3= $('#m3').text();
            let m4= $('#m4').text();
            let m52=$('#m5').text();

            let sm1= $('#sm1').text();
           // let sm2= $('#sm2').text();
            let sm3= $('#sm3').text();
            let sm4= $('#sm4').text();
            let sm5= $('#sm5').text();
            let sm6= $('#sm6').text();
            let sm7= $('#sm7').text();
            let sm8= $('#sm8').text();
            let sm9= $('#sm9').text();
            let sm10= $('#sm10').text();

            let navCompleto={
              m1:m1,
              m2:m2,
              m3:m3,
              m4:m4,
              menuText:menuText,
              m52:m52,
              sm1:sm1,
             // sm2:sm2,
              sm3:sm3,
              sm4:sm4,
              sm5:sm5,
              sm6:sm6,
              sm7:sm7,
              sm8:sm8,
              sm9:sm9,
             sm10:sm10,
              menu:menu
            }
           
           console.log(menuText,menu);
            e.preventDefault();
              $.ajax({
                  url: "../../../../../ufm/index.php/mi-controlador/aprobar",
                  method: "POST",
                  data: {navCompleto:navCompleto},
                  success: function(response) {
                  console.log(response)
                  },
                  error: function(xhr, status, error) {
                      // Manejar errores en la petición AJAX
                    //  console.log(xhr.responseText);
                  }
              });
              $('.bton').hide();
            
             let m5= $('#m5').text(menu);
              $('.li1').text(menu);
              $('.showadd').show();
              $('.inputs').hide();
              $('.navbar-nav').attr('contenteditable',!enviar);
          })

          if(enviar ==='false'){
            $('.bton').hide();
            $('#menu').hide();
          }



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
