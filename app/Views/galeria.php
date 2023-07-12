<!DOCTYPE html>
<html>
<head>
  <title>Galería</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>
   .gallery-container {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.gallery {
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
}

.selected-image {
  margin-bottom: 20px;
  position: relative;
}

.selected-image img {
  max-width: 100%;
  height: 420px;
}

.arrow {
  font-size: 57px;
  background-color: transparent;
  border: none;
  color: #000;
  cursor: pointer;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}

.arrow.prev {
  left: -10px;
}

.arrow.next {
  right: 10px;
}

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}

.thumbnails {
  display: flex;
  align-items: center;
  overflow-x: auto;
  max-height: 120px;
  width: 100%;
  margin-top: 10px;
  padding-bottom: 10px;
  scrollbar-width: thin;
  scrollbar-color: gray transparent;
}

ul {
  display: flex;
  list-style: none;
  padding: 0;
  margin: 0;
}

.thumbnail {
  margin-right: 10px;
}

.thumbnail:last-child {
  margin-right: 0;
}

.thumbnail button {
  background-color: transparent;
  border: none;
  padding: 0;
}

.thumbnail img {
  width: 80px;
  height: auto;
  opacity: 0.6;
  transition: opacity 0.3s ease-in-out;
}

.thumbnail.active img {
  opacity: 1;
}

.thumbnail img:hover {
  opacity: 1;
}

/* Scrollbar styles */
.thumbnails::-webkit-scrollbar {
  width: 4px !important;
}

.thumbnails::-webkit-scrollbar-track {
  background: transparent;

}

.thumbnails::-webkit-scrollbar-thumb {
  background-color: gray;
  border-radius: 10px !important;
  height:2px !important;
}


  </style>
</head>
<body style='padding-top:120px'>

<div class="container text-center pb-2">
  <button class="btn btn-primary" style="background:#00B0F6; border:none;" data-toggle="modal" data-target="#exampleModal">agrega imagenes</button>
</div>

<!-- MODAL -->

 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                 
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label>Imagen URL</label>
                            <input type="text" class="form-control" name="id" id="url">
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary cerrar" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary save" data-dismiss="modal">Save changes</button>
                        </div>

                </div>
            </div>
        </div> 
     
 <!--END MODAL -->

 <div class="gallery-container">
  <div class="gallery">
    <div class="selected-image">
      <img id="selectedImage" src="" alt="Selected Image">
    </div>
    <button class="arrow prev" onclick="changeImage(-1)">&lt;</button>
    <button class="arrow next" onclick="changeImage(1)">&gt;</button>
    <div class="container">
      <div class="row">
        <div class="thumbnails col" style="">
          <ul id="thumbnailList"></ul>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>


  <script>

    $('.save').click(function(){
      save=$('#url').val();
       console.log(save);
       images.push(save);
       console.log(images);
       populateThumbnails();
    });
 

    var images = [
  
      'https://www.unidadfamiliamedellin.com.co/unidadfamiliamedellin/resources/img/medsol1.jpg',
      'https://www.unidadfamiliamedellin.com.co/unidadfamiliamedellin/resources/img/medsol8.jpg',
      'https://vivirenelpoblado.com/wp-content/uploads/2022/04/La-alcaldia-de-Medellin-instala-un-Centro-Integral-de-Familia-en-la-UdeA-03-1200x800.jpg',
      // Agrega aquí más URLs de imágenes
    ];

   

    var currentIndex = 0;

    function changeImage(direction) {
      currentIndex += direction;
      if (currentIndex < 0) {
        currentIndex = images.length - 1;
      } else if (currentIndex >= images.length) {
        currentIndex = 0;
      }
      document.getElementById('selectedImage').src = images[currentIndex];
    }

    function populateThumbnails() {
      var thumbnailList = document.getElementById('thumbnailList');
      thumbnailList.innerHTML = '';

      images.forEach(function (imageUrl, index) {
        var li = document.createElement('li');
        li.className = 'thumbnail';
        if (index === currentIndex) {
          li.className += ' active';
        }

        var button = document.createElement('button');
        button.onclick = function () {
          changeImage(index - currentIndex);
        };

        var img = document.createElement('img');
        img.src = imageUrl;
        img.alt = 'Image ' + index;
        img.width = 100;
        img.height = 'auto';

        button.appendChild(img);
        li.appendChild(button);
        thumbnailList.appendChild(li);
      });
    }

    // Inicializar la galería con la primera imagen
    document.getElementById('selectedImage').src = images[currentIndex];
    populateThumbnails();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
