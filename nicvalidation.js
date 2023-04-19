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
function validate() {
    if (
            nicvalidation() 
            ) {
        return true;
    } else {
        nicvalidation();
        
        return false;
    }
}


