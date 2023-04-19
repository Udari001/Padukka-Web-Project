window.onload = function () {
    document.f1.nic.focus();    
}

var isValide = true;

function nicvalidation() {
    var staffnum = document.f1.nic;
    var error = document.getElementById("nicError");
    error.innerHTML = " ";
    var letters = /^[SID]+[-]+[0-9]{4}$/;

    if (staffnum.value === "") {
        error.innerHTML = "Please enter your Student ID (Ex : SID-xxxx)";
        error.style.color = "red";
        return false;
    }

    if (!staffnum.value.match(letters)) {
        error.innerHTML = "Please enter a valid Student ID (Ex : SID-xxxx)";
        error.style.color = "red";
        return false;
    }

    error.innerHTML = "Your Student ID is accepted";
    error.style.color = "green";
    return true;
}

function namevalidation() {
    var uname = document.f1.name;
    var error = document.getElementById("nameError");
    error.innerText = " ";
    var letters = /^[A-Z a-z]+$/;

    if (uname.value === "") {
        error.innerText = "Please enter your Name";
        error.style.color = 'red';
        return false;
    }

    if (!uname.value.match(letters)) {
        error.innerText = "Name is invalid.. Please try again";
        error.style.color = 'red';
        return false;
    }

    error.innerText = "Your Name is accepted";
    error.style.color = 'green';
    return true;
}

function addressvalidation() {
    var uaddress = document.f1.address;
    var error = document.getElementById("addressError");
    error.innerHTML = " ";
    var letters = /^[0-9A-Za-z]+$/;

    if (uaddress.value === "") {
        error.innerHTML = "Address field is empty";
        error.style.color = "red";
        return false;
    }

    error.innerText = "Your address is accepted";
    error.style.color = 'green';
    return true;
}

function validate() {
    if (
            nicvalidation() &&
            namevalidation() &&
            addressvalidation() 
            ) {
        return true;
    } else {
        nicvalidation();
        namevalidation();
        addressvalidation();
        
        return false;
    }
}