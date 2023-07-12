
// Obtener referencia al botón de reproducir y al span del texto seleccionado
$('#speak-btn').hide();
var speakBtn = document.getElementById('speak-btn');
var selectedText = document.getElementById('selected-text');

// Hacer clic automáticamente en el botón al cargar la página

// Función para mostrar u ocultar el botón de reproducir y establecer el texto seleccionado
function toggleSpeakBtn(show, text) {

 speakBtn.style.display = show ? 'inline-block' : 'none';
selectedText.innerText = text;

}

// Agregar evento de clic al botón de reproducir
speakBtn.addEventListener('click', function () {
// Verificar la compatibilidad del navegador con la síntesis de voz
if ('speechSynthesis' in window) {
    // Obtener las voces disponibles
    var voices = speechSynthesis.getVoices();

    // Crear un objeto SpeechSynthesisUtterance para convertir texto en voz
    var utterance = new SpeechSynthesisUtterance();

    // Establecer el texto a convertir en voz (obtenido del span del texto seleccionado)
    utterance.text = selectedText.innerText;

    // Establecer la voz que se utilizará (opcional)
    utterance.voice = voices[0]; // Puedes ajustar el índice según las voces disponibles en tu navegador

    // Reproducir el texto en voz
    speechSynthesis.speak(utterance);
}
});

// Agregar evento de selección de texto
document.addEventListener('mouseup', function () {
$('#speak-btn').show();
// Obtener el texto seleccionado
var selected = window.getSelection();
var selectedText = selected.toString().trim();

// Verificar si se seleccionó texto
if (selectedText !== '') {
    // Obtener la posición de la selección
    var range = selected.getRangeAt(0);
    var rect = range.getBoundingClientRect();

    // Calcular la posición del botón de reproducir relativa a la selección
    var left = rect.left + rect.width + 5;
    var top = rect.top - 5;

    // Mostrar el botón de reproducir y establecer el texto seleccionado
    toggleSpeakBtn(true, selectedText);

    // Posicionar el botón de reproducir al lado de la selección
    speakBtn.style.position = 'fixed';
    speakBtn.style.left = left + 'px';
    speakBtn.style.top = top + 'px';
} else {
    // No hay texto seleccionado, ocultar el botón de reproducir
    toggleSpeakBtn(false, '');
}
});
$('#selected-text').hide();
