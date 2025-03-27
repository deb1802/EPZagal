document.addEventListener('DOMContentLoaded', function() {
    const languageDropdownItems = document.querySelectorAll('.dropdown-item[data-lang]');
    const translations = {};

    // Cargar las traducciones desde el archivo JSON
    fetch('translations.json')
        .then(response => response.json())
        .then(data => {
            Object.assign(translations, data);

            // Establecer el idioma por defecto
            changeLanguage('es');
        });

    // Función para cambiar el idioma
    function changeLanguage(lang) {
        document.querySelectorAll('[data-translate]').forEach(element => {
            const key = element.getAttribute('data-translate');
            if (translations[lang][key]) {
                element.innerHTML = translations[lang][key]; // Usar innerHTML para mantener el formato
            }
        });
    }

    // Event listeners para los items del dropdown
    languageDropdownItems.forEach(item => {
        item.addEventListener('click', function(event) {
            event.preventDefault();
            const lang = this.getAttribute('data-lang');
            changeLanguage(lang);
        });
    });
});