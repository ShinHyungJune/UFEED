function fetchUtility(url, formData, modal = false, icon = null) {
    fetch(url, {
        method: "POST",
        body: formData
    }).then(response => {
        if (response.ok) {
            if (modal) {
                showModal();
            } else location.href = response.url;
        } else if (response.status === 419) {
            location.reload();
        } else return response.json();
    }).then(data => {
        let validationTxt = document.querySelectorAll('.validation-txt');

        validationTxt.forEach(element => {
            element.style.display = 'none';
            element.innerHTML = '';
            for (let key in data) {
                if (element.id === "validation-" + key) {
                    element.style.display = '';
                    element.innerHTML = `${icon == null ? '' : icon} ${data[key][0]}`;
                }
            }
        })
    })
}

function showModal() {
    document.querySelector('.modal-alert').style.display = '';
}

function hideModal() {
    document.querySelector('.modal-alert').style.display = 'none';
}
