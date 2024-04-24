// Get the form and progress bar elements
const form = document.forms[0];
const progressBar = document.querySelector('#progressBar').firstElementChild;

form.addEventListener('submit', (e) => {
    e.preventDefault();

    // Create a new FormData instance
    const formData = new FormData(form);

    // Create a new XMLHttpRequest
    const xhr = new XMLHttpRequest();
    xhr.open('POST', form.action, true);

    // Update progress bar during upload
    xhr.upload.onprogress = (e) => {
        if (e.lengthComputable) {
            const percentComplete = (e.loaded / e.total) * 100;
            progressBar.style.width = `${percentComplete}%`;
        }
    };

    // Handle response
    xhr.onload = () => {
        if (xhr.status == 200) {
            progressBar.style.width = '0%';
            const response = JSON.parse(xhr.responseText);
            showToastMessage(response.status, response.message);
        }
    };

    // Send the request
    xhr.send(formData);
});
