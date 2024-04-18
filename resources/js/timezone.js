const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
// obtengo la zona horaria del dia de hoy
var timezoneOffset = new Date().getTimezoneOffset();
// Envía la información de la zona horaria al servidor
fetch('/set-timezone', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': csrfToken // Asegúrate de tener el token CSRF en tu página
    },
    body: JSON.stringify({ timezone_offset: timezoneOffset })
});

// configuraqcion de idioma del navegador
var idioma = navigator.language || navigator.userLanguage;
// Envía la información del idioma al servidor
fetch('/lang/'+idioma, {
    method: 'GET'
});