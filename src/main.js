
//product type selection

document.getElementById("productType").addEventListener("change", function () {
    var myClass = this.value
    eval(myClass + '()');
})

function DVD() {

    document.getElementById('DVD').classList.toggle('d-none');
    document.getElementById('size').required = true;
    document.getElementById('Book').classList.add('d-none');
    document.getElementById('weight').required = false;
    document.getElementById('lengthDiv').classList.add('d-none');
    document.getElementById('length').required = false;
    document.getElementById('widthDiv').classList.add('d-none');
    document.getElementById('width').required = false;
    document.getElementById('heightDiv').classList.add('d-none');
    document.getElementById('height').required = false;
    document.getElementById('submit').setAttribute('value', 'DVD');

}

function Book() {

    document.getElementById('DVD').classList.add('d-none');
    document.getElementById('size').required = false;
    document.getElementById('Book').classList.toggle('d-none');
    document.getElementById('weight').required = true;
    document.getElementById('lengthDiv').classList.add('d-none');
    document.getElementById('length').required = false;
    document.getElementById('widthDiv').classList.add('d-none');
    document.getElementById('width').required = false;
    document.getElementById('heightDiv').classList.add('d-none');
    document.getElementById('height').required = false;
    document.getElementById('submit').setAttribute('value', 'Book');

}

function Furniture() {

    document.getElementById('DVD').classList.add('d-none');
    document.getElementById('size').required = false;
    document.getElementById('Book').classList.add('d-none');
    document.getElementById('weight').required = false;
    document.getElementById('lengthDiv').classList.toggle('d-none');
    document.getElementById('length').required = true;
    document.getElementById('widthDiv').classList.toggle('d-none');
    document.getElementById('width').required = true;
    document.getElementById('heightDiv').classList.toggle('d-none');
    document.getElementById('height').required = true;
    document.getElementById('submit').setAttribute('value', 'Furniture');

}

function Default() {

    document.getElementById('DVD').classList.add('d-none');
    document.getElementById('Book').classList.add('d-none');
    document.getElementById('lengthDiv').classList.add('d-none');
    document.getElementById('widthDiv').classList.add('d-none');
    document.getElementById('heightDiv').classList.add('d-none');
    document.getElementById('submit').setAttribute('value', 'submit');

}

//validation

var forms = document.querySelectorAll(".needs-validation");

Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener("submit", function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add("was-validated");
    });
});

