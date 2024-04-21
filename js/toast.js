function showToastMessage(type, message) {
    let toast = document.querySelector('#toast');
    toast.textContent = message;
    toast.className = 'show ' + type;
    setTimeout(function(){ toast.className = toast.className.replace('show', ''); }, 3000);
}
