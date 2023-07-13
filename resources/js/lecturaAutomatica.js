
$(document).ready(function() {
  $('.elemento-lectura').trigger('click');
//if(sessionStorage.getItem('audio')=='true'){
  // Crea un objeto de síntesis de voz
 var synthesis = window.speechSynthesis;

 // Variable para el temporizador
 var temporizador;

 // Función para reproducir el texto
 function reproducirTexto(event) {
   var elemento = event.target; // Elemento específico sobre el cual pasaste el mouse

   var utterance = new SpeechSynthesisUtterance(elemento.textContent);
   synthesis.speak(utterance);
 }

 // Función para iniciar el temporizador y reproducir el texto
 function iniciarTemporizador(event) {
   detenerReproduccion(); // Detener la reproducción actual antes de iniciar una nueva

   temporizador = setTimeout(function() {
     reproducirTexto(event);
   }, 1000); // Esperar 2 segundos antes de reproducir el texto
 }

 // Función para detener la reproducción y limpiar el temporizador
 function detenerReproduccion() {
   synthesis.cancel();
   clearTimeout(temporizador);
 }

 // Obtiene todos los elementos con la clase "elemento-lectura"
 var elementos = document.querySelectorAll(".elemento-lectura");

 // Asocia los eventos mouseenter y mouseleave a cada elemento
 elementos.forEach(function(elemento) {
   elemento.addEventListener("mouseover", iniciarTemporizador);
   elemento.addEventListener("mouseout", detenerReproduccion);
 });

  
//}
});
