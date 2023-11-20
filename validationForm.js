let form = document.forms[0];
let date = form.elements.Date;

date.addEventListener('input', function () {
    if (date.value != '')
        // var styles = window.getComputedStyle(date, ':before').getPropertyValue("display");
        date.classList.add('tool');
    else date.classList.remove('tool')
    // window.getComputedStyle(elem,null).getPropertyValue("height");
    // var style = window.getComputedStyle(date[style.display = 'none', Before]);
    // let style = document.createElement('style');

});


// валидация формы

let regex2 = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
let teltext = document.getElementById("Phone");

form.addEventListener("submit", function (e) {
    let name = form.elements.Name;
    let tel = form.elements.Phone;


    if (
        name.value != "" &&
        tel.value != "" &&
        regex2.test(tel.value) != false &&
        date.value != ""
    ) {
        name.classList.remove("is-invalid");
        name.classList.add("is-valid");
        tel.classList.remove("is-invalid");
        tel.classList.add("is-valid");
        date.classList.remove("is-invalid");
        date.classList.add("is-valid");
        alert('данные отправлены');
    } else {
        if (name.value == "") {
            name.classList.add("is-invalid");
        } else name.classList.add("is-valid");
        if (name.value != "" && name.classList.contains("is-invalid")) {
            name.classList.remove("is-invalid");
            name.classList.add("is-valid");

        }

        if (tel.value == "") {
            tel.classList.add("is-invalid");
            // teltext.innerHTML = "укажите телефон.";
        }
        if (tel.value != "" && regex2.test(tel.value) == false) {
            tel.classList.add("is-invalid");
            // teltext.innerHTML = "только цифры.";
        }

        if (
            tel.value != "" &&
            tel.classList.contains("is-invalid") &&
            regex2.test(tel.value) != false
        ) {
            tel.classList.remove("is-invalid");
            tel.classList.add("is-valid");
            teltext.innerHTML = "";
        }

        if (date.value == "") {
            date.classList.add("is-invalid");
        } else date.classList.add("is-valid");
        if (date.value != "" && date.classList.contains("is-invalid")) {
            date.classList.remove("is-invalid");
            date.classList.add("is-valid");
        }
        e.preventDefault();
    }
});


