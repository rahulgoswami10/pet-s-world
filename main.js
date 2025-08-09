const nameValid = () => {
    var name = document.getElementById("name").value;
    var nameRegex = /^[A-Z a-z]{3,30}$/;

    if (nameRegex.test(name)) {
        document.getElementById("errorName").innerHTML = "";
        document.getElementById("btn").disabled = false;
    } else {
        document.getElementById("errorName").innerHTML = "*Please enter a valid name!";
        document.getElementById("btn").disabled = true;
    }
}



const ageValid = () => {
    var age = document.getElementById("age").value;

    if(age >= 18 && age <= 60) {
        document.getElementById("errorAge").innerHTML = "";
        document.getElementById("btn").disabled = false;
    } else {
        document.getElementById("errorAge").innerHTML = "*Sorry! You aren't eligible";
        document.getElementById("btn").disabled = true;
    }
}


const emailValid = () => {
    var email = document.getElementById("email").value;
    var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

    if (emailRegex.test(email)) {
        document.getElementById("errorEmail").innerHTML = "";
        document.getElementById("btn").disable = false;
    } else {
        document.getElementById("errorEmail").innerHTML = "*Invalid email!!!";
        document.getElementById("btn").disable = true;
    }
}



const addressValid = () => {
    var address = document.getElementById("address").value;
    var addressRegex = /^(?![ -.&,_'":?!/])(?!.*[- &_'":]$)(?!.*[-.#@&,:?!/]{2})[a-zA-Z0-9- .#@&,_'":.?!/]+$/;

    if(addressRegex.test(address)) {
        document.getElementById("errorAddress").innerHTML = "";
        document.getElementById("btn").disable = false;
    } else {
        document.getElementById("errorAddress").innerHTML = "*Please enter a valid address";
        document.getElementById("btn").disable = true;
    }
}