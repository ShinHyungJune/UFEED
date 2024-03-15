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

function deleteUtility(url) {
    let deleteForm = document.getElementById('delete');
    let checkedCheckbox = document.querySelectorAll('.check-input:checked');
    let deleteId = Array.from(checkedCheckbox).map(checkbox => checkbox.id);

    deleteId.forEach(id => {
        let deleteInput = document.createElement('input');
        deleteInput.setAttribute('type', 'hidden');
        deleteInput.setAttribute('name', 'id[]');
        deleteInput.value = id;
        deleteForm.appendChild(deleteInput);
    })

    let formData = new FormData(deleteForm);
    fetchUtility(url, formData)
}

function showModal() {
    document.querySelector('.modal-alert').style.display = '';
}

function hideModal() {
    document.querySelector('.modal-alert').style.display = 'none';
}

function hideModalReload() {
    document.querySelector('.modal-alert').style.display = 'none';
    location.reload();
}

function hideModalResponseUrl(url) {
    document.querySelector('.modal-alert').style.display = 'none';
    location.href = url;
}
