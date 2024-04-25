function changeLanguage() {
    
    let languageSelect = document.getElementById('language');
    let language = languageSelect.options[languageSelect.selectedIndex].value;
    let message = document.getElementById('cookie-message');

    if (language === 'fr') {
        message.textContent = 'Ce site utilise des cookies pour améliorer votre expérience.';
    } else {
        message.textContent = 'Deze website maakt gebruik van cookies om uw ervaring te verbeteren.';
    }
}