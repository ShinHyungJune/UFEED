function fetchUtility(url, formData, message = null, icon = null) {
    fetch(url, {
        method: "POST",
        body: formData
    }).then(response => {
        if (response.ok) {
            if (message != null) {
                alert(message);
            }
            location.href = response.url;
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
